<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orbit Football</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Arvo:700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/maincss.css">
    <script src="js/all.js"></script>
</head>
<body>
    <!--navbar-->
    <nav class="navbar navbar-dark  bg-none navbar-expand-lg sticky-top">
        <!--logo-->
        <a href="index.html" class="navbar-brand"><h2>Orbit Football</h2></a>
        <!--links and toggler-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarlinks">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse new" id="navbarlinks">
            <!--links-->
            <ul class="navbar-nav ml-auto">
                <li class="navbar-item">
                    <a href="index.php" class="nav-link p-3">Home</a>
                </li>
                <li class="navbar-item">
                    <a href="news.php" class="nav-link p-3 active">News</a>
                </li>
                <li class="navbar-item">
                    <a href="fixture.php" class="nav-link p-3">Fixtures</a>
                </li>
                <li class="navbar-item">
                    <a href="table.php" class="nav-link p-3">Table</a>
                </li>
                <li class="navbar-item">
                    <a href="result.php" class="nav-link p-3">Results</a>
                </li>
                <li class="navbar-item">
                    <a href="topscorers.php" class="nav-link p-3">Top Scorers</a>
                </li>
                <li class="navbar-item">
                    <a href="profile.php" class="nav-link p-3">Club Profile</a>
                </li>
                <li class="navbar-item">
                    <a href="update/login.php" class="nav-link p-3">Data Center</a>
                </li>
                <li class="navbar-item">
                    <a href="#contact" class="nav-link p-3">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--end of navbar-->
    <section id="new">
        <div class="container-fluid">
            
            <?php
                $title = $_POST['title'];
                $dsp = $_POST['dsp'];
                $dt = $_POST['dt'];
                include ("db.php");

                $news = mysqli_query($connect, "SELECT * FROM news WHERE title='$title' and newsdsp='$dsp' and dt='$dt' ");
                while ($row = mysqli_fetch_array($news)) {
                    $title = $row['title'];
                    $dsp = $row['newsdsp'];
                    $main = $row['mainnews'];
                    $dt = $row['dt'];
                    $img = $row['img'];
                }
                mysqli_close($connect)
            ?>
            <div class="row">
                <div class="col-md-8 text-center mx-auto mb-5">
                    <div class="row mb-3">
                    <div class="col mx-auto text-center  my-3">
                        <h5 class="text-uppercase"><?php echo $title; ?></h5>
                        <div class="underline bg-warning mx-auto"></div>
                    </div>
                    </div>
                    <img src="images/<?php echo $img; ?>" class="img img-fluid" alt="image">
                    <p class="text-left my-3"><?php echo $main; ?></p>
                    <p class="text-left small my-3"><i class="text-secondary mx-1 fas fa-calendar-alt"></i>Published on: <?php echo $dt; ?></P>
                </div>
            </div>
        </div>
    </section>


    <!--footer section-->
    <?php include ("footer.php");?>
    <!--end of footer section-->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>