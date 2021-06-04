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
                    <th scope="col">Id Himpunan</th>
                    <th scope="col">Id Variabel</th>
                    <th scope="col">Nama Himpunan</th>
                    <th scope="col">Nilai a</th>
                    <th scope="col">Nilai b</th>
                    <th scope="col">Nilai c</th>
                    <th scope="col">Nilai d</th>
                    <th scope="col">Fungsi Keanggotaan</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($himpunan as $h)
                    <tr>
                            <td>{{$h->id_himpunan}}</td>
                            <td>{{$h->id_variabel}}</td>
                            <td>{{ $h->nama_himpunan }}</td>
                            <td>{{ $h->a }}</td>
                            <td>{{ $h->b }}</td>
                            <td>{{ $h->c }}</td>
                            <td>{{ $h->d }}</td>	
                            <td>{{ $h->fungsi_keanggotaan }}</td>		
                        </tr>
                        @endforeach
                </tbody>
                </table>
			</div>
		</div>
	</div>
 
@endsection