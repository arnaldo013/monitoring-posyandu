@extends('layout/main')

@section('title','Daftar Monitoring')


@section('container')
	<div class="container">
		<div class="row">
			<div class="col-6">
                <h1 class="mt-3">Daftar Monitoring</h1>  
                <a href="/lansia/{id}/monitoring" class="btn btn-info my-3" >Tambah Monitoring</a>
                <ul class="list-group">
                @foreach($monitorings as $mon)
                <li class="list-group-item d-flex justify-content-between align-items-center">              
                <p>Id Monitoring {{$mon->id }}</p>
                <p>Id Lansia {{$mon->id_lansia}}</p>
                <p>Id Kader {{$mon->id_kader }}</p>
                
                <a href="/lansia/{{$mon->id_lansia}}" class="badge badge-info">Detail</a>
                </li>
                
                @endforeach
                  </ul>
			</div>
		</div>
	</div>
 
@endsection