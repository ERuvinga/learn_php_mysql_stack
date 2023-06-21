<?php
    include_once("connect.php");
    $email = $_POST['email'];
    $pwrd = $_POST['pswrd'];
    $name = $_POST['name'];
    $imgname = "image.jpg";

    $sql = 'INSERT INTO user(name, email,pswd, img) VALUES ("'.$name.'","'.$email.'","'.$name.'","'.$imgname.'")';
    $result = $con->query($sql);

    if($result){
        header("location:usertable.php?msg=compte créer avec succès");
    }
?>