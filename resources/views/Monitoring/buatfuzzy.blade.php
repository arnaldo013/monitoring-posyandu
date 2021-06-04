@extends('layout/main')

@section('title','Tambah Pendamping')


@section('container')
	<div class="container">
		<div class="row">
			<div class="col-10">
                  <h1 class="mt-3">Tambah Pendamping</h1>
				  <a class="btn btn-info" href="/fuzzy"> Kembali</a>
				
	    <form action="/fuzzy" method="post">
		{{ csrf_field() }}
		<div class="form-group">
		<label for="exampleFormControlInput1">Umur</label>
    	<input type="text" class="form-control" name="umur" id="umur" placeholder="Masukkan Umur..." required="required">
 		</div>
		<div class="form-group">
		<label for="exampleFormControlInput1">IMT</label>
    	<input type="text" class="form-control" name="imt" id="imt" placeholder="Masukkan IMT..." required="required">
 		</div>
		<div class="form-group">
		<label for="exampleFormControlInput1">Olahraga</label>
    	<input type="text" class="form-control" name="olahraga" id="olahraga" placeholder="Masukkan Olahraga..." required="required">
         </div>
         <div class="form-group">
		<label for="exampleFormControlInput1">Tekanan Darah</label>
    	<input type="text" class="form-control" name="tekanan_darah" id="tekanan_darah" placeholder="Masukkan Tekanan Darah..." required="required">
 		</div>
		<input class="btn btn-info" type="submit" value="Simpan Data">
	</form>

@endsection