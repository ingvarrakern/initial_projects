<?php
require 'lib/rb.php';
//R::setup( 'mysql:host=localhost;dbname=adminka','root', 'root' ); 
// 
//if ( !R::testConnection() )
//{
//        exit ('Нет соединения с базой данных');
//}

//R::setup( 'mysql:host=localhost;port=80;dbname=adminka', 'root', 'root' );

R::setup( 'mysql:host=localhost;dbname=adminka','root', 'root' );

session_start();
// if (!R::testConnection()) {
//    die('No DB connection!');
//}
//try{
//        $db = new PDO('mysql:host=localhost;dbname=adminka','root','root');
//    } catch(PDOException $e){
//        echo $e->getmessage();
//    }
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

