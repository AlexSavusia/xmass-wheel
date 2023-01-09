<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('wheel.accrual_prize', function (Blueprint $table) {
            $table->string('prize_type');
            $table->string('prize_name');
            $table->string('prize_slug');
            $table->integer('prize_amount')->default(0);
            $table->integer('period');
            $table->integer('accrual_count');
            $table->integer('initial_accrual_count');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('initial_at')->nullable();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('wheel.accrual_prize');
    }
};
