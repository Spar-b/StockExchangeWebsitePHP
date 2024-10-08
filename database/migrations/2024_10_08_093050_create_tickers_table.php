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
        Schema::dropIfExists('tickers');
        Schema::create('tickers', function (Blueprint $table) {
            $table->id();
            $table->string('symbol');
            $table->double('open_value');
            $table->double('close_value');
            $table->double('current_value');
            $table->integer('market_cap');
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickers');
    }
};
