<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('discounts', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedInteger('product_id');
            $table->string('code');
            $table->decimal('percentage',5,3);
            $table->decimal('min_amount',7,2);
            $table->timestamp('expiry_date')->nullable();
            $table->enum('status',['active','inactive'])->default('active');
            $table->foreign('product_id')->references('id')->on('products');
            $table->softDeletes('Deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discounts');
    }
};
