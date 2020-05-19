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
                    <a href="news.php" class="nav-link p-3">News</a>
                </li>
                <li class="navbar-item">
                    <a href="fixture.php" class="nav-link p-3">Fixtures</a>
                </li>
                <li class="navbar-item">
                    <a href="table.php" class="nav-link p-3 active">Table</a>
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
    <!--table section--> 
    <section class="bg-light" id="table">
        <div class="container">
            <!--title-->
            <div class="row">
                <div class="col mx-auto text-center  my-3">
                    <i class="text-secondary my-2 far fa-list-alt fa-3x"></i>
                    <h3 class="text-uppercase">table</h3>
                    <div class="underline bg-warning mx-auto"></div>
                </div>
            </div>
            <div class="row">
            <?php
            include ("db.php");
            $result = mysqli_query($connect, "SELECT * FROM leaguetable ORDER BY Pts DESC,GD DESC, Teams ASC");
            echo "<table width=\"50%\" align=center>";
            echo "<tr>
                <th align=center bdcolor=\"FFFFOO\">#</td>
                <th align=center bdcolor=\"FFFFOO\">TEAM</td>
                <th align=center bdcolor=\"FFFFOO\">P</td>
                <th align=center bdcolor=\"FFFFOO\">W</td>
                <th align=center bdcolor=\"FFFFOO\">D</td>
                <th align=center bdcolor=\"FFFFOO\">L</td>
                <th align=center bdcolor=\"FFFFOO\">GD</td>
                <th align=center bdcolor=\"FFFFOO\">Pts</td>
            </tr>";
            $id = 0;
            while ($row = mysqli_fetch_array($result)) {
                $pts = $row["Pts"];
                $team = $row["Teams"];
                $w = $row["W"];
                $l = $row["L"];
                $d = $row["D"];
                $gf = $row["GF"];
                $ga = $row["GA"];
                $gd = $row["GD"];
                $mp = $row["MP"];
                $img = $team.".png";
                $id++;
                echo "<tr>
                    <td>$id</td>
                    <td align=center ><img src=\"images/$img\" class=\"text-center mx-auto\" width='30px' height='30px' alt=\"image\"><br/>$team</td>
                    <td>$mp</td>
                    <td>$w</td>
                    <td>$d</td>
                    <td>$l</td>
                    <td>$gd</td>
                    <td>$pts</td>
                </tr>";
            }
            echo "</table>";
            mysqli_close($connect);
            ?>
            </div>
        </div>
    </section>
    <!--end of table section-->
    <!--footer section-->
    <?php include ("footer.php");?>
    <!--end of footer section-->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>