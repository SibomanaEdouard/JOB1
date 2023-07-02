<?php
//to include connection to this file
include("connection.php");

$myData = ('/home/edouard/Desktop/Programming/JOB/BACKEND/resources/Data (2).csv');
$myTable = "information";
$sql=$pdo->prepare("LOAD DATA LOCAL INFILE :csvFile

INTO TABLE $myTable
 FIELDS TERMINATED BY ','

 LINES TERMINATED BY '\n'
 IGNORE 1 LINES
 (end_year,
 cityIng,
     intensity,
     sector,
     topics,
     insight,
     swot,
     url,
     region  , 
     start_year,
     impact ,
 added ,
 Pubblished ,
 
 city,
 country,
 relevance ,
 pestle ,
 source ,
 title ,
 likelihood )
 ");
//bind csv file to path to the prepared statement
$sql->bindparam("csvFile",$myData);
$sql->execute();

if(($sql)){
    echo "Data saved successfully.";
}
else{
    echo "Error occurred: ".$pdo->errorCode();
}

// mysqli_close($pdo);
$pdo=null;
?>
