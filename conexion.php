<?php
function conn()
{
    $hostname = "localhost";
    $usuariodb ="root";
    $passwordddb = "";
    $dbname="adso";

    $conectar = mysqli_connect($hostname, $usuariodb, $passwordddb, $dbname);
    return $conectar;

}
?>