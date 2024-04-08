<?php
include_once 'core/csCore.php';

session_start();
session_destroy();
echo '<script>window.location.href = "' . $baseUrl . '";</script>';
exit;
?>