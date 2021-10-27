<?php
    session_start();
    require_once('./connect.php');
?>


<div class="registration-container">
    <form action="" method="POST" class="registration-container-form" name="registration">
        <h1 class="registration-container-text">
            Регистрация
        </h1>
        <div class="registration-container-items">
            <p class="registration-container-items-name">
                Имя:
            </p>
            <input type="text" class="registration-container-items-input" name="first_name">
        </div>
        <div class="registration-container-items">
            <p class="registration-container-items-name">
                Фамилия:
            </p>
            <input type="text" class="registration-container-items-input" name="last_name">
        </div>
        <div class="registration-container-items">
            <p class="registration-container-items-name">
                Отчество:
            </p>
            <input type="text" class="registration-container-items-input" name="middle_name">
        </div>
        <div class="registration-container-items">
            <p class="registration-container-items-name">
                Телефон:
            </p>
            <input type="number" class="registration-container-items-input" value="" name="phone">
        </div>
        <div class="registration-container-items">
            <p class="registration-container-items-name">
                Почта:
            </p>
            <input type="email" class="registration-container-items-input" value="" name="email">
        </div>
        <div class="registration-container-items">
            <p class="registration-container-items-name">
                Пароль:
            </p>
            <input type="password" class="registration-container-items-input" name="password">
        </div>
        <div class="registration-container-items">
            <p class="registration-container-items-name">
                Пароль:
            </p>
            <input type="password" placeholder="Подтвердите пароль" class="registration-container-items-input" name="confirm_password">
        </div>
        <p class="registration-container-items-strong-text">
            Паспортные данные
        </p>
        <div class="registration-container-items">
            <p class="registration-container-items-name">
                Серия:
            </p>
            <input type="number" class="registration-container-items-input" name="id_serial">
        </div>
        <div class="registration-container-items">
            <p class="registration-container-items-name">
                Номер:
            </p>
            <input type="number" class="registration-container-items-input" name="id_num">
        </div>
        <div class="registration-container-items-button">
            <input type="submit" value="Зарегистрироваться" class="button" name="registration">
        </div>
        <?php
            if($_SESSION['message']){
                echo '<p class="registration-msg">
                '. $_SESSION['message'] .'
                </p>';
                unset($_SESSION['message']);
            }
        ?>
    </form>
</div>

<?php
    require_once('post-reg.php');
?>
