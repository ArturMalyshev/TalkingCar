<div class="user">
    <article class="user_inform_container">
        <h1 class="user_h1">Обо мне:</h1>
        <p class="user_inform_text">
            Имя: <?=$user['first_name']?>
        </p>
        <p class="user_inform_text">
            Фамилия: <?=$user['last_name']?>
        </p>
        <p class="user_inform_text">
            Отчество: <?=$user['middle_name']?>
        </p>
        <p class="user_inform_text">
            Телефон: +7<?=$user['phone']?>
        </p>
        <p class="user_inform_text">
            <strong>
                Паспортные данные
            </strong>
        </p>
        <p class="user_inform_text">
            Серия: <?=$user['id_serial']?>
        </p>
        <p class="user_inform_text">
            Номер: <?=$user['id_num']?>
        </p>
        <a href="?page=conf-profile" class="driver_container_link">
            <div class="driver_container_link_div">
                <p class="driver_container_link_div_text">Редактировать</p>
            </div>
        </a>
        <a href="?do=exit" class="driver_container_link">
            <div class="driver_container_link_div">
                <p class="driver_container_link_div_text">Выйти</p>
            </div>
        </a>
    </article>

    <article class="user_history">
        <h1 class="user_h1">История поездок</h1>
        <p class="user_history_text">Как водитель:</p>
        <?php
            include('driver-history.php');
        ?>
        <p class="user_history_text">Как пассажир:</p>
        <div class="main-container">
            <a href="?page=gate" class="main-container-link">
                <article class="main-container-article">
                    <div class="article-container">
                        <div class="article-container-item">
                            <p class="article-container-item-main">
                                Казань -> Киров
                            </p>
                            <p class="article-container-item-roadtime">
                                В пути: 12 часов.
                            </p>
                        </div>
                        <div class="article-container-item right">
                            <p class="article-container-item-secondary">
                                10 октября
                            </p>
                            <p class="article-container-item-time">
                                17:10
                            </p>
                        </div>
                    </div>
                    <p class="article-container-drivername">
                        Водитель: Максим ⭐ 5.0
                    </p>
                </article>
            </a>
            <a href="?page=gate" class="main-container-link">
                <article class="main-container-article">
                    <div class="article-container">
                        <div class="article-container-item">
                            <p class="article-container-item-main">
                                Киров -> Москва
                            </p>
                            <p class="article-container-item-roadtime">
                                В пути 12 ночей.
                            </p>
                        </div>
                        <div class="article-container-item right">
                            <p class="article-container-item-secondary">
                                11 октября
                            </p>
                            <p class="article-container-item-time">
                                17:21
                            </p>
                        </div>
                    </div>
                    <p class="article-container-drivername">
                        Водитель: Антоха ⭐ 5.0
                    </p>
                </article>
            </a>
        </div>
    </article>
</div>