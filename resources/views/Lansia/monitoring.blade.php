@extends('layout/main')

@section('title','Tambah Lansia')


@section('container')
	<div class="container">
		<div class="row">
			<div class="col-10">
                  <h1 class="mt-3">Lakukan Monitoring</h1>
				  <a class="btn btn-info" href="/lansia"> Kembali</a>
				
	    <form action="/monitoring" method="post">
		{{ csrf_field() }}
		<div class="form-group">
		<label for="exampleFormControlInput1">Id Lansia</label>
    	<input type="text" class="form-control" name="id_lansia"  id="id_lansia"  placeholder="Masukkan Id Lansia..." required="required">
 		</div>
		 <div class="form-group">
		<label for="exampleFormControlInput1">Id Kader</label>
    	<input type="text" class="form-control" name="id_kader"  id="id_kader" placeholder="Masukkan Id Kader..." required="required">
 		</div>
		 <div class="form-group">
		<label for="exampleFormControlInput1">Id Pendamping</label>
    	<input type="text" class="form-control" name="id_pendamping"  id="id_pendamping" placeholder="Masukkan Id Pendamping..." required="required">
 		</div>
		<div class="form-group">
		<label for="exampleFormControlInput1">Tinggi Badan</label>
    	<input type="text" class="form-control" name="tinggi_badan"  id="tinggi_badan" placeholder="Masukkan Tinggi Badan..." required="required">
 		</div>
		<div class="form-group">
		<label for="exampleFormControlInput1">Berat Badan</label>
    	<input type="text" class="form-control" name="berat_badan" placeholder="Masukkan Berat Badan..." id="berat_badan" required="required">
		 </div>
		 <div class="form-group">
		<label for="exampleFormControlInput1">Umur</label>
    	<input type="text" class="form-control" name="umur" placeholder="Masukkan Umur..." id="umur" required="required">
		 </div>
		 <div class="form-group">
		<label for="exampleFormControlInput1">Tekanan Darah</label>
    	<input type="text" class="form-control" name="tekanan_darah" placeholder="Masukkan Tekanan Darah..." id="tekanan_darah" required="required">
		 </div>
		 <div class="form-group">
		<label for="exampleFormControlInput1">/</label>
    	<input type="text" class="form-control" name="tekanan_darah1" placeholder="Masukkan Tekanan Darah..." id="tekanan_darah1" required="required">
 		</div>
		<div class="form-group">
		<label for="exampleFormControlInput1">Aktivitas Olahraga</label>
    	<input type="text" class="form-control" name="olahraga" id="olahraga" placeholder="Masukkan Aktivitas..." required="required">
		 </div>
		 <div class="form-group">
		<label for="exampleFormControlInput1">Keluhan</label>
    	<input type="text" class="form-control" name="keluhan" placeholder="Masukkan Keluhan..." id="keluhan" required="required">
 		</div>
		<input class="btn btn-info" type="submit" value="Simpan Data">
	</form>

@endsection