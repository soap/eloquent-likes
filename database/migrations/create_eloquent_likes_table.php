<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('eloquent_likes_table', function (Blueprint $table) {
            $table->id();
            $table->morphs('likeable'); // be liked
            $table->morphs('liker'); // like
            $table->timestamps();
        });
    }
};
