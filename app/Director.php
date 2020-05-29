<?php


namespace App;


use Illuminate\Support\Facades\DB;

class Director {
    public $name, $films=[], $id;

    public function __construct($id, $full= True) {
        $resp = DB::table("directors")->find($id);

        $this->id = $id;
        $this->name = $resp->name;

        if ($full) {
            foreach (explode(", ", $resp->films) as $film_id){
                $this->films[count($this->films)] = new Film($film_id, False);
            }
        }
    }
}
