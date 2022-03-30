
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <h1>system</h1>
        <div class="bd-content ps-lg-4 col-lg-4">
        <form method="POST" action="Controler.php">
            
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">FROM:</label>
                <input type="text" class="form-control" name="FROMFE" id="exampleFormControlInput1" placeholder="FROM">
              </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">ITEM:</label>
                <input type="text" class="form-control" name="ITEMFE" id="exampleFormControlInput1" placeholder="ITEM">
              </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">QUANTITY:</label>
                <input type="number" class="form-control" name="QUANTITYFE" id="exampleFormControlInput1" placeholder="QUANTITY">
              </div>
         <div class="mb-3">
             <input type="submit" value="Submit">
         </div>

        </form> 
        </div>
        <form method="POST" action="Clear.php">
            <input type="submit" value="Delete">
        </form> 
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</html>

<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

