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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->text("Description");
            $table->bigInteger('Location_Id')->unsigned();
            $table->integer('Size');
            $table->decimal('Price');
            $table->string('Currency');
            $table->bigInteger('Type_Id')->unsigned();
            $table->bigInteger('Agent_Id')->unsigned();
            $table->integer('Number_Bedrooms');
            $table->integer('Number_Bathrooms');
            $table->integer('Number_Kitchen');
            $table->integer('Like_Count');

            $table->foreign('Location_Id')->references('id')->on('locations')->onDelete('cascade');
            $table->foreign('Type_Id')->references('id')->on('type')->onDelete('cascade');
            $table->foreign('Agent_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
