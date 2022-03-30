<?php
require 'db.php';
?>
<?php
if (isset($_SESSION['logged_user'])):

    $data = $_POST;
    if (isset($data['do_comment'])) {
        $comment = R::dispense('comments');
        $comment->user_id = $_SESSION['logged_user']->id;
        $comment->content = $data['comment'];
        $comment->created_at = date('Y-m-d H:i:s');
        R::store($comment);
        echo '<div style="color:green;">Comment posted!</div><hr>';
    }
    ?>
    <form action="index.php" method="POST">
        <p>
        <p><strong>Enter your comment</strong>:</p>
        <textarea type="text" name="comment" ></textarea>
    </p> 

    <p>
        <button type="submit" name="do_comment">Comment</button>
    </p>

    </form>





    <!--<div>Autorization <br>
    Hello!<?php //echo $_SESSION['logged_user']->login;  ?></div>-->
    <hr>
    <a href='logout.php'>Log out</a>
    <hr>
    <?php  
    $comments = R::findAll('comments');

    foreach ($comments as $id => $comment) {
        $user = R::findOne('users', 'id = ?', array($comment->user_id));
        echo "User: " .$user->login. " - " .$comment->created_at;
        echo "<br>";
        echo $comment->content;
        echo "<br>------------------------------<br>";

    }
    
    
    
    ?>
<?php else : ?>
    You are not autorized! Or make registration! <br/>
    <a href="Login.php"> Авторизация  </a> <br>
    <a href="Singup.php"> Регистрация  </a>
<?php endif; ?>