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
        //
        Schema::create('products_table', function (Blueprint $table) {
            $table->id();
            $table->string('prodName');
            $table->float('prodPrice');
            $table->string('prodDesc');
            $table->string('prodImage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::drop('products_table');
    }
};
