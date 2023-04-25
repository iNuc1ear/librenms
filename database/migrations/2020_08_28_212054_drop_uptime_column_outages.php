<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropUptimeColumnOutages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::table('device_outages', function (Blueprint $table) {
            $table->dropColumn([
                'uptime',
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('device_outages', function (Blueprint $table) {
            $table->bigInteger('uptime')->nullable();
        });
    }
}
