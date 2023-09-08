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
        Schema::create('message_reply', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('desc')->default('')->comment('回覆區');
            $table->bigInteger('product_type_id')->comment('產品類別ID');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('message_reply');
    }
};
