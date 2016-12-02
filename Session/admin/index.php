<?php
session_start();
if(!$_SESSION['isLoggedIn']){
    header('Location: login.php');
    exit;
}
 echo "Hello, you are in a secret Area!";
 ?>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

