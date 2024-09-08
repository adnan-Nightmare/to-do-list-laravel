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
        // untuk membuat table 'todo'
        Schema::create('todo', function (Blueprint $table) {
            $table->id();
            $table->string('task');
            $table->boolean('is_done')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */

    //  untuk penghapusan
    public function down(): void
    {
        Schema::dropIfExists('todo');
    }
};
