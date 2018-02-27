<?php

use Illuminate\Database\Seeder;

class StarArtistSexesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seed();
    }

    public function seed()
    {
        $data = array('전체', '남성', '여성', '혼성');
        $this->insertColumns($data);
    }

    public function insertColumns(Array $data)
    {
        foreach ($data as $value) {
            $song_genre = new \App\Models\Star\Star_Artist_Sex();
            $song_genre->fill([
                'sex' => $value,
            ]);
            $song_genre->save();
        }
    }
}