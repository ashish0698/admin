<?php

include('db.php');
// for courses
$selectquery = "SELECT * FROM course";
$cquery = mysqli_query($con,$selectquery);
//for semester
$selectquery = "SELECT * FROM semester ";
$squery = mysqli_query($con,$selectquery);
//for subjects
$selectquery = "SELECT * FROM semester where semester='II'";
$subquery = mysqli_query($con,$selectquery);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Question_bank</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light">Question Bank</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="dashboard.php">Dashboard</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="data_entry.php">Data Entry</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Semester</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Subjects</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Questions</a>
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin_name</a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#!">Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <div class="container-fluid">
                <h1 class="">Data Entry</h1>
                <form>
                    <div>
                        Courses : 
                        <select>
                            <?php  
                            while($courses = mysqli_fetch_array($cquery)){
                                ?>
                                <option> <?php echo $courses['course'];?> </option>
                                <?php
                            }
                            ?>

                        </select><br><br>
                    </div>
                    <div>
                        Semester : 
                        <select>
                            <?php  
                            while($semester = mysqli_fetch_array($squery)){
                                ?>
                                <option> <?php echo $semester['semester'];?> </option>
                                <?php
                            }
                            ?>

                        </select><br><br>
                    </div>
                    <div>
                        Subjects : 
                        <select>
                            <?php  
                            while($subject = mysqli_fetch_array($subquery)){
                                ?>
                                <option> <?php echo $subject['subject'];?> </option>
                                <?php
                            }
                            ?>

                        </select><br><br>
                    </div>
                        Google Docs Link : <input type="text" name="glink"><br/><br>

                    <button type="submit" value="insert">Insert</button>
                </form>

            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>
</html>
