@extends('layout/main')

@section('title','Daftar Lansia')


@section('container')
	<div class="container">
		<div class="row">
			<div class="col-12">
                  <h1 class="mt-3">Detail Lansia</h1>
                  <a href="/lansia" class="btn btn-info">Kembali</a>
                  
                   <table class="table">
                        <thead class="thead-dark">
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
                        <tr>
                            <td>{{$lansia->id}}</td>
                            <td>{{$lansia->nama}}</td>
                            <td>{{$lansia->ttl}}</td>
                            <td>{{$lansia->jenis_kelamin}}</td>
                            <td>{{$lansia->umur}}</td>
                            <td>{{$lansia->alamat}}</td>
                            <td>{{$lansia->no_telp}}</td>
                            <td>
                                <a href="/lansia/{id}/monitoring" class="badge badge-info">Monitoring</a>
                                <a href="/lansia/edit/{{$lansia->id}}" class="badge badge-success">Edit</a>
                                <a href="/lansia/hapus/{{$lansia->id}}" class="badge badge-danger">Delete</a>
                            </td>
                            
                        </tr>

                    </tbody> 
                    </table>  
                    @foreach($monitoring as $mon) 
                    <h5 class="mt-3">Detail Monitoring</h5>
                    <div class="col-6">
                     
                    <ul class="list-group">
                    
                    <li class="list-group-item">Id Monitoring : {{$mon->id}}</li>
                    <li class="list-group-item">Waktu Monitoring : {{$mon->created_at}}</li>
                    <li class="list-group-item">Id Lansia : {{$mon->id_lansia}}</li>
                    <li class="list-group-item">Id Kader : {{$mon->id_kader}}</li>
                    <li class="list-group-item">Id Pendamping : {{$mon->id_pendamping}}</li>
                    <li class="list-group-item">Tinggi Badan : {{$mon->tinggi_badan}}</li>
                    <li class="list-group-item">Umur : {{$lansia->umur}}</li>
                    <li class="list-group-item">Berat Badan : {{$mon->berat_badan}}</li>
                    <li class="list-group-item">Tekanan Darah : {{$mon->tekanan_darah}} / {{$mon->tekanan_darah1}}</li>
                    <li class="list-group-item">Aktivitas Olahraga : {{$mon->olahraga}}</li>
                    <li class="list-group-item">Keluhan : {{$mon->keluhan}}</li>
                    <li class="list-group-item">IMT : {{(($mon->berat_badan))/(($mon->tinggi_badan/100)*($mon->tinggi_badan/100))}}</li>
                    
                    <li class="list-group-item">Resiko Sakit : 
                    <?php
                    switch ([$mon->olahraga,$mon->tekanan_darah,$mon->tekanan_darah1,$mon->keluhan]) {
                        case [$mon->olahraga == "Sering",$mon->tekanan_darah == "120" ,$mon->tekanan_darah1 == "80" ,$mon->keluhan == "Tidak Ada"] :
                            echo "Resiko Sakit Rendah";
                            break;
                        case [$mon->olahraga == "Sering",$mon->tekanan_darah <= "90" ,$mon->tekanan_darah1 <= "60" ,$mon->keluhan == "Tidak Ada"] :
                            echo "Resiko Sakit Tinggi";
                            break;
                        case [$mon->olahraga == "Jarang",$mon->tekanan_darah <= "90" ,$mon->tekanan_darah1 <= "60" ,$mon->keluhan == "Tidak Ada"] :
                            echo "Resiko Sakit Tinggi";
                            break;
                        case [$mon->olahraga == "Jarang",$mon->tekanan_darah <= "90" ,$mon->tekanan_darah1 <= "60" ,$mon->keluhan == "Pusing"] :
                            echo "Resiko Sakit Tinggi";
                            break;
                        case [$mon->olahraga == "Jarang",$mon->tekanan_darah == "120",$mon->tekanan_darah1 == "80" ,$mon->keluhan == "Pusing"] :
                            echo "Resiko Sakit Tinggi";
                            break;
                        case [$mon->olahraga == "Jarang",$mon->tekanan_darah == "120",$mon->tekanan_darah1 == "80" ,$mon->keluhan == "Demam"] :
                            echo "Resiko Sakit Tinggi";
                            break;
                        case [$mon->olahraga == "Jarang",$mon->tekanan_darah == "120",$mon->tekanan_darah1 == "80" ,$mon->keluhan == "Batuk"] :
                            echo "Resiko Sakit Tinggi";
                            break;
                        case [$mon->olahraga == "Jarang",$mon->tekanan_darah == "120",$mon->tekanan_darah1 == "80" ,$mon->keluhan == "Nyeri"] :
                            echo "Resiko Sakit Tinggi";
                            break;
                        case [$mon->olahraga == "Jarang",$mon->tekanan_darah <= "120" ,$mon->tekanan_darah1 <= "80" ,$mon->keluhan == "Tidak Ada"] :
                            echo "Resiko Sakit Rendah";
                            break;
                        case [$mon->olahraga == "Jarang",$mon->tekanan_darah >= "120",$mon->tekanan_darah1 >= "80" ,$mon->keluhan = "Tidak Ada"] :
                            echo "Resiko Sakit Tinggi";
                            break;
                        case [$mon->olahraga == "Jarang",$mon->tekanan_darah >= "120",$mon->tekanan_darah1 >= "80" ,$mon->keluhan = "Pusing, Nyeri"] :
                            echo "Resiko Sakit Tinggi";
                            break;
                        case [$mon->olahraga == "Jarang",$mon->tekanan_darah <= "120" ,$mon->tekanan_darah1 <= "80" ,$mon->keluhan == "Pusing"] :
                            echo "Resiko Sakit Tinggi";
                            break;
                        default:
                            echo "Resiko Sakit";
                            break;
                        }
                    ?>
                    
                    </li>
                   
                    </ul>                  
                    </div>
                   
                    @endforeach
                    
 			</div>
		</div>
	</div>
 
@endsection

