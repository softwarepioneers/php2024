<?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '0634114004';
         $mysqli = new mysqli($dbhost, $dbuser, $dbpass);
         
         if($mysqli->connect_errno ) {
            printf("Connect failed: %s<br />", $mysqli->connect_error);
            exit();
         }
         printf('Connected successfully.<br />');
         $mysqli->close();
      ?>