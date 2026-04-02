<?php
$DB_HOST="127.0.0.1";
$DB_USER="root";
$DB_PASSWORD="";
$DB_DATABASE="cartao";

$db = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_DATABASE);

if(!$db){
    echo "error ao se conectar com o database";
}