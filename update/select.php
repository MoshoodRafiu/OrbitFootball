<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orbit Football</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Arvo:700&display=swap" rel="stylesheet">
    <script src="../js/all.js"></script>
    <style>
        body{
            background: url("../images/l3.jpg")center/cover no-repeat fixed !important;
        }
        .card{
            border-radius: 10px !important;
        }
        .card-title{
            border-top-left-radius: 10px !important;
            border-top-right-radius: 10px !important;
        }
        .bd{ 
            background:  rgb(19, 187, 159);

        }
        .bg{
            background: transparent;
            color: white;
        }
        h2{
            color: white;
        }
        input::placeholder{
            color: rgb(204, 204, 204) !important;
        }
        .h-50{
            height: 400px !important;
        }
        .margin{
            margin-top: 20vh !important;
        }
        a:hover{
            text-decoration: none;
            color: wheat !important;
        }
        .head{
            background: rgb(19, 187, 159);
            height: 80px !important;
            color: white;
        }
    </style>
</head>
<body>
<?php

session_start();

if (!isset($_SESSION['name'])){
echo "<script>location.href='login.php'</script>";
exit();}

?>
    <div class="row">
        <div class="col">
            <h2 class="text-center py-2 head text-uppercase">Orbit Data Center</h2>
        </div>
    </div>
    <div class="row">
        <a href="#"><div class="col-md-6 col-lg-4 h-50 mx-auto text-center">
            <div class="card bd margin mx-auto w-50">
                <a href="table.php" class="m-5"><i class="fas fa-table my-auto bg fa-5x"></i></a>
                <a href="table.php" class="m-2 display-5 text-white">League Table</a>
            </div></a>
        </div>
        <div class="col-md-6 col-lg-4 h-50 mx-auto text-center">
            <div class="card bd margin mx-auto w-50">
            <a href="topscorer.php" class="m-5"><i class="fas fa-futbol my-auto bg fa-5x"></i></a>
            <a href="topscorer.php" class="m-2 display-5 text-white">Top Scorers</a>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 h-50 mx-auto text-center">
            <div class="card bd margin mx-auto w-50">
            <a href="result.php" class="m-5"><i class="fas fa-poll-h my-auto bg fa-5x"></i></a>
            <a href="result.php" class="m-2 display-5 text-white">Results</a>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 h-50 mx-auto text-center">
            <div class="card bd margin mx-auto w-50">
            <a href="fixture.php" class="m-5"><i class="fas fa-calendar-alt my-auto bg fa-5x"></i></a>
            <a href="fixture.php" class="m-2 display-5 text-white">Fixtures</a>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 h-50 mx-auto text-center">
            <div class="card bd margin mx-auto w-50">
            <a href="news.php" class="m-5"><i class="far fa-newspaper my-auto bg fa-5x"></i></a>
            <a href="news.php" class="m-2  display-5 text-white">News</a>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 h-50 mx-auto text-center">
            <div class="card bd margin mx-auto w-50">
            <a href="player.php" class="m-5"><i class="fas fa-user my-auto bg fa-5x"></i></a>
            <a href="player.php" class="m-2  display-5 text-white">Player of the week</a>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 h-50 mx-auto text-center">
            <div class="card bd margin mx-auto w-50">
            <a href="team.php" class="m-5"><i class="fas fa-users my-auto bg fa-5x"></i></a>
            <a href="team.php" class="m-2  display-5 text-white">Team of the week</a>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 h-50 mx-auto text-center">
            <div class="card bd margin mx-auto w-50">
            <a href="logout.php" class="m-5"><i class="fas fa-sign-out-alt my-auto bg fa-5x"></i></a>
            <a href="logout.php" class="m-2  display-5 text-white">Log out</a>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 h-50 mx-auto text-center">
            <div class="card bd margin mx-auto w-50">
            <a href="../index.php" class="m-5"><i class="fas fa-location-arrow my-auto bg fa-5x"></i></a>
            <a href="../index.php" class="m-2 display-5 text-white">Go to site</a>
            </div>
        </div>
        <!--end of footer section-->
        <script src="../js/jquery-3.4.1.min.js"></script>
        <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>