<?php
/*$host= 'db';
$user = 'devuser';
$pass = 'devpass';
$db = 'test_db';

$conn = new mysqli($host,$user,$pass,$db);

if($conn->connect_error){
    echo 'connection failed' . $conn->connect_error;
}
echo 'Sucessfully connected to MYSQL';*/
$host = "localhost";
$user = "devuser";
$pass = "devpass";
$db = "test_db";

try{
    $conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO User VALUES('assali','mathieu')";

    $conn->exec($sql);
    echo "nouvel utilisateur";
}
catch(PDOException $e){
    echo $e->getMessage();
}

$conn = null;

?>
