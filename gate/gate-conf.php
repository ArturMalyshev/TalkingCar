<?php
    if(isset($_GET['gate-conf'])){
        $gate_id = $_GET['gate-conf'];
        $query11 = "SELECT * FROM 1gates WHERE id ='$gate_id'";
        $result11 = $link -> query($query11);
        $gate_conf = $result11 -> fetch_assoc();
        if ($gate_conf['driver_id'] == $user['id']){
            echo'
            <div class="gate-conf">
                <form action="" name="gate-conf" method="POST">
                    <div class="gate-conf-container">
                        <div class="gate-conf-inform">
                            <div class="gate-conf-inform-item">
                                <p class="gate-conf-inform-item-text">Город отправления:</p>
                                <input type="text" name="from-city" id="from-city-id" class="gate-conf-inform-item-input" value="'.$gate_conf['from_city'].'">
                            </div>
                            <div class="gate-conf-inform-item">
                                <p class="gate-conf-inform-item-text">Город прибытия:</p>
                                <input type="text" name="to-city" id="to-city-id" class="gate-conf-inform-item-input" value="'.$gate_conf['destination_city'].'">
                            </div>
                            <div class="gate-conf-inform-item">
                                <p class="gate-conf-inform-item-text">Время в пути:</p>
                                <input type="text" name="road-time" id="road-time-id" class="gate-conf-inform-item-input" value="'.$gate_conf['time_in_route'].'">
                            </div>
                            <div class="gate-conf-inform-item">
                                <p class="gate-conf-inform-item-text">Марка авто:</p>
                                <input type="text" name="car" id="car-id" class="gate-conf-inform-item-input" value="'.$gate_conf['car_name'].'">
                            </div>
                            <div class="gate-conf-inform-item">
                                <p class="gate-conf-inform-item-text">Гос. номер:</p>
                                <input type="text" name="cars-num" id="cars-num-id" class="gate-conf-inform-item-input" value="'.$gate_conf['car_id'].'">
                            </div>
                            <div class="gate-conf-inform-item">
                                <p class="gate-conf-inform-item-text">Макс. пассажиров:</p>
                                <input type="number" name="max-people" id="max-people-id" class="gate-conf-inform-item-input" value="'.$gate_conf['max_passengers'].'">
                            </div>
                        </div>
                        <div class="gate-conf-inform">
                            <div class="gate-conf-inform-item">
                                <p class="gate-conf-inform-item-text">Окуда:</p>
                                <input type="text" name="from" id="from-id" class="gate-conf-inform-item-input"  value="'.$gate_conf['from_address'].'">
                            </div>
                            <div class="gate-conf-inform-item">
                                <p class="gate-conf-inform-item-text">Куда:</p>
                                <input type="text" name="arrival" id="arrival-id" class="gate-conf-inform-item-input" value="'.$gate_conf['destination_address'].'">
                            </div>
                            <div class="gate-conf-inform-item">
                                <p class="gate-conf-inform-item-text">Когда:</p>
                                <input type="date" name="date" id="date-id" class="gate-conf-inform-item-input" value="'.$gate_conf['date'].'">
                            </div>
                            <div class="gate-conf-inform-item">
                                <p class="gate-conf-inform-item-text">Время отъезда:</p>
                                <input type="time" name="time" id="time-id" class="gate-conf-inform-item-input" value="'.$gate_conf['time'].'">
                            </div>
                            <div class="gate-conf-inform-item">
                                <p class="gate-conf-inform-item-text">Цены:</p>
                                <input type="text" name="price" id="price-id" class="gate-conf-inform-item-input" value="'.$gate_conf['price'].'">
                            </div>
                            <div class="gate-conf-inform-item">
                                <p class="gate-conf-inform-item-text">Телефон:</p>
                                <input type="number" name="phone" id="phone-id" class="gate-conf-inform-item-input" value="'.$gate_conf['driver_phone'].'">
                            </div>
                        </div>
                    </div>
                    <div class="gate-conf-confirm">
                        <div class="gate-conf-confirm-button">
                            <input type="submit" name="gate-conf" id="" value="Редактировать" class="gate-conf-confirm-button-item">
                        </div>
                        <div class="gate-conf-confirm-button">
                            <form action="" method="POST" name="rm_gate">
                                <input type="submit" name="rm_gate" id="" value="УДАЛИТЬ!" class="gate-conf-confirm-button-item">
                            </form>
                        </div>
                    </div>
                </form>
            </div>
            ';
            if(isset($_POST['gate-conf'])){
                $from_city = $_POST['from-city'];
                $to_city = $_POST['to-city'];
                $road_time = $_POST['road-time'];
                $car_name = $_POST['car'];
                $car_id = $_POST['cars-num'];
                $passengers = $_POST['max-people'];
                $from_address = $_POST['from'];
                $destination_address =$_POST['arrival'];
                $date = $_POST['date'];
                $time = $_POST['time'];
                $price = $_POST['price'];
                $phone = $_POST['phone'];
                if($user['id'] == $gate_conf['driver_id']){
                    $query4 = "UPDATE 1gates SET driver_phone='$phone', from_city='$from_city', destination_city='$to_city', time_in_route='$road_time', car_name='$car_name', car_id='$car_id', max_passengers='$passengers', from_address='$from_address', destination_address='$destination_address', time='$time', date='$date', price='$price' WHERE id='$gate_id'";
                    $link -> query($query4);
                    echo '<script>document.location.href="?page=all-gates"</script>';
                }
                else{
                    echo '<script>document.location.href="?error"</script>';
                }
            }
            if(isset($_POST['rm_gate'])){
                if($user['id'] == $gate_conf['driver_id']){
                    $query4 = "DELETE FROM 1gates WHERE id='$gate_id'";
                    $link -> query($query4);
                    echo '<script>document.location.href="?page=all-gates"</script>';
                }
                else{
                    echo '<script>document.location.href="?error"</script>';
                }
            }
        }
        
        else{
            include('error.html');
        }
    }
?>


