<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title>Login system</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="bd-content ps-lg-4 col-lg-4">
            <form id="formRegister" method="POST" enctype="multipart/form-data" onSubmit="verify();">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="fe_email" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputLogin" class="form-label">Your login</label>
                  <input type="text" class="form-control" id="exampleInputLogin" name="fe_login" >
                </div>
                <div class="mb-3">
                  <label for="exampleInputName" class="form-label">Your name</label>
                  <input type="text" class="form-control" id="exampleInputName" name="fe_name" >
                </div>
                <div class="mb-3">
                  <label for="exampleInputAge" class="form-label">Your Age</label>
                  <input type="integer" class="form-control" id="exampleInputAge" name="fe_age" >            
                </div>
                <div class="mb-3">
                    <label for="exampleInputAvatar" class="form-label">Your Avatar</label>
                    <input type="file" name="fe_image" class="form-control" accept="image/*" required > 
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="fe_password" class="form-control" id="exampleInputPassword1">
                </div>                
                <div class="mb-3">
                  <label for="exampleInputPassword2" class="form-label">Re-Password</label>
                  <input type="password" name="fe_re_password" class="form-control" id="exampleInputPassword2">
                </div>
                <button type="submit" class="btn btn-primary" target="target"> Register</button>                
              </form>
        </div>
        <div class="bd-content ps-lg-4 col-lg-4 mt-3">
            <a class="btn btn-primary" href="index.php" target="target"> Back</a>
        </div>
                
<!--        <a class="btn btn-primary" href="LoginController.php" target="target"> login</a>-->
<!--         <a href="registration.php" target="target"> registration</a>-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</html>
