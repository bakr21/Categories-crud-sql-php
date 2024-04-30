<?php

$user_name = 'root';
$password = '';
$localhost = 'localhost';

$conn = new mysqli($localhost, $user_name, $password);

$sql = 'CREATE DATABASE IF NOT EXISTS `pos`';

$conn->query($sql);
$conn->close();