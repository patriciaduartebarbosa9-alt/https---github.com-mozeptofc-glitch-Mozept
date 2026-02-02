<?php
require_once 'config.php';

if (isset($conn) && $conn) {
    echo "Ligação bem-sucedida!";
} else {
    echo "Falha na ligação à base de dados.";
}
?>