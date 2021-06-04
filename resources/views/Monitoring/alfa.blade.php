@extends('layout/main')

@section('title','Alfa')


@section('container')
	<div class="container">
		<div class="row">
			<div class="col-12">
                  <h1 class="mt-3">Alfa</h1>
                  
                  <a href ="/alfa/create" class="btn btn-primary my-3" >Tambah</a>
                    <tr>
                    <table class="table">
                        <thead class="thead-dark">
                        <th scope="col">Id</th>
                        <th scope="col">Muda</th>
                        <th scope="col">Paruhbaya</th>
                        <th scope="col">Tua</th>
                        <th scope="col">Lansia</th>
                        <th scope="col">IMT Kurus</th>
                        <th scope="col">IMT Normal</th>
                        <th scope="col">IMT Gemuk</th>
                        <th scope="col">IMT Obesitas</th>
                        <th scope="col">Darah Rendah</th>
                        <th scope="col">Darah Normal</th>
                        <th scope="col">Darah Tinggi</th>
                        <th scope="col">Jarang Olahraga</th>
                        <th scope="col">Sering Olahraga</th>
                       

                    </tr>
                    </thead>     
                    <tbody>
                       @foreach ( $alfa as $a)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$a->muda}}</td>
                            <td>{{$a->paruhbaya}}</td>
                            <td>{{$a->tua}}</td>
                            <td>{{$a->lansia}}</td>
                            <td>{{$a->imtkurus}}</td>
                            <td>{{$a->imtnormal}}</td>
                            <td>{{$a->imtgemuk}}</td>
                            <td>{{$a->imtobesitas}}</td>
                            <td>{{$a->darahrendah}}</td>
                            <td>{{$a->darahnormal}}</td>
                            <td>{{$a->darahtinggi}}</td>
                            <td>{{$a->jarang}}</td>
                            <td>{{$a->sering}}</td>
                            
                            
                        </tr>
                        @endforeach   
                    </tbody> 
                    </table>
                    @foreach ( $alfa as $a)
                    <div class="col-8">
                    <li class="list-group-item">ID : {{$a->id}}</li>
                    <li class="list-group-item">
                        <?php
                        switch ([$a->darahtinggi,$a->tua]) {
                            case '':
                                echo "R01 IF Tekanan Darah Tinggi AND Usia Tua THEN Resiko Sakit Tinggi :  ". r1($a->darahtinggi,$a->tua). "%";
                                break;
                            
                            default:
                                echo "R01 IF Tekanan Darah Tinggi AND Usia Tua THEN Resiko Sakit Tinggi : ". r1($a->darahtinggi,$a->tua). "%";
                                break;
                        }
                        ?>
                    </li> 
                    <li class="list-group-item">
                        <?php
                        switch ([$a->darahrendah,$a->tua]) {
                            case '':
                                echo "R02 IF Tekanan Darah Rendah AND Usia Tua THEN Resiko Sakit Tinggi : ". r2($a->darahrendah,$a->tua). "%";
                                break;
                            
                            default:
                            echo "R02 IF Tekanan Darah Rendah AND Usia Tua THEN Resiko Sakit Tinggi :  ". r2($a->darahrendah,$a->tua). "%";
                                break;
                        }
                        ?>
                    </li> 
                    <li class="list-group-item">
                        <?php
                        switch ([$a->paruhbaya,$a->gemuk]) {
                            case '':
                                echo "R03 IF Usia Paruhbaya AND Status Gizi Gemuk THEN Resiko Sakit Tinggi : ". r3($a->paruhbaya,$a->gemuk). "%";
                                break;
                            
                            default:
                            echo "R03 IF Usia Paruhbaya AND Status Gizi Gemuk THEN Resiko Sakit Tinggi : ". r3($a->paruhbaya,$a->gemuk). "%";
                                break;
                        }
                        ?>
                    </li> 
                    <li class="list-group-item">
                        <?php
                        switch ([$a->tua,$a->olahraga,$a->darahnormal]) {
                            case '':
                                echo "R04 IF Usia tua AND Sering Olahraga AND Tekanan Darah Normal THEN Resiko Sakit Rendah : ". r4($a->tua,$a->olahraga,$a->darahnormal). "%";
                                break;
                            
                            default:
                            echo "R04 IF Usia tua AND Sering Olahraga AND Tekanan Darah Normal THEN Resiko Sakit Rendah : ". r4($a->tua,$a->olahraga,$a->darahnormal). "%";
                                break;
                        }
                        ?>
                    </li> 
                    <li class="list-group-item">
                        <?php
                        switch ([$a->lansia,$a->imtnormal,$a->darahnormal]) {
                            case '':
                                echo "R05 IF Usia Lansia AND IMT Normal AND Tekanan Darah Normal THEN Resiko Sakit Rendah : ". r5($a->lansia,$a->imtnormal,$a->darahnormal). "%";
                                break;
                            
                            default:
                            echo "R05 IF Usia Lansia AND IMT Normal AND Tekanan Darah Normal THEN Resiko Sakit Rendah : ". r5($a->lansia,$a->imtnormal,$a->darahnormal). "%";
                                break;
                        }
                        ?>
                    </li> 
                    <li class="list-group-item">
                        <?php
                        switch ([$a->tua]) {
                            case ($a->tua > 0.5):
                                echo "Resiko Sakit : 10 %" ;
                                break;
                            case ($a->lansia > 0.5):
                                echo "Resiko Sakit Tinggi" ;
                                break;
                            default:
                            echo "Resiko Sakit Rendah " ;
                                break;
                        }
                        ?>
                    </li> 
                </div>
                <br>
                @endforeach
                <?php
                    
                    function r1($darahtinggi,$tua){
                        if ($darahtinggi < $tua) {
                            return $darahtinggi*100;
                        }elseif ($tua < $darahtinggi) {
                            return $tua*100;
                    }
                }
                    ?>
                    <?php
                    
                    function r2($darahrendah,$tua){
                        if ($darahrendah < $tua) {
                            return $darahrendah*100;
                        }elseif ($tua < $darahrendah) {
                            return $tua*100;
                    }
                }
                    ?>
                    <?php
                    
                    function r3($paruhbaya,$gemuk){
                        if ($paruhbaya < $gemuk) {
                            return $paruhbaya*100;
                        }elseif ($gemuk < $paruhbaya) {
                            return $gemuk*100;
                    }
                }
                    ?>
                    <?php
                    
                    function r4($tua,$normal,$darahrendah){
                        if ($tua < $normal || $tua < $darahrendah) {
                            return $tua*100;
                        }elseif ($normal < $tua || $normal < $darahrendah) {
                            return $normal*100;
                        }elseif ($darahrendah < $tua || $darahrendah < $normal) {
                            return $darahrendah*100;
                        }
                }
                    ?>
                    <?php
                    
                    function r5($lansia,$imtnormal,$darahnormal){
                        if ($lansia < $imtnormal || $lansia < $darahnormal) {
                            return $lansia*100;
                        }elseif ($imtnormal < $lansia || $imtnormal < $darahnormal) {
                            return $imtnormal*100;
                        }elseif ($darahnormal < $lansia || $darahnormal < $imtnormal) {
                            return $darahnormal*100;
                        }
                }
                    ?>
			</div>
		</div>
	</div>
 
@endsection