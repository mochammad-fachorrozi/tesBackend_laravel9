<?php

namespace App\Http\Controllers;

use App\Models\Artis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artists = DB::table('artis')->get();

        // dd($artists);

        return view('artis.index', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
    		'kd_artis' => 'required',
    		'nm_artis' => 'required',
    		'jk' => 'required',
    		'bayaran' => 'required',
    		'award' => 'required',
    		'negara' => 'required',
    	]);
 
        Artis::create([
    		'kd_artis' => $request->kd_artis,
    		'nm_artis' => $request->nm_artis,
    		'jk' => $request->jk,
    		'bayaran' => $request->bayaran,
    		'award' => $request->award,
    		'negara' => $request->negara,
    	]);
 
    	return redirect('/project');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artis = DB::table('artis')
                ->where('kd_artis', '=', $id)
                ->get();

                // dd($artis);

        return view('artis.edit', compact('artis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
