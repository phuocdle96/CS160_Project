<?php
session_start();
require_once("../repo/commentRepo.php");

$userId = 0;
if (isset($_SESSION["userId"])) {
	$userId = $_SESSION["userId"];
}
else {
	die("You have to log in first!");
}

$courseId = "";
if (isset($_POST["courseId"])) {
	$courseId = $_POST["courseId"];
}
else {
	die("Failed to add new comment");
}

$detail = "";
if (isset($_POST["comment"])) {
	$detail = $_POST["comment"];
}
else {
	die("Failed to add new comment");
}

$createtime = $updatetime = date('Y-m-d H:i:s');

$submit_result = createComment($userId, $courseId, $detail, $createtime, $updatetime);
$message = 'Commented Successfully';

if ($submit_result === false) {
	die("Failed to add new comment");
}

$index = 0;
$comments = getTenCommentsByCourseId($courseId, $index);
if ($comments != null && count($comments) > 0) {
?>

<h4>Comments</h4>
<?php
    foreach ($comments as $comment) {
        $user = getUser($comment["userId"]);
        $name = "Unknown";
        if ($user != null){
        $name = $user["fullname"];
    	}
    echo '<div class="each-comment">
            <h5>'.$name.'</h5>
            <p>'.$comment["detail"].'<br>'.$comment["createtime"].'</p>
          </div>';
	}
?>

<?php
}

if (count($comments) == 10) {
    $index += 10;
    echo '<div class="loadbutton">
    		<input id="comment_index" hidden value="'.$index.'"/>
            <button class="loadmore" data-page="2">See More</button>
          </div>';
}

