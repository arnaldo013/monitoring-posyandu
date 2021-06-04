@extends('layout/main')

@section('title','Fuzzy')


@section('container')
	<div class="container">
		<div class="row">
			<div class="col-6">
            <a href ="/fuzzy/create" class="btn btn-info my-3" >Tambah</a>
            <a href ="/alfa" class="btn btn-info my-3" >Alfa</a>
                @foreach($fis as $f)
                  <h5 class="mt-3">Fuzzy</h5> 
                  
                  <li class="list-group-item">Umur : {{$f->umur}}</li>            
                    <li class="list-group-item">
                    <?php
                        switch ([$f->umur]) {
                            case [$f->umur <= 30]:
                                echo "Fis : ".umurMuda($f->umur). " : Muda " ;                         
                                break;
                            case [$f->umur >= 35 === $f->umur <=60]:
                                echo "Fis : ".umurMuda($f->umur). " : Muda <br> ";
                                echo "Fis : ".umurParuhbaya($f->umur). " : Paruhbaya";
                                break;
                            case [$f->umur >= 60 === $f->umur <=70]:
                                echo "Fis : ".umurParuhbaya($f->umur). " : Paruhbaya <br> ";
                                echo "Fis : ".umurTua($f->umur). " : Tua ";
                                
                                break;
                            case [$f->umur >= 70]:
                                echo "Fis : ".umurTua($f->umur). " : Tua <br>";
                                echo "Fis : ".umurLansia($f->umur). " : Lansia";
                                break;
                            default:                            
                                break;
                        }                
                    ?>
                    </li>
                    <li class="list-group-item">IMT : {{$f->imt}}</li>            
                    <li class="list-group-item">
                    <?php
                        switch ([$f->imt]) {
                            case [$f->imt <= 19]:
                                echo "Fis : ".imtKurus($f->imt). " : Kurus" ;             
                                break;
                            case [$f->imt >= 19 === $f->imt <=25]:
                                echo "Fis : ".imtKurus($f-> imt). " : Kurus<br>";
                                echo "Fis : ".imtNormal($f-> imt). " : Normal";
                                break;
                            case [$f->imt >= 25 === $f->imt <=36]:
                                echo "Fis : ".imtNormal($f-> imt). " : Normal<br>";
                                echo "Fis : ".imtGemuk($f->imt). " : Gemuk";
                                break;
                            case [$f->imt >= 30]:
                                echo "Fis : ".imtGemuk($f->imt). " : Gemuk<br>";
                                echo "Fis : ".imtObesitas($f->imt). " : Obesitas";
                                break;
                            default:                            
                                break;
                        }                
                    ?>
                    </li>
                    <li class="list-group-item">Olahraga : {{$f->olahraga}}</li>            
                    <li class="list-group-item">
                    <?php
                        switch ([$f->olahraga]) {
                            case [$f->olahraga < 4]:
                                echo "Fis : ".olahragaJarang($f->olahraga). " : Jarang" ;             
                                break;
                            case [$f->olahraga >= 4]:
                                echo "Fis : ".olahragaSering($f->olahraga). " : Sering";
                                break;
                            default:                            
                                break;
                        }                
                    ?>
                    <li class="list-group-item">Tekanan Darah : {{$f->tekanan_darah}}</li>            
                    <li class="list-group-item">
                    <?php
                        switch ([$f->tekanan_darah]) {
                            case [$f->tekanan_darah <= 90]:
                                echo "Fis : ".darahRendah($f->tekanan_darah). " : Rendah" ;             
                                break;
                            case [$f->tekanan_darah >= 90 === $f->tekanan_darah <= 120]:
                                echo "Fis : ".darahRendah($f->tekanan_darah). " : Rendah<br>";
                                echo "Fis : ".darahNormal($f->tekanan_darah). " : Normal<br>";
                                echo "Fis : ".darahTinggi($f->tekanan_darah). " : Tinggi";
                                break;
                            case [$f->tekanan_darah > 120]:
                                echo "Fis : ".darahTinggi($f->tekanan_darah). " : Tinggi";
                                break;
                            default:                            
                                break;
                        }                
                    ?>
                    </li>
                    @endforeach 
                    

                  
                    <?php
                    
                    function umurMuda($umur){
                        if ($umur <= 30) {
                            return 1;
                        }elseif ($umur>=30 && $umur<=40) {
                            return (40-$umur)/(40-30);
                        }elseif($umur >= 40) {
                            return 0;
                        }
                    }

                    ?>
                    <br>
                    <?php
                    function umurParuhbaya($umur){
                        if($umur<=35 && $umur>=60){
                            return 0;
                        }elseif ($umur>=35 && $umur<=45) {
                            return ($umur-35)/(45-35);
                        }elseif ($umur>=45 && $umur<=50) {
                            return 1;
                        }elseif ($umur>=50 && $umur<=60) {
                            return (60-$umur)/(60-50);
                        }elseif($umur>=60){
                            return 0;
                        }
                    }

                    ?>
                    <br>
                    <?php
                    function umurTua($umur){
                        if($umur<=50 && $umur>=70){
                            return 0;
                        }elseif ($umur>=50 && $umur<=55) {
                            return ($umur-50)/(55-50);
                        }elseif ($umur>=55 && $umur<= 60) {
                            return 1;
                        }elseif ($umur>=60 && $umur<= 70) {
                            return (70-$umur)/(70-60);
                        }elseif($umur>=70){
                            return 0;
                        }
                    }

                    ?>
                    <br>
                    <?php
                    function umurLansia($umur){
                        if ($umur <= 60) {
                            return 0;
                        }elseif ($umur>=60 && $umur<=70) {
                            return ($umur-60)/(70-60);
                        }elseif($umur >= 70) {
                            return 1;
                        }
                    }

                    ?>
                    <br>
                    <?php
                    function imtKurus($imt){
                        if ($imt <= 15) {
                            return 1;
                        }elseif ($imt>=15 && $imt<=19) {
                            return (19-$imt)/(19-15);
                        }elseif($imt >= 19) {
                            return 0;
                        }
                    }

                    ?>
         
                    <br>
                    <?php
                    function imtNormal($imt){
                        if($imt<=16 && $imt>=25){
                            return 0;
                        }elseif ($imt>=16 && $imt<=18) {
                            return ($imt-16)/(18-16);
                        }elseif ($imt>=18 && $imt<=23) {
                            return 1;
                        }elseif ($imt>=23 && $imt<=25) {
                            return (25-$imt)/(25-23);
                        }elseif($imt>=25){
                            return 0;
                        }
                    }

                    ?>
                    <br>
                    <?php
                    function imtGemuk($imt){
                        if($imt<=21 && $imt>=30){
                            return 0;
                        }elseif ($imt>=21 && $imt<=25) {
                            return ($imt-21)/(25-21);
                        }elseif ($imt>=25 && $imt<=28) {
                            return 1;
                        }elseif ($imt>=28 && $imt<=30) {
                            return (30-$imt)/(30-28);
                        }elseif($imt>=30){
                            return 0;
                        }
                    }

                    ?>
                    <br>
                    <?php
                    function imtObesitas($imt){
                        if ($imt <= 28) {
                            return 0;
                        }elseif ($imt>=28 && $imt<=35) {
                            return ($imt-28)/(35-28);
                        }elseif($imt >= 35) {
                            return 1;
                        }
                    }

                    ?>
                    <br>
                    <?php
                    function olahragaJarang($x){
                        if ($x <= 2) {
                            return 1;
                        }elseif ($x>=2 && $x<=4) {
                            return (4-$x)/(4-2);
                        }elseif($x >= 4) {
                            return 0;
                        }
                    }

                    ?>
                    <br>
                    <?php
                    function olahragaSering($x){
                        if ($x <= 2) {
                            return 0;
                        }elseif ($x>=2 && $x<=4) {
                            return ($x-2)/(4-2);
                        }elseif($x >= 4) {
                            return 1;
                        }
                    }

                    ?>
                    <br>
                    <?php
                    function darahRendah($x){
                        if ($x <= 70) {
                            return 1;
                        }elseif ($x>=70 && $x<=90) {
                            return (90-$x)/(90-70);
                        }elseif($x >= 90) {
                            return 0;
                        }
                    }

                    ?>
                    <br>
                    <?php
                    function darahNormal($x){
                        if($x<=80 && $x>=120){
                            return 0;
                        }elseif ($x>=80 && $x<=90) {
                            return ($x-80)/(90-80);
                        }elseif ($x>=90 && $x<=110) {
                            return 1;
                        }elseif ($x>=110 && $x<=120) {
                            return (120-$x)/(120-110);
                        }elseif($x>=120){
                            return 0;
                        }
                    }

                    ?>
                    <br>
                    <?php
                   function darahTinggi($x){
                    if ($x <= 110) {
                        return 0;
                    }elseif ($x>=110 && $x<=120) {
                        return ($x-110)/(120-110);
                    }elseif($x >= 120) {
                        return 1;
                        }
                    }   

                    ?>
                    <?php
                    function alfa(){
                        
                    }
                    ?>

			</div>
		</div>
	</div>

@endsection