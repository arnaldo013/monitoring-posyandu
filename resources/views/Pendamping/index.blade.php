@extends('layout/main')

@section('title','Daftar Pendamping')


@section('container')
	<div class="container">
		<div class="row">
			<div class="col-10">
                  <h1 class="mt-3">Daftar Pendamping</h1>
                  
                  <a href ="/pendamping/create" class="btn btn-info my-3" >Tambah</a>
                    <tr>
                    <table class="table">
                        <thead class="thead-dark">
                        <th scope="col">No</th>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No Telp</th>
                        <th scope="col">Opsi</th>

                    </tr>
                    </thead>     
                    <tbody>
                        @foreach($companions as $com)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$com->id}}</td>
                            <td>{{$com->nama}}</td>
                            <td>{{$com->alamat}}</td>
                            <td>{{$com->no_telp}}</td>
                            <td>
                                <a href="" class="badge badge-success">Edit</a>
                                <a href="/pendamping/hapus/{{$com->id}}" class="badge badge-danger">Delete</a>
                            </td>
                            
                        </tr>
                        @endforeach  
                    </tbody> 
                    </table>
			</div>
		</div>
	</div>
 
@endsection