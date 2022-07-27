<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TesController extends Controller
{
    public function index()
    {
        $films = DB::table('films')
                ->orderBy('nominasi', 'DESC')
                ->get();

        $nominasis = DB::table('films')
                    ->orderBy('nominasi', 'DESC')
                    ->limit('1')
                    ->get();

        $average = DB::table('films')
                ->average('pendapatan');

        $akhirN = DB::table('films')
                ->where('nm_film', 'LIKE', '%N')
                ->get();
                
        $mengandungS = DB::table('films')
                ->where('nm_film', 'LIKE', '%S%')
                ->get();

        $tidakMain = DB::table('films')
                ->join('artis', 'films.artis', '=', 'artis.kd_artis')
                // ->where('artis.kd_artis', '!=', 'films.artis')
                ->get();

        $banyakMain = DB::table('films')
                ->orderBy('nominasi', 'DESC')
                ->limit('1')
                ->get();


        $genreDrama = DB::table('films')
                ->join('artis', 'films.artis', '=', 'artis.kd_artis')
                ->where('films.genre', '=', 'G004')
                ->get();

        // dd($genreDrama);
        return view('tes.index', compact('films', 'nominasis', 'average', 'akhirN', 'mengandungS', 'genreDrama'));
    }
}
