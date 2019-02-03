<?php

require_once ('dbdetalles.php');
$conn=new mysqli($hostname,$username,$password,$database);

if($conn->connect_error)
{
    echo $error=$conn ->conect_error;
    
    exit();
}



