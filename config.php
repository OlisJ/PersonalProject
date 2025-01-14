<?php
$host='localhost';
$dbname='db3';
$user='root';
$pass='';

try{
    $pdo =new PDO("mysql:host=$host;dbname=$dbname", $user , $pass);

}catch (Exception $e){
    echo"Not connected" . $e ->getMessage();
}

?>