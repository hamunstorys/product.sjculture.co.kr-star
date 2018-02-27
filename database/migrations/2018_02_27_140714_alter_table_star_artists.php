<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableStarArtists extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('star_artists', function (Blueprint $table) {
            $table->boolean('group_type_single')->nullable();
            $table->integer('group_type_song_genre')->unsigned()->nullable();

            $table->foreign('group_type_song_genre')->references('id')->on('star_artist_item_song_genres')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('star_artists', function ($table) {
            $table->dropColumn('group_type_single');
            $table->dropForeign('star_artist_group_type_song_genre_foreign');
            $table->dropColumn('group_type_song_genre');
        });
    }
}
