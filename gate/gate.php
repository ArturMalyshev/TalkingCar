<?php
    $route_id=$_GET['route'];
    $query2 = "SELECT * FROM 1gates WHERE id = '$route_id'";
    $result2 = $link -> query($query2);
    $route = $result2 -> fetch_assoc();
    echo '
    <div class="gate-main">
        <div class="gate-main-block">
            <h1 class="gate-main-block-h">
                '.$route['from_city'].' -> '.$route['destination_city'].'
            </h1>
            <p class="gate-main-block-p">
                В пути: '.$route['time_in_route'].' часов.
            </p>
            <p class="gate-main-block-p">
                Авто: '.$route['car_name'].'
            </p>
            <p class="gate-main-block-p">
                Гос. номер: '.$route['car_id'].'
            </p>
            <p class="gate-main-block-p">
                Макс. пассажиров: '.$route['max_passengers'].'
            </p>

            <p class="gate-main-block-driver">
                Водитель: Максим ⭐️ 5.0
            </p>
        </div>
        <div class="gate-main-block vertical">
            <div class="gate-main-container-date">
                <p class="gate-main-block-date">
                    '.$route['date'].'
                </p>
                <p class="gate-main-block-date">
                    '.$route['time'].'
                </p>
                <p class="gate-main-block-price">
                    '.$route['price'].' руб/чел
                </p>
            </div>
            <div class="gate-main-container">
                <p class="gate-main-block-p">
                    Откуда: г. '.$route['from_city'].', '.$route['from_address'].'
                </p>
                <p class="gate-main-block-p">
                    Куда: г. '.$route['destination_city'].', '.$route['destination_address'].'
                </p>
            </div>

        </div>
    </div>';
    if(isset($_SESSION['uid'])){
        if($route['driver_id'] == $user['id']){
            echo '
                <div class="gate-button">
                    <a href="?gate-conf='.$route['id'].'" class="driver_container_link">
                        <div class="driver_container_link_div">
                            <p class="driver_container_link_div_text">Редактировать</p>
                        </div>
                    </a>
                </div>
            ';
        }
        else{
            echo '                
            <div class="gate-button">
                    <div class="driver_container_link_div">
                        <p class="driver_container_link_div_text">Забронировать:</p>
                        <p class="driver_container_link_div_text">'.$route['driver_email'].'</p>
                        <p class="driver_container_link_div_text">'.$route['driver_phone'].'</p>
                        <p class="driver_container_link_div_text">'.$user['phone'].'</p>
            </div>';
        }
    }
?>

