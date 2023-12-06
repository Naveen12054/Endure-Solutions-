<?php
session_start();
$localhost="localhost";
$root="root";
$password="";
$database="work";

$con = mysqli_connect($localhost,$root,$password,$database);

        if($con===false)
        {
            echo "error";
        }

?>