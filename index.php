<?php

require("vendor/autoload.php");
//$_SERVER["REQUEST_URI"]
//JE VEUX SAVOIR QUAND JEE SUIS EN LIGNE SI CA ME RETOUTRNE MON URL OU PAS

// SI je ne suis pas en ligne je veux charger mon .env 
if($_SERVER["HTTP_HOST"] != "new-copain.herokuapp.com/"){
$dotenv= Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
}
//sinon je continue ici 

$ary = array("token" => $_ENV["TOKEN"]);
    $data= json_encode($ary);
    //[{data:"Hello World"}]

    echo($data)
?>
