<?php
$pageTitle = "Bibliothéque de l'E2C";
$pageSubtitle = "j'aime pas le javascript"; 
$navList = ["Bibliothéque","Détente","Connecter"];

//var_dump($navList[]); 
$navList[] = [
"label" => "Connecter",
"path"  => "#"
];

require_once("../View/homeView.php");
?> 


