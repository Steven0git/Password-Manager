<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
     /*
      Bridge between user_id and value of password_list
     */
    public function up(): void
    {
        Schema::create('bridge', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("pas_id"); 
            $table->foreign("user_id")->references("id")->on("users");
            $table->foreign("pas_id")->references("id")->on("password_list");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bridge');
    }
};
