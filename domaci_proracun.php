<?php

// http://localhost/Get/domaci_proracun.php?input_cijena=100&odabir_kategorije=hrana&porez=on
// http://localhost/Get/domaci_proracun.php?input_cijena=100&odabir_kategorije=oprema&porez=on

$cijena = $_GET["input_cijena"];
$kategorija =  $_GET["odabir_kategorije"];
$porez =  isset($_GET["porez"]);
$porezHrane = (10/100) * ($cijena/100)*100;   //10
$dodatakNaHranu = 50;
$cijenaSaDodatkom = $cijena + $dodatakNaHranu;
$cijenaSaPorezom = $cijenaSaDodatkom / $porezHrane;


// echo $cijena;
// echo $porezHrane;

if($kategorija == "hrana" && $porez == "on"){
    echo $cijenaSaDodatkom + $cijenaSaPorezom;
}else if($kategorija == "hrana" && $porez == ""){
    echo $cijenaSaDodatkom;
}else if($kategorija == "oprema"){
    echo $cijena + 350;
}






?>