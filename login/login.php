
<?php
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    
    if(isset($_POST['login'])){
        $query2 = "SELECT * FROM 1users WHERE email='$email' and password='$password'";
        $result2= $link -> query($query2);
        $enter = $result2 -> num_rows;

    }
?>



<div class="login-container" id="ccc">
    <div class="login-header" id="ccc">
        <a href="http://z202.pautinaweb.ru/car/" class="login-header-link">
            <i class="fas fa-bus-alt header-logo-img"></i>
            <h1 class="header-logo-text">
                <strong>Talking</strong>Car
            </h1>
        </a>
    </div>  
    <div class="login-body">
        <h1 class="login-body-text">
            Вход
        </h1>
        <form action="" name="login" method="POST">
            <div class="login-body-form-item">
                <p class="login-body-form-item-text">
                    Логин: 
                </p>
                <input type="text" name="email" id="" class="login-body-form-item-input" placeholder="Email">
            </div>
            <div class="login-body-form-item">
                <p class="login-body-form-item-text">
                    Пароль: 
                </p>
                <input type="password" name="password" id="" class="login-body-form-item-input">
            </div>
            <?php
                if($enter == null){
                    $error = "<p class'inform'>Your loggin or password is incorrect</p>";
                    echo $error;
                }
                if(!isset($error)){
                    echo "<p class'inform'>Вы успешно авторизовались!</p>";
                    $row = $result2->fetch_assoc();
                    $uid = $row['id'];
                    $_SESSION['uid'] = $uid;
                    echo '<script>document.location.href="index.php"</script>';
                }
            ?>
            <input type="submit" value="Вход" name="login" id="" class="login-body-form-button">
        </form>
        <a href="?page=registration" class="login-body-reglink">Нет аккаунта? Зарегестрируйся!</a>
    </div>
</div>
