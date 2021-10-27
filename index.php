<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
        session_start();
        include("connect.php");
        if(isset($_SESSION['uid'])){
            $query = "SELECT * FROM 1users WHERE id ='{$_SESSION['uid']}'";
            $result = $link -> query($query);
            $user = $result -> fetch_assoc();
        }

    ?>
	<meta charset="UTF-8">
	<title>TalkingCar</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<body>
	<script type="text/javascript" src="js/script.js"></script>
	<div class="slider">
		<input type="range" id="fader" min="0" max="360" value="180" step="1" oninput="outputUpdate(value)">
	</div>
	<?php
		include('header/header.php');
	?>
	<main class="main">
        <?php
			if(isset($_GET['page'])){
				if($_GET['page'] == 'gate'){
					include('gate/gate.html');
				}
                elseif($_GET['page'] == 'gate-conf'){
					include('gate/gate-conf.html');
				}
                elseif($_GET['page'] == 'all-gates'){
                    include('gate/all-gates.php');
				}
                elseif($_GET['page'] == 'gate-create'){
					include('gate/gate-create.php');
				}
                elseif($_GET['page'] == 'login'){
					include('login/login.php');
				}
                elseif($_GET['page'] == 'registration'){
					include('login/registration.php');
				}
                elseif($_GET['page'] == 'conf-profile'){
					include('login/conf-profile.php');
				}
                elseif($_GET['page'] == 'driver'){
					include('user/driver.php');
				}
                elseif($_GET['page'] == 'user'){
					include('user/user.php');
				}
				else{
					include('gate/all-gates.php');
				}
			}
            elseif(isset($_GET['do'])){
                if($_GET['do'] == 'exit'){
                    include('user/exit.php');
                }
            }
            elseif(isset($_GET['route'])){
                include('gate/gate.php');
            }
            elseif(isset($_GET['gate-conf'])){
                include('gate/gate-conf.php');
            }
            elseif(isset($_GET['error'])){
                include('error.html');
            }
			else{
				include('gate/all-gates.php');
			}

		?>
	</main>
</body>
</html>