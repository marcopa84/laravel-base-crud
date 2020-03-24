<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cellular;

class CellularController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cellulars = Cellular::All();
        return view('cellular.index', compact('cellulars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cellular.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        foreach ($data as $value){
            if (empty($value)){
                return back();
            }
        }

        $cellular = new Cellular;
        $cellular->marca = $data['marca'];
        $cellular->modello = $data['modello'];
        $cellular->peso = $data['peso'];
        $cellular->prezzo = $data['prezzo'];
        $cellular->imgurl = $data['imgurl'];
        $saved = $cellular->save();

        if ($saved) {
            /* return index(); */
            return redirect()->route("cellulars.index");
        } else {
            return back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cellular $cellular)
    {
      if(empty($cellular)) {
        abort('404');
      }
      return view('cellular.show', compact('cellular') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cellular $cellular)
    {
      if(empty($cellular)) {
        abort('404');
      }
      return view('cellular.edit', compact('cellular') );
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
      @dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cellular $cellular)
    {
      if(empty($cellular)) {
        abort('404');
      }
      $id = $cellular->id;
        $deleted = $cellular->delete();
        $data = [
          'id' => $id,
          'cellulars' => Cellular::all()
        ];

      return view ("cellular.index", $data);
    }
}
