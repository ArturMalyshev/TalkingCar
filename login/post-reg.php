<?php
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $middle_name = $_POST['middle_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $id_serial = $_POST['id_serial'];
    $id_num = $_POST['id_num'];
    if ($password !== $confirm_password) {
        $_SESSION['message'] = "Пароли не совпадают!";
    }
    else{
        if(isset($_POST['registration'])){
            $password = md5($password);
            $query = "INSERT INTO 1users (first_name, last_name, middle_name, phone, email, password, id_serial, id_num) VALUES ('$first_name', '$last_name', '$middle_name', '$phone', '$email', '$password', '$id_serial', '$id_num')";
            $link -> query($query);
            echo '<script>document.location.href="?page=login"</script>';
        }
    }
?>
