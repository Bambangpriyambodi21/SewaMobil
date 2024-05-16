<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Peminjaman;
use Exception;
use DateTime;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = M_Peminjaman::all();
        return view('indexPeminjaman')->with([
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
        return view('createPeminjaman');
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
        $dataAll = M_Peminjaman::all();
        $jmlData = count($dataAll);
        $bool = true;

        for($i=0;$i<$jmlData;$i++){
            $tgl_start = new DateTime($dataAll[$i]->tgl_mulai);
            $tgl_end = new DateTime($dataAll[$i]->tgl_selesai);
            $reqTgl = new DateTime($request->tgl_mulai);
            $mobil = $dataAll[$i]->mobil;
            if($reqTgl>=$tgl_start && $reqTgl<=$tgl_end && $request->mobil == $mobil){
                $bool = false;
                break;
            }else{
                $bool = true;
            }
        }
        if($bool == true){
            M_Peminjaman::insert($data);
        }else{
            throw new Exception( "Tanggal berada di luar rentang waktu yang diperbolehkan.");
        }
        return redirect('/indexPeminjaman');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = M_Peminjaman::findOrFail($id);
        return view('showPeminjaman')->with([
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
        $item = M_Peminjaman::findOrFail($id);
        $data = $request->except(['_token']);
        $item->update($data);
        return redirect('/indexPeminjaman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = M_Peminjaman::findOrFail($id);
        $item->delete();
        return redirect('/indexPeminjaman');
    }

    public function search(Request $request)
    {
        $query = $request->input('search');

        if($request->has('search')){
                $results = M_Peminjaman::where('id_pengguna', 'LIKE', '%' . $query . '%')
                     ->get();
        }else{
            $results = M_Peminjaman::all();  
        }

        return view('indexPeminjaman')->with([
            'data' =>$results
        ]);
    }
}
