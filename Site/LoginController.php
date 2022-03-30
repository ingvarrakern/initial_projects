<?php

require './connect.php';

if (isset($_POST['fe_email']) && isset($_POST['fe_password']))
    $email = $_POST['fe_email'];
$password = $_POST['fe_password'];
$errors = array();

$query = "SELECT * FROM `users` WHERE `email` = '$email'";
// die($query);

if ($result = $connection->query($query)) {

    if ($result->num_rows > 0) {
        while ($user = $result->fetch_object()) {
            if (password_verify($password, $user->password)) {
                //все хорошо, логиним юзера
                $_SESSION['logged_user'] = $user;
                header('Location: home.php');
                //echo '<div style="color:green;">Succesful autorization!<br/> Go to home <a href="index.php">page</div><hr>';
            } else {
                $errors[] = 'Invalid password!';
            }
        }
    } else {
        $errors[] = 'User with such login not found, come tmr!';
        header('Location: index.php');
    }
}



if (!empty($errors)) {
    echo '<div style="color:red;">' . array_shift($errors) . '</div><hr>';
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


    