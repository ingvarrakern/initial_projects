<?php
require 'db.php';
$data = $_POST;
if (isset($data['do_login'])) {
    $errors = array();
    $user = R::findOne('users', 'login = ?', array($data['login']));
    if ($user) {
        //var_dump($user);
        // логин существует
        if (password_verify($data['password'], $user->password)) {
            //все хорошо, логиним юзера
            $_SESSION['logged_user'] = $user;
            header('Location: index.php');
            //echo '<div style="color:green;">Succesful autorization!<br/> Go to home <a href="index.php">page</div><hr>';
        } else {
            $errors[] = 'Invalid password!';
        }
    } else {
        $errors[] = 'User with such login not found, come tmr!';
    }

    if (!empty($errors)) {
        echo '<div style="color:red;">' . array_shift($errors) . '</div><hr>';
    }
}
?>
<form action="Login.php" method="POST">
    <p>
    <p><strong>Enter your login</strong>:</p>
    <input type="text" name="login" value="<?php echo @$data ['login']; ?>">
    </p> 

    <p>
    <p><strong>Enter your password</strong>:</p>
    <input type="password" name="password" value="<?php echo @$data ['password']; ?>">
    </p>
    <p>
        <button type="submit" name="do_login">Sign in</button>
    </p>
