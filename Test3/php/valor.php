<?php session_start(); ?>
<?php
    include("conexion.php");
    $id = $_SESSION['id'];
    $respuestas = array();
    error_reporting(E_ALL ^ E_NOTICE);
    for($i = 1; $i<88;$i++){
        $temp = $_POST['respuesta'.$i];
        array_push($respuestas, "$i".$temp);
    }

    $uno_romano = 0;
    $ii = 0;
    $iii = 0;
    $iv = 0;
    $v = 0;
    $vi = 0;
    $vii = 0;
    $viii = 8;
    $ix = 0;
    $dgv = 0;

    for($i=0;$i<87;$i++){
        //i
        if(($respuestas[$i]=="1B")||($respuestas[$i]=="2B")||($respuestas[$i]=="19C")||($respuestas[$i]=="20B")||($respuestas[$i]=="37A")||($respuestas[$i]=="38C")||($respuestas[$i]=="55B")||($respuestas[$i]=="56A")||($respuestas[$i]=="73C")||($respuestas[$i]=="74A")||($respuestas[$i]=="75C")) $uno_romano++;
        //II
        if(($respuestas[$i]=="3B")||($respuestas[$i]=="4B")||($respuestas[$i]=="21C")||($respuestas[$i]=="22C")||($respuestas[$i]=="39A")||($respuestas[$i]=="40A")||($respuestas[$i]=="57A")||($respuestas[$i]=="58C")||($respuestas[$i]=="59B")||($respuestas[$i]=="76C")||($respuestas[$i]=="77B")) $ii++;
        //III
        if(($respuestas[$i]=="5A")||($respuestas[$i]=="6C")||($respuestas[$i]=="7A")||($respuestas[$i]=="23B")||($respuestas[$i]=="24C")||($respuestas[$i]=="25C")||($respuestas[$i]=="41A")||($respuestas[$i]=="42A")||($respuestas[$i]=="43B")||($respuestas[$i]=="60A")||($respuestas[$i]=="78B")) $iii++;
        //IV
        if(($respuestas[$i]=="8B")||($respuestas[$i]=="26B")||($respuestas[$i]=="44A")||($respuestas[$i]=="62A")||($respuestas[$i]=="61B")||($respuestas[$i]=="79B")||($respuestas[$i]=="80C")||($respuestas[$i]=="81C")) $iv++;
        //V
        if(($respuestas[$i]=="9A")||($respuestas[$i]=="10B")||($respuestas[$i]=="11B")||($respuestas[$i]=="27A")||($respuestas[$i]=="28C")||($respuestas[$i]=="29C")||($respuestas[$i]=="45B")||($respuestas[$i]=="46B")||($respuestas[$i]=="63B")||($respuestas[$i]=="64A")||($respuestas[$i]=="82C")) $v++;
        //VI
        if(($respuestas[$i]=="12C")||($respuestas[$i]=="13B")||($respuestas[$i]=="30B")||($respuestas[$i]=="31C")||($respuestas[$i]=="48A")||($respuestas[$i]=="49A")||($respuestas[$i]=="47C")||($respuestas[$i]=="65C")||($respuestas[$i]=="66A")||($respuestas[$i]=="83B")||($respuestas[$i]=="84A")) $vi++;
        //VII
        if(($respuestas[$i]=="14A")||($respuestas[$i]=="32C")||($respuestas[$i]=="50C")||($respuestas[$i]=="67B")||($respuestas[$i]=="68A")||($respuestas[$i]=="85C")||($respuestas[$i]=="86A")||($respuestas[$i]=="87A")) $vii++;
        //VIII
        if(($respuestas[$i]=="15A")||($respuestas[$i]=="33B")||($respuestas[$i]=="34C")||($respuestas[$i]=="52A")||($respuestas[$i]=="51B")||($respuestas[$i]=="69B")||($respuestas[$i]=="70C")||($respuestas[$i]=="71B")) $viii--;
        //IX
        if(($respuestas[$i]=="16C")||($respuestas[$i]=="17B")||($respuestas[$i]=="18C")||($respuestas[$i]=="35A")||($respuestas[$i]=="36C")||($respuestas[$i]=="53B")||($respuestas[$i]=="54A")||($respuestas[$i]=="72A")) $ix++;
        //DGV
        if(($respuestas[$i]=="1B")||($respuestas[$i]=="2B")||($respuestas[$i]=="3B")||($respuestas[$i]=="4B")||($respuestas[$i]=="5A")||($respuestas[$i]=="6C")||($respuestas[$i]=="7A")||($respuestas[$i]=="8A")||($respuestas[$i]=="8C")||($respuestas[$i]=="9A")||($respuestas[$i]=="10B")||($respuestas[$i]=="11B")||($respuestas[$i]=="12C")||($respuestas[$i]=="13B")||($respuestas[$i]=="14B")||($respuestas[$i]=="15A")||($respuestas[$i]=="16C")||($respuestas[$i]=="17B")||($respuestas[$i]=="18C")) $dgv++;
    }
    $r = $uno_romano+$ii+$iii+$iv;
    $a = $v+$vi+$vii+$viii;
    $accion =  "UPDATE `test3` SET `uno` = '$uno_romano' WHERE `test3`.`identificacion` = $id";
    $conexion->query($accion);

    $accion =  "UPDATE `test3` SET `dos` = '$ii' WHERE `test3`.`identificacion` = $id";
    $conexion->query($accion);

    $accion =  "UPDATE `test3` SET `tres` = '$iii' WHERE `test3`.`identificacion` = $id";
    $conexion->query($accion);

    $accion =  "UPDATE `test3` SET `cuatro` = '$iv' WHERE `test3`.`identificacion` = $id";
    $conexion->query($accion);

    $accion =  "UPDATE `test3` SET `cinco` = '$v' WHERE `test3`.`identificacion` = $id";
    $conexion->query($accion);

    $accion =  "UPDATE `test3` SET `seis` = '$vi' WHERE `test3`.`identificacion` = $id";
    $conexion->query($accion);

    $accion =  "UPDATE `test3` SET `siete` = '$vii' WHERE `test3`.`identificacion` = $id";
    $conexion->query($accion);

    $accion =  "UPDATE `test3` SET `ocho` = '$viii' WHERE `test3`.`identificacion` = $id";
    $conexion->query($accion);

    $accion =  "UPDATE `test3` SET `nueve` = '$ix' WHERE `test3`.`identificacion` = $id";
    $conexion->query($accion);

    $accion =  "UPDATE `test3` SET `dgv` = '$dgv' WHERE `test3`.`identificacion` = $id";
    $conexion->query($accion);

    $accion =  "UPDATE `test3` SET `r` = '$r' WHERE `test3`.`identificacion` = $id";
    $conexion->query($accion);

    $accion =  "UPDATE `test3` SET `a` = '$a' WHERE `test3`.`identificacion` = $id";
    $conexion->query($accion);

    $pt = array();
    array_push($pt, datosdgv($dgv));
    array_push($pt, datos1($uno_romano));
    array_push($pt, datos1($ii));
    array_push($pt, datos3($iii));
    array_push($pt, datos4($iv));
    array_push($pt, datos5($v));
    array_push($pt, datos6($vi));
    array_push($pt, datos7($vii));
    array_push($pt, datos8($viii));
    array_push($pt, datos9($ix));
    array_push($pt, datosr($r));
    array_push($pt, datosa($a));

    for($i=1;$i<10;$i++){
        $ptdep = "pt".$i;
        $accion =  "UPDATE `test3` SET `$ptdep` = '$pt[$i]' WHERE `test3`.`identificacion` = $id";
        $conexion->query($accion);
    }
    $accion =  "UPDATE `test3` SET `ptdgv` = '$pt[0]' WHERE `test3`.`identificacion` = $id";
    $conexion->query($accion);
    $accion =  "UPDATE `test3` SET `ptr` = '$pt[10]' WHERE `test3`.`identificacion` = $id";
    $conexion->query($accion);
    $accion =  "UPDATE `test3` SET `pta` = '$pt[11]' WHERE `test3`.`identificacion` = $id";
    $conexion->query($accion);

    $accion =  "UPDATE `test3` SET `contestado` = '1' WHERE `test3`.`identificacion` = $id";
    $conexion->query($accion);
    mysqli_close($conexion);
    header('Location: ../../lobby.html');
?>

<?php
function datosdgv($n){
    if(($n>=0)&&($n<=5)){
        $res = 1;
    }else if($n==6){
        $res = 2;
    }else if(($n==7)||($n==8)){
        $res = 3;
    }else if($n==9){
        $res = 4;
    }else if($n==10){
        $res = 5;
    }else if($n==11){
        $res = 6;
    }else if($n==12){
        $res = 7;
    }else if(($n==13)||($n==14)){
        $res = 8;
    }else if($n==15){
        $res = 9;
    }else if(($n>=16)&&($n<=21)){
        $res = 10;
    }
    return $res;
}

function datos1($n){
    if(($n==0)||($n==1)){
        $res = 1;
    }else if($n==2){
        $res = 2;
    }else if(($n==3)){
        $res = 3;
    }else if($n==4){
        $res = 4;
    }else if($n==5){
        $res = 6;
    }else if($n==6){
        $res = 7;
    }else if(($n==7)){
        $res = 8;
    }else if($n==8){
        $res = 9;
    }else if(($n>=9)&&($n<=11)){
        $res = 10;
    }
    return $res;
}

function datos3($n){
    if(($n==0)||($n==1)){
        $res = 1;
    }else if($n==2){
        $res = 2;
    }else if(($n==3)){
        $res = 3;
    }else if($n==4){
        $res = 4;
    }else if($n==5){
        $res = 5;
    }else if($n==6){
        $res = 6;
    }else if(($n==7)){
        $res = 8;
    }else if($n==8){
        $res = 9;
    }else if(($n>=9)&&($n<=11)){
        $res = 10;
    }
    return $res;
}

function datos4($n){
    if(($n>=0)&&($n<=3)){
        $res = 1;
    }else if($n==4){
        $res = 2;
    }else if($n==5){
        $res = 4;
    }else if($n==6){
        $res = 5;
    }else if($n==7){
        $res = 7;
    }else if($n==8){
        $res = 9;
    }else if(($n>=9)&&($n<=11)){
        $res = 10;
    }
    return $res;
}

function datos5($n){
    if(($n==0)||($n==1)){
        $res = 1;
    }else if($n==2){
        $res = 2;
    }else if(($n==3)){
        $res = 3;
    }else if($n==4){
        $res = 4;
    }else if($n==5){
        $res = 5;
    }else if($n==6){
        $res = 7;
    }else if(($n==7)){
        $res = 8;
    }else if($n==8){
        $res = 9;
    }else if(($n>=9)&&($n<=11)){
        $res = 10;
    }
    return $res;
}

function datos6($n){
    if(($n==0)){
        $res = 1;
    }else if($n==1){
        $res = 2;
    }else if(($n==2)){
        $res = 3;
    }else if($n==3){
        $res = 4;
    }else if($n==4){
        $res = 6;
    }else if($n==5){
        $res = 7;
    }else if(($n==6)){
        $res = 8;
    }else if(($n>=7)&&($n<=11)){
        $res = 10;
    }
    return $res;
}

function datos7($n){
    if(($n==0)){
        $res = 1;
    }else if($n==1){
        $res = 2;
    }else if($n==2){
        $res = 4;
    }else if($n==3){
        $res = 5;
    }else if($n==4){
        $res = 7;
    }else if(($n==5)){
        $res = 8;
    }else if(($n>=6)&&($n<=8)){
        $res = 10;
    }
    return $res;
}

function datos8($n){
    if(($n==0)){
        $res = 2;
    }else if($n==1){
        $res = 4;
    }else if($n==2){
        $res = 6;
    }else if(($n==3)){
        $res = 8;
    }else if($n==4){
        $res = 9;
    }else if(($n>=5)&&($n<=8)){
        $res = 10;
    }
    return $res;
}

function datos9($n){
    if(($n==0)||($n==1)){
        $res = 1;
    }else if($n==2){
        $res = 2;
    }else if(($n==3)){
        $res = 3;
    }else if($n==4){
        $res = 4;
    }else if($n==5){
        $res = 6;
    }else if($n==6){
        $res = 7;
    }else if(($n==7)){
        $res = 9;
    }else if($n==8){
        $res = 10;
    }
    return $res;
}

function datosr($n){
    if(($n>=0)&&($n<14)){
        $res = 1;
    }else if($n==15){
        $res = 2;
    }else if(($n==17)||($n=16)){
        $res = 3;
    }else if(($n==18)||($n==19)){
        $res = 4;
    }else if($n==20){
        $res = 5;
    }else if(($n==22)||($n==21)){
        $res = 6;
    }else if(($n==23)||($n==24)){
        $res = 7;
    }else if(($n==25)||($n==26)){
        $res = 8;
    }else if(($n==28)||($n==27)){
        $res = 9;
    }else if(($n>=29)&&($n<=41)){
        $res = 10;
    }
    return $res;
}

function datosa($n){
    if(($n>=0)&&($n<=7)){
        $res = 1;
    }else if($n==8){
        $res = 2;
    }else if(($n==9)||($n==10)){
        $res = 3;
    }else if(($n==11)||($n==12)){
        $res = 4;
    }else if($n==13){
        $res = 5;
    }else if(($n==14)||($n==15)){
        $res = 6;
    }else if($n==16){
        $res = 7;
    }else if(($n==17)||($n==18)){
        $res = 8;
    }else if(($n==19)||($n==20)){
        $res = 9;
    }else if(($n>=21)&&($n<=38)){
        $res = 10;
    }
    return $res;
}
?>