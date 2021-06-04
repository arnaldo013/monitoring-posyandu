@extends('layout/main')

@section('title','Daftar Lansia')


@section('container')
	<div class="container">
		<div class="row">
			<div class="col-6">
                  <h1 class="mt-3">Daftar Lansia</h1>  
                  <a href ="/lansia/create" class="btn btn-info my-3" >Tambah Lansia</a>
                <ul class="list-group">
                @foreach($elders as $eld)
                <li class="list-group-item d-flex justify-content-between align-items-center">              
                {{$eld->nama }}
                <a href="/lansia/{{$eld->id}}" class="badge badge-info">Detail</a>
                </li>
                
                @endforeach
                  </ul>
			</div>
		</div>
	</div>
 
@endsection