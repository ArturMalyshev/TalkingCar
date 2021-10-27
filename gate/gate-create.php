<div class="gate-conf">
    <form action="" name="gate-create" method="POST">
        <div class="gate-conf-container">
            <div class="gate-conf-inform">
                <div class="gate-conf-inform-item">
                    <p class="gate-conf-inform-item-text">Город отправления:</p>
                    <input type="text" name="from-city" id="from-city-id" class="gate-conf-inform-item-input">
                </div>
                <div class="gate-conf-inform-item">
                    <p class="gate-conf-inform-item-text">Город прибытия:</p>
                    <input type="text" name="to-city" id="to-city-id" class="gate-conf-inform-item-input">
                </div>
                <div class="gate-conf-inform-item">
                    <p class="gate-conf-inform-item-text">Время в пути:</p>
                    <input type="text" name="road-time" id="road-time-id" class="gate-conf-inform-item-input">
                </div>
                <div class="gate-conf-inform-item">
                    <p class="gate-conf-inform-item-text">Марка авто:</p>
                    <input type="text" name="car" id="car-id" class="gate-conf-inform-item-input">
                </div>
                <div class="gate-conf-inform-item">
                    <p class="gate-conf-inform-item-text">Гос. номер:</p>
                    <input type="text" name="cars-num" id="cars-num-id" class="gate-conf-inform-item-input">
                </div>
                <div class="gate-conf-inform-item">
                    <p class="gate-conf-inform-item-text">Макс. пассажиров:</p>
                    <input type="number" name="max-people" id="max-people-id" class="gate-conf-inform-item-input">
                </div>
            </div>
            <div class="gate-conf-inform">
                <div class="gate-conf-inform-item">
                    <p class="gate-conf-inform-item-text">Окуда:</p>
                    <input type="text" name="from" id="from-id" class="gate-conf-inform-item-input">
                </div>
                <div class="gate-conf-inform-item">
                    <p class="gate-conf-inform-item-text">Куда:</p>
                    <input type="text" name="arrival" id="arrival-id" class="gate-conf-inform-item-input">
                </div>
                <div class="gate-conf-inform-item">
                    <p class="gate-conf-inform-item-text">Когда:</p>
                    <input type="date" name="date" id="date-id" class="gate-conf-inform-item-input">
                </div>
                <div class="gate-conf-inform-item">
                    <p class="gate-conf-inform-item-text">Время отъезда:</p>
                    <input type="time" name="time" id="time-id" class="gate-conf-inform-item-input">
                </div>
                <div class="gate-conf-inform-item">
                    <p class="gate-conf-inform-item-text">Цены:</p>
                    <input type="text" name="price" id="price-id" class="gate-conf-inform-item-input">
                </div>
                <div class="gate-conf-inform-item">
                    <p class="gate-conf-inform-item-text">Телефон:</p>
                    <input type="number" name="phone" id="phone-id" class="gate-conf-inform-item-input">
                </div>
            </div>
        </div>
        <div class="gate-conf-confirm">
            <div class="gate-conf-confirm-button">
                <input type="submit" name="gate-create" id="gate-create-id" value="Создать" class="gate-conf-confirm-button-item">
            </div>
        </div>
    </form>
</div>

<?php
    if(isset($_POST['gate-create'])){
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
        $driver_id = $user['id'];
        $driver_email = $user['email'];


        $query4 = "INSERT INTO 1gates (driver_id, driver_phone, driver_email, from_city, destination_city, time_in_route, car_name, car_id, max_passengers, from_address, destination_address, time, date, price) VALUES ('$driver_id', '$phone', '$driver_email', '$from_city', '$to_city', '$road_time', '$car_name', '$car_id', '$passengers', '$from_address', '$destination_address', '$time', '$date', '$price')";
        $link -> query($query4);
        echo '<script>document.location.href="?page=all-gates"</script>';
    }

?>

