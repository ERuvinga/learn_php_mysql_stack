<?php
    include_once("connect.php");
    $email = $_POST['email'];
    $pwrd = $_POST['pswrd'];
    $name = $_POST['name'];

    //images data
    $imgadFolder = "../images/users/";
    $imgname = "user_".preg_split("/[@]/",$email)[0].'_'.time();
    $fileExt = pathinfo($_FILES['imgp']['name'])['extension'];
    $imgnametemp = $_FILES['imgp']['tmp_name'];

    $filename = $imgadFolder.$imgname.'.'.$fileExt; // complete name of image file 
    //upload image on server
    $result = move_uploaded_file($imgnametemp,$filename);

    $sql = 'INSERT INTO user(name, email,pswd, img) VALUES ("'.$name.'","'.$email.'","'.$pwrd.'","'.$filename.'")';
    $result = $con->query($sql);

    if($result){
        header("location:usertable.php?msg=compte créer avec succès");
        exit();
    }

    else{
        header("location:register.php?error=compte non crée");
        exit();
    }
?>