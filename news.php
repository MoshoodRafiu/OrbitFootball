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
    <!--news-->
    <section id="new">
        <div class="container-fluid">
            <!--title-->
            <div class="row">
                <div class="col mx-auto text-center  my-3">
                    <i class="text-secondary my-3 far fa-newspaper fa-3x"></i>
                    <h3 class="text-uppercase">news</h3>
                    <div class="underline bg-warning mx-auto"></div>
                </div>
            </div>
            <!--end of title-->
            <div class="row">
                <!--first-->
                <?php
                include ("db.php");
                $result_per_page = 6;
                $results = mysqli_query($connect, "SELECT * FROM news");
                $number_of_result = mysqli_num_rows($results);
                $number_of_pages = ceil($number_of_result/$result_per_page);
                if (!isset($_GET['page'])){
                    $pager = 1;
                }else {
                    $pager = $_GET['page'];
                }
                $this_page = ($pager-1)*$result_per_page; 
                $news = mysqli_query($connect, "SELECT * FROM news ORDER BY dt DESC LIMIT $this_page,$result_per_page");
                while ($row = mysqli_fetch_array($news)) {
                    $title = $row['title'];
                    $dsp = $row['newsdsp'];
                    $main = $row['mainnews'];
                    $dt = $row['dt'];
                    $img = $row['img'];
                    if ($img !== ""){
                        echo "<div class=\"mx-auto col-md-6 col-lg-4 my-5\">
                        <div class=\"card\">
                            <a href=\"#\"><img src=\"images/$img\" alt=\"image\" width='500px' height='400px' class=\"card-img-top\"></a>
                            <div class=\"card-body\">
                                <h4 class=\"card-title\">$title</h4>
                                <p class=\"card-text\">$dsp</p>
                                <p class=\"text-left small\"><i class=\"text-secondary mx-1 fas fa-calendar-alt\"></i>Published on: $dt</P>
                                <form action=\"read.php\" method=\"post\">
                                <input type=\"hidden\" name=\"title\"  value=\"$title\">
                                <input type=\"hidden\" name=\"dsp\"  value=\"$dsp\">
                                <input type=\"hidden\" name=\"dt\"  value=\"$dt\">
                                <input type=\"submit\" name=\"submit\" value=\"Read More \" class=\"btn btn-outline-warning text-uppercase\">
                                </form>
                            </div>
                        </div>
                        </div>";
                    } else {
                        echo "<div class=\"mx-auto col-md-4 my-5\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h4 class=\"card-title\">$title</h4>
                                <p class=\"card-text\">$dsp</p>
                                <p class=\"text-left small\"><i class=\"text-secondary mx-1 fas fa-calendar-alt\"></i>Published on: $dt</P>
                                <form action=\"read.php\" method=\"post\">
                                <input type=\"hidden\" name=\"title\"  value=\"$title\">
                                <input type=\"hidden\" name=\"dsp\"  value=\"$dsp\">
                                <input type=\"hidden\" name=\"dt\"  value=\"$dt\">
                                <input type=\"submit\" name=\"submit\" value=\"Read More \" class=\"btn btn-outline-warning text-uppercase\">
                                </form>
                            </div>
                        </div>
                        </div>";

                    }
                }
                echo "<div class='col-12 text-center mb-5'>";
                for ($page=1; $page<=$number_of_pages; $page++){
                    if ($page == $pager){
                        echo "<a href='news.php?page=$page ' class='px-3 m-1 btn btn-outline-warning bg-warning text-white'>$page</a>"; 
                    }else {
                        echo "<a href='news.php?page=$page ' class='px-3 m-1 btn btn-outline-warning'>$page</a>";
                    }
                }
                echo "</div>";
                mysqli_close($connect);
                ?>
            </div>
        </div>
    </section>
    <!--end of news-->
    <!--footer section-->
    <?php include ("footer.php");?>
    <!--end of footer section-->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>