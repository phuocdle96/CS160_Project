<?php
session_start();
$userId = 0;
if (isset($_SESSION["userId"])) {
	$userId = $_SESSION["userId"];
}

$courseId = "";
if (isset($_POST["courseId"])) {
	$courseId = $_POST["courseId"];
}


?>