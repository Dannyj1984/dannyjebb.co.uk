<?php
include_once 'dbh.inc.php';

$first = $_POST['first'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$hash_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users(firstname, surname, email, username, password) VALUES ('$first', '$surname', '$email', '$username', '$hash_password');";

		mysqli_query($conn, $sql);

		header("Location: ../index.php?signup=success");