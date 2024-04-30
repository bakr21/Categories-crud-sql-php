<?php
    session_start();
    require_once "../../helper/dbfunction.php" ; 

// connect to database

$id = $_POST['id'];

deleteCategory($id);

$_SESSION['del'] = 'Category deleted successfully';

header('Location: ../../create-categories.php');
