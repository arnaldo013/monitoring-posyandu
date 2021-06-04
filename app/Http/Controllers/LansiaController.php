<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Elder;
use App\Monitoring;
use App\Fuzzy;
use App\Alfa;
use App\Himpunan;
use App\Variabel;


class LansiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lansia = Elder::all();
        return view('lansia.index',['elders'=> $lansia ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lansia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Elder::create($request->all());
        return redirect('/lansia');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lansia = Elder::find($id);
        $monitoring = DB::table('Monitorings')->where('id_lansia', $id)->get();
        return view('lansia.show',['lansia' => $lansia], ['monitoring' => $monitoring]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lansia = Elder::find($id);
        return view ('lansia.edit',['lansia'=>$lansia]);
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

        $lansia = Elder::find($id);
        $lansia->nama = $request->nama;
        $lansia->ttl = $request->ttl;
        $lansia->jenis_kelamin = $request->jenis_kelamin;
        $lansia->umur = $request->umur;
        $lansia->alamat = $request->alamat;
        $lansia->no_telp = $request->no_telp;
        $lansia->save();
        return redirect('/lansia');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lansia = Elder::find($id);
        $lansia->delete();
        return redirect('/lansia')->with('status','Data Lansia Berhasil Dihapus');
    }

    public function monitoring(){
        return view('/lansia.monitoring');

    }
    public function storee(Request $request)
    {

        DB::table('monitorings')->insert([
            'id_lansia' => $request->id_lansia,
            'id_kader' => $request->id_kader,
            'id_pendamping' => $request->id_pendamping,
            'tinggi_badan' => $request->tinggi_badan,
            'berat_badan' => $request->berat_badan,
            'umur' => $request->umur,
            'tekanan_darah' => $request->tekanan_darah,
            'tekanan_darah1' => $request->tekanan_darah1,
            'olahraga' => $request->olahraga,
            'keluhan' => $request->keluhan
        ]);
        return redirect('/monitoring');
    }

    public function fuzzy(){
        $fis = Fuzzy::all();
        return view('monitoring.fuzzy',['fis' => $fis]);
    }
    public function buatfuzzy(){
        return view('monitoring.buatfuzzy');
    }
    public function storefuzzy(Request $request){
        Fuzzy::create($request->all());
        return redirect('/fuzzy');       
    }
    public function alfa(){
        $alfa = Alfa::all();
        return view('monitoring.alfa',['alfa' => $alfa]);
    }
    public function buatalfa(){
        return view('monitoring.buatalfa');
    }
    public function storealfa(Request $request){
        Alfa::create($request->all());
        return redirect('/alfa');       
    }
    public function himpunan(){
        $himpunan = Himpunan::all();
        return view('monitoring.himpunan',['himpunan' => $himpunan]);
    }
    public function variabel(){
        $variabel = Variabel::all();
        return view('monitoring.variabel',['variabel' => $variabel]);
    }
}
