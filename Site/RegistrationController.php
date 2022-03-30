<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of RegistrationController
 *
 * @author Kirova
 */
require 'connect.php';
//die(print_r($_POST,true));
if (isset($_POST['fe_email']) && isset($_POST['fe_password'])) {
    $email = $_POST['fe_email'];
    $login = $_POST['fe_login'];
    $name = $_POST['fe_name'];
    $age = $_POST['fe_age'];
    $name_file = "";
    if(isset($_FILES['fe_image'])){
        $uploadpath = 'C:\\wamp64\\www\\practice1\\Site\\uploaded\\';
        $name_file = basename("avatar_".rand(1,99999).".jpg");
        $uploadfile = $uploadpath . $name_file;

        echo '<pre>';
        if (move_uploaded_file($_FILES['fe_image']['tmp_name'], $uploadfile)) {
            echo "Файл корректен и был успешно загружен.\n";
        } else {
            echo "Возможная атака с помощью файловой загрузки!\n";
        }
    }
    
    $password = password_hash($_POST['fe_password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO users (email, username, name, age, password, avatar ) VALUES('$email','$login','$name','$age','$password', '$name_file')";
    // die($query);
    $result = $connection->query($query);
    
    if ($result) {        
        $smsg = "Регистрация прошла успешно";
        header("Location: index.php");
    } else {
        $fsmsg = "Ошибка";
    }
}
