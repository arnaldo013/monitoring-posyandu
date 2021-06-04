@extends('layout/main')

@section('title','Daftar Himpunan')


@section('container')
	<div class="container">
		<div class="row">
			<div class="col-10">
                  <h1 class="mt-3">Daftar Himpunan</h1>
                  
                    <tr>
                    <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Id Variabel</th>
                    <th scope="col">Nama Variabel</th>
                    <th scope="col">Sifat</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($variabel as $v)
                    <tr>

                            <td>{{ $v->id_variabel}}</td>
                            <td>{{ $v->nama_variabel }}</td>
                            <td>{{ $v->sifat }}</td>
                        </tr>
                        @endforeach
                </tbody>
                </table>
			</div>
		</div>
	</div>
 
@endsection