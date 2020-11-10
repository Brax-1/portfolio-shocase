<?php

    $scard = $_POST['card'];
    
    $conn = mysqli_connect("localhost","root","","portfolio") or die("Connection failed");
    $sql = "delete from skill WHERE skill.cardno = {$scard};";
    $result = mysqli_query($conn,$sql) or die("unseuccesful");
    header("Location: skilldelete.html");
 mysqli_close($conn);

?>
