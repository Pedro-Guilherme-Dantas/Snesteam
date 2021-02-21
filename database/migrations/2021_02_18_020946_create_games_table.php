<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD:database/migrations/2021_02_17_121614_create_games_table.php
<<<<<<< HEAD
            $table->string('title');
=======
            $table->string('title',50);
>>>>>>> main:database/migrations/2021_02_18_020946_create_games_table.php
            $table->text('description');
            $table->string('cover');
            $table->string('img1');
            $table->string('img2');
            $table->string('img3');
            $table->string('img4');
            $table->string('file');
<<<<<<< HEAD:database/migrations/2021_02_17_121614_create_games_table.php
            $table->timestamps();
=======
            $table->string('title',50);
            $table->text('description');
            $table->string('cover');
            $table->string('img1');
            $table->string('img2');
            $table->string('img3');
            $table->string('img4');
            $table->string('file');
>>>>>>> development
=======
>>>>>>> main:database/migrations/2021_02_18_020946_create_games_table.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
