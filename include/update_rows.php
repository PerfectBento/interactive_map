<?php
$data = json_decode(file_get_contents('php://input'), true);
require 'db.php';
$result = updateHomes($data);
echo $result;


?>