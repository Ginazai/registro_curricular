<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=students', 'admin', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
?>