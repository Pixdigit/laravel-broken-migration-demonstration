<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestTable extends Migration
{
    public function up(): void
    {
        Schema::create('test', function (Blueprint $table) {
            $table->id();
            $table->string("test")->default("Hello World");
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('test');
    }
}
