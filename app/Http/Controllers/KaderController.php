<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Cadre;

class KaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kader = Cadre::all();
        return view('kader.index',['cadres' => $kader]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kader.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        Cadre::create($request->all());
        return redirect('/kader')->with('status','Data Kader Berhasil di Tambahkan');
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
        $kader = Cadre::find($id);
        return view ('kader.edit',['kader'=>$kader]);
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
        $this->validate($request,[
            'nama' => 'required',
            'ttl' => 'required',
            'jenis_kelamin' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required'
        ]);

        $kader = Cadre::find($id);
        $kader->nama = $request->nama;
        $kader->ttl = $request->ttl;
        $kader->jenis_kelamin = $request->jenis_kelamin;
        $kader->umur = $request->umur;
        $kader->alamat = $request->alamat;
        $kader->no_telp = $request->no_telp;
        $kader->save();
        return redirect('/kader');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kader = Cadre::find($id);
        $kader->delete();
        return redirect('/kader')->with('status','Data Kader Berhasil Dihapus');
    }
}
