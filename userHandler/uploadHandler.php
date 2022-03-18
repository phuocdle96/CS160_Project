<?php
session_start();
<<<<<<< HEAD:uploadHandler.php
require_once("repo/courseRepo.php");
=======
require_once("../repo/courseRepo.php");
>>>>>>> b41dfd25b03de1fb28483fbc7b84cbb3ffac7ccf:userHandler/uploadHandler.php

$userId = 0;
if (isset($_SESSION["userId"])) {
	$userId = $_SESSION["userId"];
}
else {
<<<<<<< HEAD:uploadHandler.php
	header("Location: logout.php");
=======
	header("Location: ../signup_login/logout.php");
>>>>>>> b41dfd25b03de1fb28483fbc7b84cbb3ffac7ccf:userHandler/uploadHandler.php
}

$categoryId = '';
if (isset($_POST['categoryid'])){
	$categoryId = $_POST['categoryid'];
}
else {
	$_SESSION['message'] = 'failed';
<<<<<<< HEAD:uploadHandler.php
	header("Location: upload.php");
=======
	header("Location: ../user_profile/upload.php");
>>>>>>> b41dfd25b03de1fb28483fbc7b84cbb3ffac7ccf:userHandler/uploadHandler.php
}

$author = '';
if (isset($_POST['author'])){
	$author = $_POST['author'];
}
else {
	$_SESSION['message'] = 'failed';
<<<<<<< HEAD:uploadHandler.php
	header("Location: upload.php");
=======
	header("Location: ../user_profile/upload.php");
>>>>>>> b41dfd25b03de1fb28483fbc7b84cbb3ffac7ccf:userHandler/uploadHandler.php
}

$coursename = '';
if (isset($_POST['coursename'])){
	$coursename = $_POST['coursename'];
}
else {
	$_SESSION['message'] = 'failed';
<<<<<<< HEAD:uploadHandler.php
	header("Location: upload.php");
=======
	header("Location: ../user_profile/upload.php");
>>>>>>> b41dfd25b03de1fb28483fbc7b84cbb3ffac7ccf:userHandler/uploadHandler.php
}

$description = '';
if (isset($_POST['description'])){
	$description = $_POST['description'];
}
else {
	$_SESSION['message'] = 'failed';
<<<<<<< HEAD:uploadHandler.php
	header("Location: upload.php");
=======
	header("Location: ../user_profile/upload.php");
>>>>>>> b41dfd25b03de1fb28483fbc7b84cbb3ffac7ccf:userHandler/uploadHandler.php
}

$URL = '';
if (isset($_POST['URL'])){
	$URL = $_POST['URL'];
}
else {
	$_SESSION['message'] = 'failed';
<<<<<<< HEAD:uploadHandler.php
	header("Location: upload.php");
=======
	header("Location: ../user_profile/upload.php");
>>>>>>> b41dfd25b03de1fb28483fbc7b84cbb3ffac7ccf:userHandler/uploadHandler.php
}

$image = '';
if (!empty($_FILES)) {
<<<<<<< HEAD:uploadHandler.php
	$image = $_FILES['image']['name'];
	$uploaddir = 'images/course_img/';
	$uploadfile = $uploaddir . $image;

	if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
		continue;
	} else {
		$_SESSION['message'] = 'failed';
		header("Location: upload.php");
=======
	if ($_FILES['image']['name'] != "")
	{
		$image = $_FILES['image']['name'];
		$uploaddir = '../images/course_img/';
		$uploadfile = $uploaddir . $image;

		if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
		} else {
			$_SESSION['message'] = 'failed';
			header("Location: ../user_profile/upload.php");
		}
>>>>>>> b41dfd25b03de1fb28483fbc7b84cbb3ffac7ccf:userHandler/uploadHandler.php
	}
}


$createtime = $updatetime = date('Y-m-d H:i:s');

$insert_result = createCourse($coursename, $description, $categoryId, $author, $userId, $URL, $image, $createtime, $updatetime);
if ($insert_result === false) {
	$_SESSION['message'] = 'failed';
<<<<<<< HEAD:uploadHandler.php
	header("Location: upload.php");
}
else {
	$_SESSION['message'] = 'success';
	header("Location: upload.php");
}
?>
=======
	header("Location: ../user_profile/upload.php");
}
else {
	$_SESSION['message'] = 'success';
	header("Location: ../user_profile/upload_course.php");
}

?>
>>>>>>> b41dfd25b03de1fb28483fbc7b84cbb3ffac7ccf:userHandler/uploadHandler.php
