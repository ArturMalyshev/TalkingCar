<?php
    echo'
        <header class="header" id="ccc">
            <a href="http://z202.pautinaweb.ru/car/" class="header-container">
                <i class="fas fa-bus-alt header-logo-img"></i>
                <h1 class="header-logo-text">
                    <strong>Talking</strong>Car
                </h1>
            </a>
            <div class="header-container">
                <a href="?page=driver" class="header-logo-link">Я водитель</a>
                <a href="?page=user" class="header-logo-link jsColor">
                    <strong>
                        '. $user['first_name'] .'
                    </strong>
                </a>
            </div>
        </header>';
?>