# BIProject2025
#



<!-- <?php 
session_start();
$_SESSION[$x] = true;


if ($x==true){
   include "nologin.php"; }
   else{
     include "login.php";
   }

?> -->

        <?php
        session_start();
        $_SESSION[$login] = false;
    
    
        
      function  banner(){
    

            
            // Prüfen, ob die Session-Variable existiert und `true` ist

            if ( $_SESSION[$loggedin] == false) {
              
                  include "login.php";
            } else {
                include "nologin.php"; 
            }
        }
        ?>


            <a oncclick="<?php  $_SESSION[$login] = false ?>"onclick="window.location.href='header.php'">Logout</a>