<?php
$host='localhost';
$dbname='hotel';
$user='root';
$pass='';

try{
    $pdo =new PDO("mysql:host=$host;dbname=$dbname", $user , $pass);

}catch (Exception $e){
    echo"Not connected" . $e ->getMessage();
}

?>