<?php

// http://localhost/Get/index.php?broj_1=123&broj_2=555
// Global variable
// $_SERVER, $_GET, $_POST = assoc array


// var_dump($_GET);
// ["broj_1"]=> string(3) "323" ["broj_2"]=> string(3) "356" - nacin na koji var dum ispisuje
// ["broj_1 => "323", "broj_2" => "356"] - pravilan nacin na koji vi pisete

// echo $_GET["broj_1"];

// http://localhost/Get/calculator.php?broj_1=123&broj_2=555&racunica=oduzimanje

// echo $_GET["racunica"];

// echo $_GET["racunica"];



// TOMIN SAVJET
$vrstaRacunice = $_GET["racunica"];
$broj1 = $_GET["broj_1"];
$broj2 = $_GET["broj_2"];
$sabiranje = $broj1 + $broj2;
$oduzimanje = $broj1 - $broj2;
if($vrstaRacunice == "sabiranje"){
    echo $sabiranje;
}else if($vrstaRacunice == "oduzimanje"){
    echo $oduzimanje;
}

// $racunica = $_GET["broj_1"] + $_GET["broj_2"];
// echo $racunica;
?>