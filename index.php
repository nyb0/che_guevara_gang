<?php
ini_set('display_errors', 1);
include 'database/DB_class.php';

$db = new Database();
$users = $db->query("SELECT * FROM `users` JOIN `countries` ON users.id_country = countries.id");
$countries = $db->query("SELECT * FROM `countries`");

include 'app/view.php';
//var_dump($users);
$data = $_POST;
include 'app/join.php';

?>