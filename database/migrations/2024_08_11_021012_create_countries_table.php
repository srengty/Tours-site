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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();//id bigint auto_increment primary
            $table->integer('country_code')->comment('e.g. 855');
            $table->string('country',30);
            $table->string('currency',20)->comment('e.g. KHR');
            $table->foreignId('city_id');
            $table->foreign('city_id')->references('id')->on('cities');
            //$table->timestamps();//create_at timestamp, updated_at timestamp
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
