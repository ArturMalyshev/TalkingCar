<?php
    $host='localhost';
    $user='z202';
    $pass='7!2fV:uJD8tk!VY';
    $database='z202';

    $link=new mysqli($host,$user,$pass,$database);
    if($link -> connect_erno){
        echo'проблема с БД';
    }
    else{
        //echo'норм бд ! ';
        $link -> set_charset("utf8");
    }
?>