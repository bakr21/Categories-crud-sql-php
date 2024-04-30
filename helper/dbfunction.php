<?php

function connectDB() {
    $user_name = 'root';
    $password = '';
    $localhost = 'localhost';
    $database = 'pos';

    $conn = new mysqli($localhost, $user_name, $password, $database);

    return $conn;

}

function createCategory($name, $type)
{
    $conn = connectDB();
    $sql = "INSERT INTO categories (name, type) VALUES ('$name', '$type');";

    $conn->query($sql);

    $conn->close();
}

function getAllCategories()
{
    $conn = connectDB();
    $sql = "SELECT * FROM categories";

    $data = $conn->query($sql); 

    $categories = $data->fetch_all(MYSQLI_ASSOC);

    $conn->close();

    return $categories;
}

function deleteCategory($id)
{
    $conn = connectDB();

    $sql = "DELETE FROM categories WHERE id = $id";

    $conn->query($sql);

    $conn->close();
}

function updateCategory($id , $name ,$type){
    $conn = connectDB();

    $sql = "UPDATE categories
    SET name=$name, type=$type
    WHERE id=$id ";

    $conn->query($sql);

    $conn->close();
}