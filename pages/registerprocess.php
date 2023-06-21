<?php
    include_once("connect.php");
    $email = $_POST['email'];
    $pwrd = $_POST['pswrd'];
    $name = $_POST['name'];
    $imgname = "image.jpg"

    $sql = 'INSERT INTO user(name, email,pswd, img) VALUES ("'.$name.'","'.$email.'","'.$name.'","'.$imgname.'")';
    $result = $con->query($sql);

    echo($sql);
?>