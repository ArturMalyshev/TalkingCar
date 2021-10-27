<?php
    $first_name = $user['first_name'];
    $last_name = $user['last_name'];
    $middle_name = $user['middle_name'];
    $phone = $user['phone'];
    $id_serial = $user['id_serial'];
    $id_num = $user['id_num'];
?>

<div class="registration-container">
    <form action="" method="POST" class="registration-container-form" name="conf-profile">
        <div class="registration-container-items">
            <p class="registration-container-items-name">
                Имя:
            </p>
            <input type="text" class="registration-container-items-input" name="first_name" value=<?=$first_name?>>
        </div>
        <div class="registration-container-items">
            <p class="registration-container-items-name">
                Фамилия:
            </p>
            <input type="text" class="registration-container-items-input" name="last_name" value=<?=$last_name?>>
        </div>
        <div class="registration-container-items">
            <p class="registration-container-items-name">
                Отчество:
            </p>
            <input type="text" class="registration-container-items-input" name="middle_name" value=<?=$middle_name?>>
        </div>
        <div class="registration-container-items">
            <p class="registration-container-items-name">
                Телефон: 
            </p>
            <input type="number" class="registration-container-items-input" name="phone" value="<?=$phone?>">
        </div>
        <p class="registration-container-items-strong-text">
            Паспортные данные
        </p>
        <div class="registration-container-items">
            <p class="registration-container-items-name">
                Серия:
            </p>
            <input type="number" class="registration-container-items-input" name="id_serial" value="<?=$id_serial?>">
        </div>
        <div class="registration-container-items">
            <p class="registration-container-items-name">
                Номер:
            </p>
            <input type="number" class="registration-container-items-input" name="id_num" value=<?=$id_num?>>
        </div>
        <div class="registration-container-items-button">
            <input type="submit" value="Редактировать" class="button" name="conf-profile">
        </div>
    </form>
</div>

<?php
    if(isset($_POST['conf-profile'])){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $middle_name = $_POST['middle_name'];
        $phone = $_POST['phone'];
        $id_serial = $_POST['id_serial'];
        $id_num = $_POST['id_num'];

        $query = "UPDATE 1users SET first_name='$first_name', last_name='$last_name', middle_name='$middle_name', phone='$phone', id_serial='$id_serial', id_num='$id_num' WHERE id={$user['id']}";
        $link -> query($query);
    }
?>