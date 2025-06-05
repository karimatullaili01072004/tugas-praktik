<?php
$title = "Profil";

ob_start();
?>
<h1>Ini halaman profil</h1>

<?php
$content = ob_get_clean();

$scripts = '<script src="https://example.com/js/profile.js"></script>';

include 'master.php';
?>
