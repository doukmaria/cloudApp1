<?php

include("db.class.php");
$db = new DB('cloudapp', '54.76.240.41', 'root', '');

$theUser = $_POST['theUser'];
$theScore = $_POST['theScore'];

//$scores = $db->queryUniqueValue("SELECT MIN(score) FROM scores");

$db->execute("INSERT INTO scores(name, score) VALUES ('$theUser', '$theScore')");
echo 'Your score was submitted.';

?>
