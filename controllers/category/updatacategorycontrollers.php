<?php
    session_start();
    require_once "../../helper/dbfunction.php" ; 

    $id = $_POST['id'];
    $name = $_POST['name'];
    $type = $_POST['type'];

    print_r($_POST);
    
    updateCategory($id , $name ,$type);

$_SESSION['del'] = 'Category updated successfully';

header('Location: ../../create-categories.php');
