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
        Schema::create('movies', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string("name");
            $table->longText("descriptions");
            $table->string("tags");
            $table->foreignId("category_id")->references("id")->on("categories");
            $table->string("image")->default("no_img");
            $table->enum("status",["ACTIVE","SUSPENDED","PENDING"])->default("ACTIVE");
            $table->string("cloud_link");
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
