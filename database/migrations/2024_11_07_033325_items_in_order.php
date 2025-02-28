<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('items_in_order', function (Blueprint $table) {
            $table->id();
            $table->string('order_code');
            $table->integer('product_id');
            $table->integer('agency_id');
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('items_in_order', function (Blueprint $table) {
            //
        });
    }
};
