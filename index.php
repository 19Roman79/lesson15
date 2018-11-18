<?php

require_once "db.class.php";

$db = new Database('localhost', 'root', '', 'cms');

$users = $db->selectAll('SELECT * FROM user');
echo "<pre>";
    print_r($users);
echo "</pre>";

?>