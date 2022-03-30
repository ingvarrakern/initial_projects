<?php
// Start the session
//session_start();
include './Shipment.php';
include './Connection.php';
function main (){
    $conn = OpenCon();
    $shipment = new Shipment($_POST["FROMFE"], $_POST["ITEMFE"], $_POST["QUANTITYFE"]);
    $sql = "INSERT INTO `shipments`( `from_country`, `item`, `quantity`) VALUES ('".$shipment->getFrom()."','".$shipment->getItem()."',".$shipment->getQuantity().")";
    $result = $conn->query($sql);
    $conn->close();
    //$shipment = new Shipment($_POST["FROMFE"], $_POST["ITEMFE"], $_POST["QUANTITYFE"]);
    
    //if(!isset($_SESSION["rows"])) $_SESSION["rows"] = array();
    
    //array_push($_SESSION["rows"],$shipment);
    
    //echo "<pre>".print_r($_SESSION,true)."</pre>";
    ///die();
};

main();
//


//
//$array = [
//    "from" => strtoupper($_POST["FROMFE"]),
//    "item" => strtoupper($_POST["ITEMFE"]),
//    "quantity" => strtoupper($_POST["QUANTITYFE"]),
//];



    header("Location: result.php");

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

