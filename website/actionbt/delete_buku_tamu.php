<?php
require_once('../require/database.php');

if (isset($_GET['id'])) {
    $bukutamu = strip_tags(mysqli_escape_string($connect, $_GET['id']));

    $query = "DELETE FROM bukutamu WHERE id = {$bukutamu}";
    $result = mysqli_query($connect, $query);

    if ($result) {
        $successMessage = "bukutamu berhasil dihapus";
        header("Location: ../bukutamu/index.php?successMessage=" . urlencode($successMessage));
        exit();
    }  else {
        $errorMessage = "Gagal menghapus bukutamu: " . mysqli_error($connect);
        header("Location: ../bukutamu/index.php?errorMessage=" . urlencode($errorMessage));
        exit();
    }
    
} else {
    $errorMessage = "bukutamu ID not provided.";
    header("Location: ../bukutamu/index.php?errorMessage=" . urlencode($errorMessage));
    exit();
}
?>