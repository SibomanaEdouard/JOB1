<?php

$dsn = 'mysql:host=localhost;dbname=DATA;charset=utf8mb4';
$options = [
    PDO::MYSQL_ATTR_LOCAL_INFILE => true,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
];

$password='edouard1234';
$username='edouard';
$db='DATA';
$pdo = new PDO($dsn, $username, $password, $options);


if(!$pdo){
    echo 'Failed to connect'.mysqli_connect_error();
}
else{
    echo 'connected successfull';
}


$sql="CREATE TABLE IF NOT EXISTS information(
end_year DATETIME,
cityIng int NOT NULL,
    intensity INT NOT NULL ,
    sector VARCHAR(255) NOT NULL,
    topics VARCHAR(20) NOT NULL,
    insight VARCHAR(255) NOT NULL,
    swot VARCHAR(200) NOT NULL,
    url VARCHAR(255) NOT NULL,
    region VARCHAR(20) NOT NULL , 
    start_year DATETIME,
    impact VARCHAR(255) NOT NULL,
added VARCHAR(255) NOT NULL,
Pubblished VARCHAR(255) NOT NULL,

city VARCHAR(10) NOT NULL,
country VARCHAR(10) NOT NULL,
relevance VARCHAR(30) NOT NULL,
pestle VARCHAR(255) NOT NULL,
source VARCHAR(255) NOT NULL,
title VARCHAR(255) NOT NULL,
likelihood INT(5) NOT NULL
     )";

$table=$pdo->query($sql);
if($table){
    echo "created";
}
else{
    echo "Already exist";
}


?>
