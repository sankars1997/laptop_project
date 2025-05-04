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
        Schema::create('submitteds', function (Blueprint $table) {
            $table->unsignedBigInteger('Serial_no');
            $table->primary('Serial_no');
    $table->text('specifications');
    $table->date('returned_date');
    $table->boolean('active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submitteds');
    }
};
