<?php

use App\Models\Country;
use App\Models\CountryLog;
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
        Schema::create(CountryLog::getTableName(), function (Blueprint $table) {
            $table->id();
            $table->longText('logs');
            $table->foreignId('country_id')->nullable()->constrained(Country::getTableName())->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(CountryLog::getTableName());
    }
};
