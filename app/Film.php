<?php


namespace App;

use Illuminate\Support\Facades\DB;

class Film {
    public $id, $name, $original, $year, $country, $genre, $about, $actors, $see_also, $mark, $director;

    function __construct($id, $full= True) {
        $resp = DB::table("films")->find($id);

        $this->id = $id;
        $this->name = preg_replace("/(.*?)\(.*?\)\s?(.*?)/is","",$resp->name);
        $this->origin = $resp->origin;
        $this->poster = $resp->poster;
        $this->bigposter = $resp->bigposter;
        $this->year = $resp->year;
        $this->mark = $resp->mark;
        $this->country = str_replace("_"," ", $resp->country);
        $this->genre = explode(", ",$resp->genre);
        $this->about = str_replace("_"," ", $resp->about);

        if ($full) {
            $this->director = new Director($resp->director, False);

            $actors_ids = explode(", ", $resp->actors);
            for ($i = 0; $i < count($actors_ids); $i++) {
                $this->actors[$i] = new Actor($actors_ids[$i], False);
            }

            $see = DB::table("films")->inRandomOrder()->limit(6)->get();
            for ($i = 0; $i < count($see); $i++) {
                $this->see_also[$i]["id"] = $see[$i]->id;
                $this->see_also[$i]["name"] = $see[$i]->name;
                $this->see_also[$i]["poster"] = $see[$i]->poster;
                $this->see_also[$i]["mark"] = $see[$i]->mark;
            }
        }
    }
}
