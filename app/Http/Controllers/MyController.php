<?php

namespace App\Http\Controllers;

use App\Actor;
use App\Film;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MyController extends Controller{
    public function welcome() {
        $billboard = [];
        foreach (DB::table("films")->orderBy('mark', 'desc')->limit(4)->get() as $film) {
            $billboard[count($billboard)] = new Film($film->id,False);
        }
        $recommended = [];
        $t100 = DB::table("films")->orderBy('mark', 'desc')->limit(100)->get();
        for ( $i=0; $i < 6; $i++) {
            $item = rand(0,99);
            if (isset($t100[$item])) {
                $film = $t100[$item];
                unset($t100[$item]);
            } else {
                $i--;
                continue;
            }
            $recommended[count($recommended)] = new Film($film->id,False);
        }
        $top5 = [];
        foreach (DB::table("films")->orderBy('mark', 'desc')->limit(5)->get() as $film) {
            $top5[count($top5)] = new Film($film->id,False);
        }
        return view("welcome",["billboard" => $billboard, "recommended" => $recommended, "top5" => $top5]);
    }
    public function film($id) {
        return view("film", ["film" => new Film($id)]);
    }
    public function actor($id) {
        return view("actor", ["actor" => new Actor($id)]);
    }
}
