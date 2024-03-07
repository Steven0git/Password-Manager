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
        Schema::create('description', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("pas_id"); 
            $table->string("description", 64);
            $table->timestamps();
            $table->foreign("pas_id")->references("id")->on('password_list');
        });
        Schema::create('links', function (Blueprint $table){
           $table->id();
           $table->unsignedBigInteger("pas_id");
           $table->string("url",128)->nullable();
           $table->string("app_name",16);
           $table->foreign('pas_id')->references("id")->on("password_list");
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('description');
        Schema::dropIfExists('links');
    }
};