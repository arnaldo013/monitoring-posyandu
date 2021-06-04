@extends('layout/main')

@section('title','Daftar Kader')


@section('container')
	<div class="container">
		<div class="row">
			<div class="col-10">
                  <h1 class="mt-3">Daftar Kader</h1>
                  
                  <a href ="/kader/create" class="btn btn-info my-3" >Tambah</a>
                    <tr>
                    <table class="table">
                        <thead class="thead-dark">
                        <th scope="col">No</th>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tempat Tanggal Lahir</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Umur</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No Telp</th>
                        <th scope="col">Opsi</th>

                    </tr>
                    </thead>     
                    <tbody>
                       @foreach ( $cadres as $cadre)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$cadre->id}}</td>
                            <td>{{$cadre->nama}}</td>
                            <td>{{$cadre->ttl}}</td>
                            <td>{{$cadre->jenis_kelamin}}</td>
                            <td>{{$cadre->umur}}</td>
                            <td>{{$cadre->alamat}}</td>
                            <td>{{$cadre->no_telp}}</td>
                            <td>
                                <a href="/kader/edit/{{$cadre->id}}" class="badge badge-success">Edit</a>
                                <a href="/kader/hapus/{{$cadre->id}}" class="badge badge-danger">Delete</a>
                            </td>
                            
                        </tr>
                        @endforeach  
                    </tbody> 
                    </table>
			</div>
		</div>
	</div>
 
@endsection