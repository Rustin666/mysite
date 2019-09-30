<?php

require_once "../videos/db.php";

$id = $_GET['id'];

if(!$id) {
    header("Location: /");
}

$sql = "SELECT * FROM `videos` WHERE '$id' = `video_id`";

$query = mysqli_query($link, $sql);

$get_video = mysqli_fetch_all($query);

print_r($get_video);