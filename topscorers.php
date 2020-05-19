<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
                    <a href="table.php" class="nav-link p-3">Table</a>
                </li>
                <li class="navbar-item">
                    <a href="result.php" class="nav-link p-3">Results</a>
                </li>
                <li class="navbar-item">
                    <a href="topscorers.php" class="nav-link p-3 active">Top Scorers</a>
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
    <section id="topscorers" class="my-3">
    <div class="container mb-5">
        <!--title-->
        <div class="row">
            <div class="col mx-auto text-center  my-3">
                <i class="text-secondary my-2 fas fa-list fa-3x"></i>
                <h3 class="text-uppercase">top scorers</h3>
                <div class="underline bg-warning mx-auto"></div>
            </div>
        </div>
        <!--end of title-->
        <?php
            include ("db.php");

            $result = mysqli_query($connect, "SELECT * FROM scorer ORDER by goals DESC, players ASC, team ASC");
            echo "<table width=\"50%\" class=\"text-left main mx-auto\" align=center>";
            echo "<tr>
                <th align=center bdcolor=\"FFFFOO\">#</td>
                <th bdcolor=\"FFFFOO\">NAME</td>
                <th align=center bdcolor=\"FFFFOO\">TEAM</td>
                <th align=center bdcolor=\"FFFFOO\">GOALS</td>
            </tr>";

            $id = 0;
            while ($row = mysqli_fetch_array($result)) {
                $player = $row['players'];
                $team = $row['team'];
                $goals = $row['goals'];
                $img = $team.".png";
                $id++;
                
                echo "<tr>
                <td align=center bdcolor=\"FFFFOO\">$id</td>
                <td bdcolor=\"FFFFOO\">$player</td>
                <td align=center bdcolor=\"FFFFOO\"><img src=\"images/$img\" width='30px' height='30px' alt=\"image\"><br/>$team</td>
                <td align=center bdcolor=\"FFFFOO\">$goals</td>
                </tr>";
                }
            echo "</table>";
            echo "</div>";
            mysqli_close($connect);
            ?>
        </div>
    </section>
    <!--end of top scorer section-->
    <?php include ("footer.php");?>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>