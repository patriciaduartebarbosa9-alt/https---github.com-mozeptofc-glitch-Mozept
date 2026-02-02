<?php
// === DEBUG ===
define('DEBUG', true);

if (DEBUG) {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
} else {
    error_reporting(0);
    ini_set('display_errors', '0');
}

// === BASE DE DADOS ===
define('DB_HOST', 'sql100.infinityfree.com');
define('DB_USER', 'if0_40999093');
define('DB_PASS', 'mozept123');
define('DB_NAME', 'if0_40999093_moze');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$conn) {
    die('Erro na ligação à base de dados');
}

mysqli_set_charset($conn, 'utf8mb4');


/*

// config.php
define('DEBUG', false); // Set to true to enable debugging
define('SITEURL', "http://localhost/mustache-website/"); // Set to true to enable debugging

*/
?>
