<?php
$db = new PDO('mysql:host=localhost;dbname=telephone_directory', 'root', 'root');

$sql = $db->query('SELECT * FROM `directory`');
$telephone_directory = $sql->fetchAll();
?>