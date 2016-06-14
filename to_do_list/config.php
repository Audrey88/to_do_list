<?php
/**
 * Created by PhpStorm.
 * User: toussaint
 * Date: 10/06/16
 * Time: 11:45
 */
ini_set('display_errors', 1);

  //connection au serveur:
    $conn = new mysqli( "localhost", "Toussaint", "253253", "list_to_do" ) ;

mysqli_set_charset($conn, 'utf8');
 
