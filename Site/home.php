<?php
require './connect.php';
?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title>Home system</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="bd-content ps-lg-4 col-lg-4">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address: <?php echo $_SESSION['logged_user']->email;?> </label>
                </div>
                <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username: <?php echo $_SESSION['logged_user']->username;?> </label>
                    </div>
            <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name: <?php echo $_SESSION['logged_user']->name;?> </label>
                </div>
            <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Age: <?php echo $_SESSION['logged_user']->age;?> </label>
                   
                </div>
            <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Avatar: <img src="uploaded\<?php echo $_SESSION['logged_user']->avatar;?>" class="img-thumbnail" alt="..."> </label>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                </div>                
        </div>
        <div class="bd-content ps-lg-4 col-lg-4 mt-3">
            <a type="button" class="btn btn-primary" href="index.php" target="target"> Back</a> 
        </div>
        <!--         <a href="registration.php" target="target"> registration</a>-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</html>
