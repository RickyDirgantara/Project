<?php

try {

    $con = new PDO('mysql:host=localhost;dbname=oop', 'root', '', array(PDO::ATTR_PERSISTENT => true));
} catch (PDOException $e) {

    echo $e->getMessage();
}

include_once 'classauth.php';

$user = new Auth($con);

?> 
