@extends('layout/main')

@section('title','Tambah Lansia')


@section('container')
	<div class="container">
		<div class="row">
			<div class="col-10">
                  <h1 class="mt-3">Tambah Lansia</h1>
				  <a class="btn btn-info" href="/lansia"> Kembali</a>
				
	    <form action="/lansia" method="post">
		{{ csrf_field() }}
		<div class="form-group">
		<label for="exampleFormControlInput1">Nama</label>
    	<input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama..." required="required">
 		</div>
		<div class="form-group">
		<label for="exampleFormControlInput1">Tempat Tanggal Lahir</label>
    	<input type="text" class="form-control" name="ttl" placeholder="Masukkan TTL..." id="ttl" required="required">
 		</div>
		<label class="my-1 mr-2" for="inlineFormCustomSelectPref" >Jenis Kelamin</label>
	  	<select name="jenis_kelamin" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
	    <option  name="jenis_kelamin" selected>Pilih...</option>
	    <option name="jenis_kelamin" value="1">L</option>
	    <option name="jenis_kelamin" value="2">P</option>
		</select>
		<div class="form-group">
		<label for="exampleFormControlInput1">Umur</label>
    	<input type="text" class="form-control" name="umur" id="umur" placeholder="Masukkan Umur..." required="required">
 		</div>
		<div class="form-group">
		<label for="exampleFormControlInput1">Alamat</label>
    	<input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Nama..." required="required">
 		</div>
		<div class="form-group">
		<label for="exampleFormControlInput1">No Telp</label>
    	<input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="Masukkan No Telp..." required="required">
 		</div>
		<input class="btn btn-info" type="submit" value="Simpan Data">
	</form>

@endsection