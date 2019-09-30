<?php

    require_once "videos/fun.php";
    require_once "videos/db.php";

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="assets/css/style.css">


    <!-- <title>FullPorn</title> -->
</head>
<body>

    <div class="landing_first_page">
        <div class="landing_header">
            <div class="landing_header_div">
                <div class="landing_header_logotype">
                    <div class="landing_header_img">
                        <img src="assets/css/img/landing/FP иконка.png">
                    </div>  
                </div>  
                <div class="landing_header_categories">
                    <ul class="landing_header_categories_ul">
                        <li><a href="">Best</a></li>
                        <li><a href="">Categories</a></li>
                        <li><a href="">Chanell</a></li>
                        <li><a href="">Pornstars</a></li>
                    </ul>
                </div>  
                <div class="landing_header_search">
                    <div class="landing_header_search_div">
                        <div class="landing_header_search_div_search">
                            <img src="assets/css/img/landing/magnifying-glass.png" onclick="openSearchBlock()">
                            <div class="search_input">
                                <input type="text" name="search">
                            </div>
                        </div>
                        <div class="landing_header_search_div_menu">
                            <div class="header_search_menu" onclick="openDropMenu()">
                                <span></span>
                            </div>
                            <div class="drop_menu">
                                <ul class="drop_menu_ul">
                                    <li><a href="/">My account</a></li>
                                    <li><a href="/">Settings</a></li>
                                    <li><a href="/">Categories</a></li>
                                    <li><a href="/">Porn - Stars</a></li>
                                    <li><a href="/">About</a></li>
                                    <li><a href="/">Support</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>     
            </div>
        </div>
        <div class="landing_first_img"></div>
    </div>

    <div class="landing_second_page">
        <div class="blocks_video">
            <div class="blocks_video_content">
                <?

                $sql = "SELECT * FROM `fp`.`videos`";
                $result = mysqli_query($link, $sql);
                $rows = mysqli_num_rows($result);


    

                for ($i = 0 ; $i < $rows ; ++$i)
                {
                    $row = mysqli_fetch_row($result);

                    echo '
                    
                        
                                <div class="video_block" id="'.$row[1].'">
                                    <div class="video_block_name">
                                        <span>'.$row[4].'</span>
                                    </div>
                                    <div class="video_block_over_flow_img">
                                        <img src="'.$row[3].'">
                                    </div>
                                    <div class="video_block_info">
                                        <div class="video_block_likes">
                                            <span>'.$row[5].'</span>
                                        </div>
                                        <div class="video_block_eyes">
                                            <span>'.$row[6].'</span>
                                        </div>
                                    </div>
                                    <div class="video_block_play">
                                        <img src="assets/css/img/play-button.png">
                                    </div>
                                </div>
                    ';
                }
                ?>
            </div>
        </div>
    </div>

    <div class="">

    </div>


    
    
    

        








    <script src="assets/jquery/jquery-3.4.1.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/index.js"></script>

    




</body>
</html>