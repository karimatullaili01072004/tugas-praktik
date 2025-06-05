<?php
$title = "Beranda";

ob_start();
?>
<h1>Selamat datang di halaman home!</h1>
<?php include 'alert.php'; showAlert("Selamat datang!", "green"); ?>
<?php
$content = ob_get_clean();

include 'master.php';
?>
