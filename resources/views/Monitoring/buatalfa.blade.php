@extends('layout/main')

@section('title','Tambah Alfa')


@section('container')
	<div class="container">
		<div class="row">
			<div class="col-10">
                  <h1 class="mt-3">Tambah Alfa</h1>
				  <a class="btn btn-info" href="/alfa"> Kembali</a>
				
	    <form action="/alfa" method="post">
		{{ csrf_field() }}
		<div class="form-group">
		<label for="exampleFormControlInput1">Muda</label>
    	<input type="text" class="form-control" name="muda" id="muda" placeholder="Masukkan nilai muda..." required="required">
         </div>
         <div class="form-group">
		<label for="exampleFormControlInput1">Paruhbaya</label>
    	<input type="text" class="form-control" name="paruhbaya" id="paruhbaya" placeholder="Masukkan nilai paruhbaya..." required="required">
         </div>
         <div class="form-group">
		<label for="exampleFormControlInput1">Tua</label>
    	<input type="text" class="form-control" name="tua" id="tua" placeholder="Masukkan nilai tua..." required="required">
         </div>
         <div class="form-group">
		<label for="exampleFormControlInput1">Lansia</label>
    	<input type="text" class="form-control" name="lansia" id="lansia" placeholder="Masukkan nilai lansia..." required="required">
         </div>
         <div class="form-group">
		<label for="exampleFormControlInput1">IMT Kurus</label>
    	<input type="text" class="form-control" name="imtkurus" id="imtkurus" placeholder="Masukkan nilai IMT kurus..." required="required">
         </div>
         <div class="form-group">
		<label for="exampleFormControlInput1">IMT Normal</label>
    	<input type="text" class="form-control" name="imtnormal" id="imtnormal" placeholder="Masukkan nilai imtnormal..." required="required">
         </div>
         <div class="form-group">
		<label for="exampleFormControlInput1">IMT Gemuk</label>
    	<input type="text" class="form-control" name="imtgemuk" id="imtgemuk" placeholder="Masukkan nilai imtgemuk..." required="required">
         </div>
         <div class="form-group">
		<label for="exampleFormControlInput1">IMT Obesitas</label>
    	<input type="text" class="form-control" name="imtobesitas" id="imtobesitas" placeholder="Masukkan nilai imtobesitas..." required="required">
 		</div>
		<div class="form-group">
		<label for="exampleFormControlInput1">Tekanan Darah Rendah</label>
    	<input type="text" class="form-control" name="darahrendah" id="darahrendah" placeholder="Masukkan nilai darahrendah..." required="required">
 		</div>
		<div class="form-group">
		<label for="exampleFormControlInput1">Tekanan Darah Normal</label>
    	<input type="text" class="form-control" name="darahnormal" id="darahnormal" placeholder="Masukkan nilai darahnormal..." required="required">
         </div>
         <div class="form-group">
		<label for="exampleFormControlInput1">Tekanan Darah Tinggi</label>
    	<input type="text" class="form-control" name="darahtinggi" id="darahtinggi" placeholder="Masukkan nilai darahtinggi..." required="required">
         </div>
         <div class="form-group">
		<label for="exampleFormControlInput1">Aktivitas Olahraga Jarang</label>
    	<input type="text" class="form-control" name="jarang" id="jarang" placeholder="Masukkan nilai olahraga jarang..." required="required">
         </div>
         <div class="form-group">
		<label for="exampleFormControlInput1">Aktivitas Olahraga Sering</label>
    	<input type="text" class="form-control" name="sering" id="sering" placeholder="Masukkan nilai olahraga sering..." required="required">
 		</div>
		<input class="btn btn-info" type="submit" value="Simpan Data">
	</form>

@endsection