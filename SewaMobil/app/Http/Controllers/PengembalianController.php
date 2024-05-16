<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Pengembalian;
use DB;

class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = M_Pengembalian::all();
        return view('indexPengembalian')->with([
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
        return view('createPengembalian');
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
        M_Pengembalian::insert($data);
        return redirect('/indexPengembalian');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('pengembalian')
            ->join('mobil', 'pengembalian.no_plat', '=', 'mobil.no_plat')
            ->where('pengembalian.id', $id)
            ->get()->first();

            return view('showPengembalian')->with('data', $data);

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
        $item = M_Pengembalian::findOrFail($id);
        $data = $request->except(['_token']);
        $item->update($data);
        return redirect('/indexPengembalian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = M_Pengembalian::findOrFail($id);
        $item->delete();
        return redirect('/indexPengembalian');
    }
}
