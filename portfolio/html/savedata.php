<?php

    $stopic = $_POST['star'];
    $sdesc = $_POST['desc'];
    $simg = $_POST['name'];
    echo $stopic;
    echo $sdesc;
    echo $simg;

    $conn = mysqli_connect("remotemysql.com","MIgbqQ56pk","k4T02GvM0s","MIgbqQ56pk") or die("Connection failed");
    $sql = "insert into review(stars,desci,name) value('{$stopic}','{$sdesc}','{$simg}');";
    $result = mysqli_query($conn,$sql) or die("Unscess");
    header("Location: correct.html");
    mysqli_close($conn);

?>

