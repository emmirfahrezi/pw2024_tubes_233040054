<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: ../login/login.php');
    exit;
}

require '../function/functions.php';

// jika gada id di url
if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}


$id = $_GET['id'];
if (hapus($id) > 0) {
    echo "<script>
                alert('data berhasil dihapus!');
                document.location.href = 'index.php';
                </script>";
} else {
    echo "data gagal dihapus!";
}
