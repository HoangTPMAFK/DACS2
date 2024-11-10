<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();
            $table->string('voucher_code')->unique();
            $table->timestamp('start_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('end_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->boolean('allProduct');
            $table->json('productsList')->nullable();
            $table->integer('discountAmount');
            $table->string('unit');
            $table->integer('maxDiscount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vouchers');
    }
};
