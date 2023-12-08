<?php
require_once('../require/database.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = strip_tags(mysqli_escape_string($connect, $_POST['nama']));
    $email = strip_tags(mysqli_escape_string($connect, $_POST['email']));
    $message = strip_tags(mysqli_escape_string($connect, $_POST['pesan']));

    $query = "INSERT INTO bukutamu(nama, email, pesan) VALUES ('{$name}','{$email}','{$message}')";
    $result = mysqli_query($connect, $query);

    if($result){
        $successMessage = "Bukutamu Berhasil Di tambahkan";
        header("Location: ../bukutamu/index.php?successMessage=" . urlencode($successMessage));
        exit();
    }if(!$result){
        die("Query error: " . mysqli_error($connect));
    }
    
}