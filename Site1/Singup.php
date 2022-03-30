<?php
require 'db.php';
/** @var type $_POST */
    $data = $_POST; 
    if (isset($data['do_signup']))
    {
        //здесь регистрируем
    $errors = array();
    if( trim($data['name']) == '')
    {
        $errors[] = 'enter name';
    }
    if( trim($data['age']) == '')
    {
        $errors[] = 'enter age';
    }
    if( trim($data['login']) == '')
    {
        $errors[] = 'enter login';
    }
    if( trim($data['email']) == '')
    {
        $errors[] = 'enter email';
    }
    
    if( $data['password'] == '')
    {
        $errors[] = 'enter password';
    }
    
        if( $data['password_2'] != $data['password'])
        {
            $errors[] = 'Wrong passwords!';
        }
        if( R:: count('users',"login = ?", array($data['login'])) > 0 )
        {
            $errors[] = 'Login busy!';
        }
         if( R:: count('users',"email = ?", array($data['email'])) > 0 )
        {
            $errors[] = 'this email already in system!';
        }
        if( empty($errors))
        {
            //все хорошо, регаем
            $user = R::dispense('users');
            $user->name = $data['name'];
            $user->age = $data['age'];
            $user->login = $data['login'];
            $user->email = $data['email'];
            $user->password = password_hash($data['password'],
                    PASSWORD_DEFAULT);
            //$user->join_date = time();
            R::store($user);
            $_SESSION['logged_user'] = $user;
            header('Location: index.php');
            
        } else
        {
            echo '<div style="color:red;">'.array_shift($errors).'</div><hr>';
        }
    }
?>
<form action="Singup.php" method="POST">
    <p>
    <p><strong>Your name</strong>:</p>
        <input type="text" name="name"value="<?php echo @$data ['name'];?>">
    </p>
    <p>
    <p><strong>Your age</strong>:</p>
    <input type="integer" name="age" value="<?php echo @$data ['age'];?>">
    </p>
    <p>
    <p><strong>Your login</strong>:</p>
        <input type="text" name="login" value="<?php echo @$data ['login'];?>">
    </p>
    
    <p>
    <p><strong>Your email</strong>:</p>
        <input type="email" name="email" value="<?php echo @$data ['email'];?>">
    </p>
    <p>
        <p><strong>Your password</strong>:</p>
            <input type="password" name="password" value="<?php echo @$data ['password'];?>">
        </p>
    <p>
        <p><strong>Enter your password again</strong>:</p>
            <input type="password" name="password_2" value="<?php echo @$data ['password_2'];?>">
        </p>
        <p>
            <button type="submit" name="do_signup">Registration</button>
        </p>

</form>
