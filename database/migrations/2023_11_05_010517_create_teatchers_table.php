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
        Schema::create('teatchers', function (Blueprint $table) {
            $table->id();
            $table->string('teatcher_name', 50);
            $table->integer('phone_number');
            $table->string('address', 50);
            $table->double('salary');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teatchers');
    }
};
