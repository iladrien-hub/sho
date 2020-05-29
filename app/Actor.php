<?php


namespace App;
use Illuminate\Support\Facades\DB;

class Actor {
    public $id, $name, $films=[];

    public function __construct($id, $full= True) {
        $resp = DB::table("actors")->find($id);

        $this->id = $id;
        $this->name = $resp->name;
        $this->photo = $resp->photo;

        if ($full) {
            $films_ids = explode(", ",$resp->films);
            foreach ($films_ids as $film){
                $this->films[count($this->films)] = new Film($film,False);
            }
        }
    }
}
