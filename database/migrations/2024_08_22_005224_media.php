<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('file_path'); // To store the file path
            $table->string('title'); // For the media title
            $table->text('desc')->nullable(); // For the description
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->integer('likes')->default(0); // To store the number of likes
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('media');
    }

};
