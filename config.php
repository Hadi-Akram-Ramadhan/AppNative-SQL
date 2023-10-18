<?php
session_start();
$koneksi = new mysqli('localhost','root',"",'myapp_hadi') or die(mysqli_error($koneksi));
if (isset($_POST['login'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = sha1($_POST['password']);
    $query = $koneksi->query("SELECT * FROM user WHERE username='$username' and password='$password'");
    $num = mysqli_num_rows($query);
    $c = mysqli_fetch_array($query);
    if ($num > 0) {
        $_SESSION['username'] = $c['username'];
        $_SESSION['nmUser'] = $c['nmUser'];
        header("location:index.php");
    } else {
        echo "Gagal";
    }
}
?>