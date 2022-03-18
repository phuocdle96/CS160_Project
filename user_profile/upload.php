<?php
<<<<<<< HEAD:upload.php
require_once("repo/courseRepo.php");
require_once("repo/categoryRepo.php");
    $title = 'Edit profile page'; 
    $currentPage = 'edit_profile';
    include('header.php');
=======
  
    $title = 'Upload page'; 
    $currentPage = 'edit_profile';
    require_once("../repo/categoryRepo.php");
    include('../shared_layout/header.php');
>>>>>>> b41dfd25b03de1fb28483fbc7b84cbb3ffac7ccf:user_profile/upload.php
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD:upload.php
    <link rel="stylesheet" href="userprofile.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <title>Document</title>
=======
    <link rel="stylesheet" href="../my_css/userprofile.css" />

>>>>>>> b41dfd25b03de1fb28483fbc7b84cbb3ffac7ccf:user_profile/upload.php
</head>

<section class="upload-course-body">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="upload-info col-lg-9">
                <div class="panel">
                    <div class="load-course-heading">
                        <h2>Upload Course</h2>
                        <h3>Please fill out all the info before uploading your courses.</h3>
                    </div>
<<<<<<< HEAD:upload.php
                    <div class="panel-upload-body upload-course-info">

                        <form role="form" action="uploadHandler.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Course Catogory <span class="required">*</span></label>
                                <div class="input-group">
                                    <select class="form-control" id="categories" name="categoryid">
                                        <option selected="true" disabled="disabled">Please Select a Category
=======
                    <div class="panel-upload-body upload-course-info text-light">

                        <form role="form" action="../userHandler/uploadHandler.php" method="post"
                            enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="categories">Course Catogory <span class="required">*</span></label>
                                <div class="input-group">
                                    <select class="form-control" id="categories" name="categoryid" required>
                                        <option value="">Please Select a Category
>>>>>>> b41dfd25b03de1fb28483fbc7b84cbb3ffac7ccf:user_profile/upload.php
                                        </option>
                                        <!-- Start of php code for category list -->
                                        <?php
                                        $categoryList = getAllCategoriesInOrder();
                                        if (!empty($categoryList)) {
                                            foreach($categoryList as $category) {
                                                echo '<option value="'.$category["categoryId"].'">'.$category["categoryname"].'</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
<<<<<<< HEAD:upload.php
                                <label> Author <span class="required">*</span></label>
                                <input type="text" class="form-control" name="author" id="coursename"
                                    required="required" placeholder="What is the author of this course?">
                            </div>
                            <div class="form-group">
                                <label> Course Name <span class="required">*</span></label>
=======
                                <label for="author"> Author <span class="required">*</span></label>
                                <input type="text" class="form-control" name="author" id="author" required="required"
                                    placeholder="What is the author of this course?">
                            </div>
                            <div class="form-group">
                                <label for="coursename"> Course Name <span class="required">*</span></label>
>>>>>>> b41dfd25b03de1fb28483fbc7b84cbb3ffac7ccf:user_profile/upload.php
                                <input type="text" class="form-control" name="coursename" id="coursename"
                                    required="required" placeholder="What is the course name?">
                            </div>

                            <div class="form-group">
<<<<<<< HEAD:upload.php
                                <label> Course Description<span class="required">*</span></label>
=======
                                <label for="description"> Course Description<span class="required">*</span></label>
>>>>>>> b41dfd25b03de1fb28483fbc7b84cbb3ffac7ccf:user_profile/upload.php
                                <textarea name="description" id="description" class="form-control" rows="3"
                                    placeholder="Briefly describe the course."></textarea>
                            </div>
                            <div class="form-group">
<<<<<<< HEAD:upload.php
                                <label> Course URL<span class="required">*</span></label>
                                <input class="form-control" type="text" name="URL" placeholder="Course URL">

                            </div>
                            <div class="form-group">
                                <label> Course Cover Image (Optional)</label>
                                <input class="form-control" accept="image/*" type="file" name="image"
                                    placeholder="Image">
=======
                                <label for="URL"> Course URL<span class="required">*</span></label>
                                <input class="form-control" type="text" name="URL" id="URL" placeholder="Course URL">

                            </div>
                            <div class="form-group">
                                <label for="file"> Course Cover Image (Optional)</label>
                                <input class="form-control" accept="image/*" type="file" name="image"
                                    placeholder="Image" id="file">
>>>>>>> b41dfd25b03de1fb28483fbc7b84cbb3ffac7ccf:user_profile/upload.php

                            </div>

                            <div class="form-group">
<<<<<<< HEAD:upload.php
                                <button class="uploadBtn" type="submit">Upload</button>
=======
                                <!-- <input class="submit" type="submit" value="Upload" /> -->
                                <button class="profile-button" type="submit">Upload</button>
>>>>>>> b41dfd25b03de1fb28483fbc7b84cbb3ffac7ccf:user_profile/upload.php
                            </div>
                        </form>



                    </div>
                    <div></div>
                </div>
            </div>
        </div>
</section>
<script type="text/javascript"></script>


<?php
<<<<<<< HEAD:upload.php
    include('footer.php');
=======
    include('../shared_layout/footer.php');
>>>>>>> b41dfd25b03de1fb28483fbc7b84cbb3ffac7ccf:user_profile/upload.php
?>