<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class disneyStudiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('disney_studios')->insert([
['studioName' => 'Walt Disney Animation Studios', 'founded' => new Carbon('1923-10-06'), 'president' => 'Edwin Catmull', 'location'=>'Burbank, California','image_path'=>'Walt Disney Animation Studios.jpg'],
['studioName' => 'Pixar', 'founded' => new Carbon('1986-02-03'), 'president' => 'Jim Morris', 'location'=>'Emeryville, California','image_path'=>'Pixar.jpg'],
['studioName' => 'Marvel Studios', 'founded' => new Carbon('1993-12-07'), 'president' => 'Kevin Faige', 'location'=>'Avenue of the Americas, New York','image_path'=>'Marvel Studios.jpg'],
['studioName' => '20th Century Studios', 'founded' => new Carbon('1935-05-31'), 'president' => 'Steve Asbell', 'location'=>'Century City, California','image_path'=>'20th Century Studios.jpg'],
['studioName' => 'Lucasfilms', 'founded' => new Carbon('1971-12-10'), 'president' => 'Kathleen Kennedy', 'location'=>'Presidio National Park, San Francisco','image_path'=>'Lucasfilms.jpg'],
]);
    }
}
