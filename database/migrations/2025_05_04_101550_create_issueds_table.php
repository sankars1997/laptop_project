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
        Schema::create('issueds', function (Blueprint $table) {
            $table->unsignedBigInteger('Serial_no'); // Just an unsigned big integer, no auto-increment
    $table->primary('Serial_no');
    $table->text('specifications');
    $table->date('issued_date');
   // $table->boolean('active')->default(0);
    $table->string('college_name',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('issueds');
    }
};
