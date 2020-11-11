<?php

    $sname = $_POST['name'];
    $semail = $_POST['email'];
    $sdesc = $_POST['desc'];
    $smess = $_POST['mess'];
 
    $conn = mysqli_connect("remotemysql.com","MIgbqQ56pk","k4T02GvM0s","MIgbqQ56pk") or die("Connection failed");
    $sql = "insert into contacts(name,email,subject,mess) value('{$sname}','{$semail}','{$sdesc}','{$smess}');";
    $result = mysqli_query($conn,$sql) or die("Unsucess");
    header("Location: correct.html");
    mysqli_close($conn);

?>
'
