<?php

    $scard = $_POST['card'];
    
    $conn = mysqli_connect("remotemysql.com","MIgbqQ56pk","k4T02GvM0s","MIgbqQ56pk") or die("Connection failed");
    $sql = "delete from skill WHERE skill.cardno = {$scard};";
    $result = mysqli_query($conn,$sql) or die("unseuccesful");
    header("Location: skilldelete.html");
 mysqli_close($conn);

?>
