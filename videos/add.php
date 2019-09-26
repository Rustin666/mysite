<?php

require_once "db.php";
require_once "fun.php";

$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$info = filter_var(trim($_POST['info']), FILTER_SANITIZE_STRING);
$video_href = filter_var(trim($_POST['video_href']), FILTER_SANITIZE_STRING);
$private_id = randomKey(50);


$sql = "INSERT INTO `videos` (`video_id`, `name`, `info`, `href`) VALUES ( '$private_id', '$name', '$info', '$video_href')";

$result = mysqli_query($link, $sql);

if ($result) {
    header("Location: /videos");
}

else {
    echo "ERROR! Lexa dibil";
}