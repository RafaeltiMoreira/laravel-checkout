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
        Schema::create('shippings', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'order_id')->constrained();
            $table->string(column: 'address');
            $table->string(column: 'city');
            $table->string(column: 'state');
            $table->string(column: 'zipcode');
            $table->string(column: 'district');
            $table->string(column: 'number');
            $table->string(column: 'complement')->nullable();
            $table->string(column: 'tracking_code')->nullable();
            $table->string(column: 'status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shippings');
    }
};