<?php

include "D:\JoJo\GlobaLibs\php\DataBase\ShowData_BD\core\ShowData_BD.php";


test_test_();

$Ip       = "localhost";
$Login    = "mysql";
$Pass     = "mysql";
$DataBase = "food";
$Table    = "beverages";

#$release = ShowData_BD($Ip, $Login, $Pass, $DataBase, $Table);


$InitDataBase = mysqli_connect($Ip, $Login, $Pass, $DataBase);

$release = ShowData_BD_lite($InitDataBase, $Table);

echo $release;