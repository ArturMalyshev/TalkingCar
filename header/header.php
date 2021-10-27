<?php
    if(isset($_GET['page'])){
        if($_GET['page'] == 'login'){
        }
        elseif(isset($_SESSION['uid'])){
            if($_GET['page'] == 'driver'){
                include('header/header-item3.php');
            }
            elseif(($_GET['page'] == 'gate-create')){
                include('header/header-item3.php');
            }
            else{
                include('header/header-item1.php');
            }
        }
        else{
            include('header/header-item2.php');
        }
    }
    elseif(isset($_SESSION['uid'])){
        include('header/header-item1.php');
    }
    else{
        include('header/header-item2.php');
    }
?>