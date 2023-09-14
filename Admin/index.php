<?php
include_once("../includes/connection.php");
include_once("../includes/functions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

<body>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="assets/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="home1.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!DOCTYPE html>
    <div class="header">
        <h1> YOUTH, GENDER, SPORTS & CULTURE <i class="fas fa-file-medical-alt    "></i> </h1>
    </div>
    <div class=" row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="list-group">
                        <a href="index.php" class="list-group-item list-group-item-action active"><i
                                class="fas fa-home    "></i>Home.</a>
                        <a href="index.php?add_game" class="list-group-item list-group-item-action"> <i
                                class="fas fa-plus    "></i> Add Game.</a>
                        <a href="index.php?add_league" class="list-group-item list-group-item-action active"><i
                                class="fas fa-plus    "></i> Add League.</a>
                        <a href="index.php?news" class="list-group-item list-group-item-action "><i
                                class="fas fa-plus "></i> News.</a>
                        <a href="index.php?fixtures" class="list-group-item list-group-item-action active"><i
                                class="fas fa-plus    "></i> Fixtures.</a>
                        <a href="index.php?register_team" class="list-group-item list-group-item-action"><i
                                class="fas fa-registered    "></i>Register Team.</a>
                        <a href="health.php" class="list-group-item list-group-item-action active"><i
                                class="fas fa-exclamation    "></i>Reviews.</a>

                    </div>
                </div>
            </div>
        </div>
        <div class=" col-md-9">
            <div class="container my-5">
                <?php
                if (isset($_GET["add_game"])) {
                    include('game.php');
                }
                if (isset($_GET['add_league'])) {
                    include('league.php');
                }
                if (isset($_GET['register_team'])) {
                    include('register_team.php');
                }
                if (isset($_GET['news'])) {
                    include('news.php');
                }
                if (isset($_GET['addnews'])) {
                    include('addnews.php');
                }
                ?>
            </div>
        </div>

    </div>

    <footer>
        <div class="inner-footer">
            <div class="social-links">
                <ul>
                    <li class="social-items"><i class="fas fa-facebook-square"></i></li>
                    <li class="social-items"> <i class="fa fa-twitter-square"></i></li>
                    <li class="social-items"> <i class="fa fa-instagram"></i></li>
                    <li class="social-items"> <i class="fa fa-tumblr-square"></i></li>
                </ul>
            </div>

            <div class="quick-links">
                <ul>
                    <li class="quick-items"><a href="#">Home</a></li>
                    <li class="quick-items"><a href="#">Services</a></li>
                    <li class="quick-items"><a href="#">About us</a></li>
                    <li class="quick-items"><a href="#">Contact Us</a></li>

                </ul>
            </div>
        </div>
        <div class="outer-footer">
            Copyright &copy; All Rights Reserved <i class="fas fa-copyright    "></i>
        </div>
    </footer>
</body>

</html>
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="home1.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>  -->