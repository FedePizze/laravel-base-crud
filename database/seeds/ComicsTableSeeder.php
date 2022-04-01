<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $comics = config('comics');

        foreach($comics as $comic) {

            $element = new Comic();

            $element->title = $comic['title'];
            $element->description = $comic['description'];
            $element->thumb = $comic['thumb'];
            $element->price = $comic['price'];
            $element->series = $comic['series'];
            $element->sale_date = date('Y-m-d', strtotime($comic['sale_date']));
            $element->type = $comic['type'];

            $element->save();

        }

    }
}
