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
        Schema::create('wheel.prize_count', function (Blueprint $table) {
            $table->string('prize_slug');
            $table->integer('ticketers_count')
                ->default(0)
                ->comment('Количество призов для тикетеров');
            $table->integer('non_ticketers_count')
                ->default(0)
                ->comment('Количество призов для не тикетеров');
            $table->integer('total')
                ->default(0)
                ->comment('Общее количество призов');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wheel.prize_count');
    }
};
