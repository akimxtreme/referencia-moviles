<?php
session_start();

// Destruyo Todas las Variables de Session
session_unset();
// Destruyo Toda la Session
session_destroy();

// Redireccione al la pagina de login y password
header('Location: index.php');
exit;
?>