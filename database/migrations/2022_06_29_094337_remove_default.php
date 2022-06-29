<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveDefault extends Migration
{
    public function up(): void
    {
        Schema::table('test', function (Blueprint $table) {
            $table->string("test")->default(null)->change();
        });
    }

    public function down(): void
    {
        Schema::table('test', function (Blueprint $table) {
            $table->string("test")->default("Hello World")->change();
        });
    }
}
