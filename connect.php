<?php
    $host='localhost';
    $user='insert login';
    $pass='inser password';
    $database='insert database name';

    $link=new mysqli($host,$user,$pass,$database);
    if($link -> connect_erno){
        echo'errors in database';
    }
    else{
        $link -> set_charset("utf8");
    }
?>
