<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="add.php" method="POST">
        <input type="text" placeholder="name" name="name">
        <input type="text" placeholder="info" name="info">
        <input type="text" placeholder="video_href" name="video_href">
        <button type="submit">Go</button>
    </form>

    <?php

    require_once "db.php";

    $sql = "SELECT * FROM `fp`.`videos`";
    $result = mysqli_query($link, $sql);
    $rows = mysqli_num_rows($result); // количество полученных строк
     
    echo "<table><tr><th> ID </th><th> PIRVATE_ID </th><th> info </th><th> HREF </th><th> name </th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 5 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
     
    // очищаем результат
    mysqli_free_result($result);


    ?>
</body>
</html>