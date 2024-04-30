<?php
    session_start();
    require_once "../../helper/dbfunction.php" ; 

// connect to database

$name = $_POST['name'];

$type = $_POST['type'];

createCategory($name, $type);
$_SESSION['success'] = 'Category created successfully';

header('Location: ../../create-categories.php');