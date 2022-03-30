<?php
include './Connection.php';
//session_start();
//session_destroy();
$conn = OpenCon();
    $sql = "DELETE FROM `shipments`";
    $result = $conn->query($sql);
    $conn->close();
header("Location: index.php");

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

