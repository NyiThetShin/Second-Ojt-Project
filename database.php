<?php 


$db = mysqli_connect('localhost','root','','ojt database');
if(!$db){
    echo "your data base is not connected!";
}


$sql = "CREATE TABLE IF NOT EXISTS register(




Id INT NOT NULL AUTO_INCREMENT ,
name VARCHAR (225),
password VARCHAR (225),
email VARCHAR (225),
PRIMARY KEY ( Id )


)";

$result = mysqli_query($db,$sql) or die("query failed");

if(!$result ) {
    echo "database is not success for create!";
}




?>