<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class disneyCharactersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('disney_characters')->insert([
['characterName'=>'Tony stark','characterType'=>'Protagonist', 'movieName'=>'Iron Man', 'characterQuote'=>'Sometimes you gotta run before you can walk.', 'studio_id'=>3],
['characterName'=>'Belle','characterType'=>'Protagonist', 'movieName'=>'Beauty and the beast', 'characterQuote'=>'I Want Adventure In The Great Wide Somewhere.', 'studio_id'=>1],
['characterName'=>'Rapunzel','characterType'=>'protagonist', 'movieName'=>'Tangled', 'characterQuote'=>'I have magic hair that glows when I sing.', 'studio_id'=>1],
['characterName'=>'Flynn Rider','characterType'=>'deuteragonist', 'movieName'=>'Tangled', 'characterQuote'=>'You were my new dream.', 'studio_id'=>1],
['characterName'=>'Ray','characterType'=>'Supporting character', 'movieName'=>'Princess and the frog', 'characterQuote'=>'A bug gotta do what a bug gotta do!', 'studio_id'=>1],
['characterName'=>'Lightning McQueen','characterType'=>'Protagonist', 'movieName'=>'Cars', 'characterQuote'=>'Ka-chow!', 'studio_id'=>2],
['characterName'=>'Darth Vader','characterType'=>'Antagonist', 'movieName'=>'Star Wars: Episode IV—A New Hope', 'characterQuote'=>'BE CAREFUL NOT TO CHOKE ON YOUR ASPIRATIONS.', 'studio_id'=>5],
['characterName'=>'Obi Wan Kenobi','characterType'=>'Supporting character', 'movieName'=>'Star Wars: Episode IV—A New Hope', 'characterQuote'=>'In my experience, there’s no such thing as luck.', 'studio_id'=>5],
['characterName'=>'Wolverine','characterType'=>'Protagonist', 'movieName'=>'X-Men', 'characterQuote'=>'I am The Best There Is At What I Do, But What I Do Best Isnt Very Nice..', 'studio_id'=>4]   
]);
    }
}
