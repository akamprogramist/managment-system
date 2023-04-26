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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email');
            $table->string('code');
            $table->string('secondaryemail');
            $table->string('displayname');
            $table->string('phone');
            $table->string('company');
            $table->enum('currency', ['usd', 'iqd'])->default('usd');
            $table->string('businessnumber');
            $table->enum('group', ['none', 'default'])->default('none');
            $table->string('type');
            $table->enum('owner', ['none', 'default'])->default('none');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('country');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
