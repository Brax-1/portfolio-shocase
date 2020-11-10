<?php

    $stopic = $_POST['topic'];
    $sdesc = $_POST['desc'];
    $simg = $_POST['img'];
    echo $stopic;
    echo $sdesc;
    echo $simg;

    $conn = mysqli_connect("localhost","root","","portfolio") or die("Connection failed");
    $sql = "insert into skill(skills,desci,image) value('{$stopic}','{$sdesc}','{$simg}');";
    $result = mysqli_query($conn,$sql) or die($sql);
    header("Location: skilladd.html");
 mysqli_close($conn);

?>

