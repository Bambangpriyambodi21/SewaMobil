<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Mobil;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = M_Mobil::all();
        return view('indexMobil')->with([
            'data' =>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createMobil');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(['_token']);
        M_Mobil::insert($data);
        return redirect('/indexMobil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = M_Mobil::findOrFail($id);
        return view('showMobil')->with([
            'data' =>$data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $item = M_Mobil::findOrFail($id);
        $data = $request->except(['_token']);
        $item->update($data);
        return redirect('/indexMobil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = M_Mobil::findOrFail($id);
        $item->delete();
        return redirect('/indexMobil');
    }

    public function search(Request $request)
    {
        $query = $request->input('search');
        $splitString = explode(" ", $request);
        $count = count($splitString);

        if($request->has('search')){
            if($count>=1){
                $results = M_Mobil::where('no_plat', 'LIKE', '%' . $query . '%')
                     ->get();
            }elseif(stripos($request, "tersedia")!==false){
                $results = M_Mobil::where('ketersediaan', 'LIKE', '%' . $query . '%')
                     ->get();
            }else{
                $results = M_Mobil::where('model', 'LIKE', '%' . $query . '%')
                    ->get();
            }
        }else{
            $results = M_Mobil::all();  
        }

        return view('indexMobil')->with([
            'data' =>$results
        ]);
    }
}
