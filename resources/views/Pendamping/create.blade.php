@extends('layout/main')

@section('title','Tambah Pendamping')


@section('container')
	<div class="container">
		<div class="row">
			<div class="col-10">
                  <h1 class="mt-3">Tambah Pendamping</h1>
				  <a class="btn btn-info" href="/pendamping"> Kembali</a>
				
	    <form action="/pendamping" method="post">
		{{ csrf_field() }}
		<div class="form-group">
		<label for="exampleFormControlInput1">Nama</label>
    	<input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama..." required="required">
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