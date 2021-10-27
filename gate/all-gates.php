<?php
    $query5 = "SELECT * FROM 1gates";
    $result2 = $link -> query($query5);
    $row = 0;
    $ids = array();
    while($new=$result2 -> fetch_assoc()){
        $row +=1;
        array_push($ids, $new['id']);
    }

    
    for ($i=0; $i <= $row-1; $i+=2) { 
        $rout1 = "SELECT * FROM 1gates WHERE id='$ids[$i]'";
        $result3 = $link -> query($rout1);
        $route1 = $result3 -> fetch_assoc();

        $driv1 = "SELECT * FROM 1users WHERE id='{$route1['driver_id']}'";
        $result10 = $link -> query($driv1);
        $driver1 = $result10 -> fetch_assoc();

        $j = $ids[$i + 1];
        echo'            
            <div class="main-container">
                <a href="?route='.$route1['id'].'" class="main-container-link">
                    <article class="main-container-article">
                        <div class="article-container">
                            <div class="article-container-item">
                                <p class="article-container-item-main">
                                    '.$route1['from_city'].' -> '.$route1['destination_city'].'
                                </p>
                                <p class="article-container-item-roadtime">
                                    В пути: '.$route1['time_in_route'].' часов.
                                </p>
                            </div>
                            <div class="article-container-item right">
                                <p class="article-container-item-secondary">
                                    '.$route1['date'].'
                                </p>
                                <p class="article-container-item-time">
                                    '.$route1['time'].'
                                </p>
                            </div>
                        </div>
                        <p class="article-container-drivername">
                            Водитель: '.$driver1['first_name'].'⭐ 5.0
                        </p>
                    </article>
                </a>';

        if($j != null){
            $rout2 =  "SELECT * FROM 1gates WHERE id ='$j'";
            $result5 = $link -> query($rout2);
            $route2 = $result5 -> fetch_assoc();

            $driv2 = "SELECT * FROM 1users WHERE id='{$route2['driver_id']}'";
            $result6 = $link -> query($driv2);
            $driver2 = $result6 -> fetch_assoc();    
            echo'
                <a href="?route='.$route2['id'].'" class="main-container-link">
                    <article class="main-container-article">
                        <div class="article-container">
                            <div class="article-container-item">
                                <p class="article-container-item-main">
                                    '.$route2['from_city'].' -> '.$route2['destination_city'].'
                                </p>
                                <p class="article-container-item-roadtime">
                                    В пути '.$route2['time_in_route'].' Часов.
                                </p>
                            </div>
                            <div class="article-container-item right">
                                <p class="article-container-item-secondary">
                                    '.$route2['date'].'
                                </p>
                                <p class="article-container-item-time">
                                    '.$route2['time'].'
                                </p>
                            </div>
                        </div>
                        <p class="article-container-drivername">
                            Водитель: '.$driver2['first_name'].'⭐ 5.0
                        </p>
                    </article>
                </a>';
        }
        echo '</div>';
    }
?>


