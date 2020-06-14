<?php

use App\Genre;
use Illuminate\Database\Seeder;

class genreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genre= new Genre();
        $genre->nom='Masculin';
        $genre->save();

        $genre= new Genre();
        $genre->nom='Féminin';
        $genre->save();

        $genre= new Genre();
        $genre->nom='Autre';
        $genre->save();

    }
}
