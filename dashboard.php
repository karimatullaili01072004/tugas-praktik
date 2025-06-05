<!-- dashboard.php -->
<?php
// Data pengguna dari controller (biasanya dari database, di sini disimulasikan)
$nama = "karimatul laili";
$email = "karimatullaili31.com";

$title = "Dashboard";

ob_start();
?>
<h1>Dashboard Pengguna</h1>
<p>Nama: <?php echo $nama; ?></p>
<p>Email: <?php echo $email; ?></p>
<?php
$content = ob_get_clean();

// Tidak ada JS khusus
$scripts = '';

include 'master.php';
?>
