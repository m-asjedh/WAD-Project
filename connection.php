<?php 
    $url='localhost';
    $username='root';
    $pass='';
    $database='lanka';

    $connect=mysqli_connect($url,$username,$pass,$database);

    if(!$connect){
        die('Couldnt connect to database :( '.mysqli_connect_error());
    }
?>
