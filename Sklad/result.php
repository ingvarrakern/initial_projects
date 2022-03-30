<?php
// Start the session
include './Connection.php';
//session_start();
?>
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
        <div class="bd-content ps-lg-4 col-lg-6 offset-lg-3">
        <h1>Table with a good design</h1>
        
        
        <table class="table table-success table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">FROM</th>
            <th scope="col">ITEM</th>
            <th scope="col">QUANTITY</th>
          </tr>
        </thead>
        <tbody>
            
            <?php
                $conn = OpenCon();
                $sql = "SELECT * FROM shipments order by id ASC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($shipment = $result->fetch_assoc()) {
                      echo "<tr>
                            <th scope='row'>".$shipment["id"]."</th>
                            <td>".$shipment["from_country"]."</td>
                            <td>".$shipment["item"]."</td>
                            <td>".$shipment["quantity"]."</td>
                            </tr>";
                  }
                } else {
                  echo "0 results";
                }
               // $conn->close();

            ?>

        </tbody>
      </table>
        
        
        
        
        <?php
         echo "Total: ".$result->num_rows."<br>";
        ?>
        
        <a href="index.php">Back</a>
        
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</div>
    </body>
</html>

<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

