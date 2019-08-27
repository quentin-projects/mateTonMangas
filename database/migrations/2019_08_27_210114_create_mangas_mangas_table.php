<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMangasMangasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mangas_mangas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('manga_un_id');
            $table->foreign('manga_un_id')->references('id')->on('mangas');
            $table->unsignedBigInteger('manga_deux_id');
            $table->foreign('manga_deux_id')->references('id')->on('mangas');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mangas_mangas');
    }
}
