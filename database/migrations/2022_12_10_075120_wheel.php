<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::connection()->statement('CREATE SCHEMA IF NOT EXISTS wheel');

        Schema::create('wheel.wheel_attempts', function (Blueprint $table) {
            $table->integer('user_id')
                ->comment('ID пользователя');
            $table->integer('attempts_count')
                ->default(0)
                ->comment('Количество попыток');
            $table->timestamp('free_attempt_available_time_at')
                ->nullable()
                ->comment('Время, когда будет доступна бесплатная попытка');
            $table->timestamps();
        });

        Schema::create('wheel.attempt_accrual_histories', function (Blueprint $table) {
            $table->integer('user_id')
                ->comment('ID пользователя');
            $table->integer('order_id')
                ->nullable()
                ->comment('ID заказа на стороне WP');
            $table->integer('count')
                ->comment('На сколько изменилось количество');
            $table->string('type')
                ->comment('Тип начислений');
            $table->timestamp('created_at')
                ->default('now()')
                ->comment('Время, когда будет доступен бесплатная попытка');
        });

        Schema::create('wheel.prize', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('slug');
            $table->string('name');
            $table->string('code')->nullable()->unique();
            $table->integer('amount')->nullable();
            $table->timestamp('expiry_date')->nullable();
            $table->timestamp('created_at')->default('now()');
            $table->timestamp('issued_at')->nullable();
        });

        DB::connection()->insert("
            INSERT INTO wheel.prize (type, slug, name) 
            VALUES 
                ('free', 'free', 'Spin again'), 
                ('none', 'none', 'No reward')
        ");

        Schema::create('wheel.spin', function (Blueprint $table) {
           $table->increments('id');
           $table->integer('user_id');
           $table->integer('prize_id');
           $table->string('prize_type');
           $table->string('prize_slug');
           $table->timestamp('spin_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wheel.wheel_attempts');
        Schema::dropIfExists('wheel.wheel_attempt_accrual_histories');
        Schema::dropIfExists('wheel.prize');
        Schema::dropIfExists('wheel.spin');

        DB::connection()->statement('DROP SCHEMA IF EXISTS wheel');
    }
};
