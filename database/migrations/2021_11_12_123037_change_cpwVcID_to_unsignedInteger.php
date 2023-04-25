<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangecpwVcIDtounsignedInteger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::table('pseudowires', function (Blueprint $table) {
            $table->unsignedInteger('cpwVcID')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('pseudowires', function (Blueprint $table) {
            $table->integer('cpwVcID')->change();
        });
    }
}
