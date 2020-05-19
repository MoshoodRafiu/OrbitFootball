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
<body class="mx-auto">
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
                    <a href="news.php" class="nav-link p-3">News</a>
                </li>
                <li class="navbar-item">
                    <a href="fixture.php" class="nav-link p-3">Fixtures</a>
                </li>
                <li class="navbar-item">
                    <a href="table.php" class="nav-link p-3">Table</a>
                </li>
                <li class="navbar-item">
                    <a href="result.php" class="nav-link p-3 active">Results</a>
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
    <!--top scorer section-->
    <section id="result" class="mb-5">
        <div class="container my-2">
            <div class="col-sm-6 mx-auto text-center mb-5">
                    <!--title-->
                    <div class="row mb-3">
                        <div class="col mx-auto text-center  my-3">
                            <i class="text-secondary my-2 fas fa-futbol fa-3x"></i>
                            <h3 class="text-uppercase">Results</h3>
                            <div class="underline bg-warning mx-auto"></div>
                        </div>
                    </div>
                    <!--end of title-->
                    <?php
                    include ("db.php");
                    $result = mysqli_query($connect, "SELECT * FROM results ORDER by dt DESC");



                    while ($row = mysqli_fetch_array($result)) {
                        $home = $row['home'];
                        $away = $row['away'];
                        $hg = $row['hg'];
                        $ag = $row['ag'];
                        $date = $row['dt'];
                        $himg = $home.".png";
                        $aimg = $away.".png";
                        
                        echo "<div class=\"text-center main mx-auto\" align=center><table class=\"text-center mx-auto\"><tr>$date</tr>";
                        echo "<tr>
                        <th width=\"50%\" align=center bdcolor=\"FFFFOO\"><img src=\"images/$himg\" class=\"text-center mx-auto\" width='30px' height='30px' alt=\"image\">$home</td>
                        <td align=center bdcolor=\"FFFFOO\"> $hg</td>
                        <td align=center bdcolor=\"FFFFOO\"> $ag</td>
                        <th width=\"50%\" align=center bdcolor=\"FFFFOO\"><img src=\"images/$aimg\" class=\"text-center mx-auto\" width='30px' height='30px' alt=\"image\">$away</td></tr>";
                    }
                    echo "</table>";
                    echo "</div>";
                    mysqli_close($connect);
                    ?>
                </div>
            </div>
    <!--end of top scorer section-->
    <?php include ("footer.php");?>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>