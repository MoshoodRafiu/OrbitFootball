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
        <a href="index.php" class="navbar-brand"><h2>Orbit Football</h2></a>
        <!--links and toggler-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarlinks">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse new" id="navbarlinks">
            <!--links-->
            <ul class="navbar-nav ml-auto">
                <li class="navbar-item">
                    <a href="index.php" class="nav-link p-3 active">Home</a>
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
    <section>
        <?php
        include ("db.php");
        $news = mysqli_query($connect, "SELECT * FROM news ORDER BY dt DESC LIMIT 1");
                while ($row = mysqli_fetch_array($news)) {
                    $title = $row['title'];
                    $dsp = $row['newsdsp'];
                    $main = $row['mainnews'];
                    $dt = $row['dt'];
                    $img = $row['img'];
                }
        ?>
        <!--carousel-->
        <div class="container-fluid m-0">
            <div class="row">
                <div class="col text-center mx-auto">
                    <div id="example" class="carousel slide carousel-fade" data-ride="carousel">
                        <!--indicator-->
                        <ul class="carousel-indicators">
                            <li data-target="#example" data-slide-to="0" class="active"></li>
                            <li data-target="#example" data-slide-to="1"></li>
                            <li data-target="#example" data-slide-to="2"></li>
                            <li data-target="#example" data-slide-to="3"></li>
                        </ul>
                        <!--end of indicator-->
                        <!--images-->
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-interval="2000"><img src="images/Volcanoes.jpg" class="d-block w-100" alt="project">
                                <div class="carousel-caption ">
                                   <p><?php echo $title; ?></p>
                                  <a href="news.php"><button class="btn  bg-warning">Read More</button></a>
                                </div>
                            </div>
                            <?php
                            $news = mysqli_query($connect, "SELECT * FROM news ORDER BY dt DESC LIMIT 2");
                            while ($row = mysqli_fetch_array($news)) {
                                $title = $row['title'];
                                $dsp = $row['newsdsp'];
                                $main = $row['mainnews'];
                                $dt = $row['dt'];
                                $img = $row['img'];
                            }
                            ?>
                            <div class="carousel-item" data-interval="2000"><img src="images/l2.jpg" class="d-block w-100" alt="project">
                                <div class="carousel-caption ">
                                    <p><?php echo $title; ?></p>
                                    <a href="news.php"><button class="btn bg-warning">Read More</button></a>
                                </div>
                            </div>
                            <?php
                            $news = mysqli_query($connect, "SELECT * FROM news ORDER BY dt DESC LIMIT 3");
                            while ($row = mysqli_fetch_array($news)) {
                                $title = $row['title'];
                                $dsp = $row['newsdsp'];
                                $main = $row['mainnews'];
                                $dt = $row['dt'];
                                $img = $row['img'];
                            }
                            ?>
                            <div class="carousel-item " data-interval="2000"><img src="images/l3.jpg" class="d-block w-100" alt="project">
                                <div class="carousel-caption ">
                                    <p><?php echo $title; ?></p>
                                    <a href="news.php"><button class="btn bg-warning">Read More</button></a>
                                </div>
                            </div>
                            <?php
                            $news = mysqli_query($connect, "SELECT * FROM news ORDER BY dt DESC LIMIT 4");
                            while ($row = mysqli_fetch_array($news)) {
                                $title = $row['title'];
                                $dsp = $row['newsdsp'];
                                $main = $row['mainnews'];
                                $dt = $row['dt'];
                                $img = $row['img'];
                            }
                            ?>
                            <div class="carousel-item" data-interval="2000"><img src="images/l4.jpg" class="d-block w-100" alt="project">
                                <div class="carousel-caption ">
                                    <p><?php echo $title; ?></p>
                                    <a href="news.php"><button class="btn  bg-warning">Read More</button></a>
                                </div>
                            </div>
                        </div>
                        <!--end of images-->
                        <!--controls-->
                        <a href="#example" class="carousel-control-prev" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a href="#example" class="carousel-control-next" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                        <!--end of controls-->
                </div>
            </div>
        </div>
    </section>

    <!--end of carousel-->
    <!--latest result-->
    <section class="mt-3 height result">
        <div class="container">
            <!--title-->
            <div class="row">
                <div class="col mx-auto text-center  my-3">
                    <i class="text-light my-3 fas fa-futbol fa-3x"></i>
                    <h3 class="text-uppercase text-light">latest result</h3>
                    <div class="underline bg-warning mx-auto"></div>
                </div>
            </div>
            <!--end of title-->
            <div class="row mx-auto"> 
                <!--result-->
                <div class="col-md-5 my-5 mx-auto">
                    <div class="card">
                        <?php 
                        $result = mysqli_query($connect, "SELECT * FROM results ORDER BY dt DESC LIMIT 1");
                        while ($row = mysqli_fetch_array($result)) {
                            $home = $row['home'];
                            $away = $row['away'];
                            $hg = $row['hg'];
                            $ag = $row['ag'];
                            $date = $row['dt'];
                            $himg = $home.".png";
                            $aimg = $away.".png";
                        }

                        $result = mysqli_query($connect, "SELECT * FROM results ORDER BY dt DESC LIMIT 2");
                        while ($row = mysqli_fetch_array($result)) {
                            $home1 = $row['home'];
                            $away1 = $row['away'];
                            $hg1 = $row['hg'];
                            $ag1 = $row['ag'];
                            $date1 = $row['dt'];
                            $himg1 = $home1.".png";
                            $aimg1 = $away1.".png";
                        }
                        ?>

                        <div class="row">
                            <!--result-->
                            <div class="col-3  mx-auto mt-3 align-items-center">
                                <a href="#"><img src="images/<?php echo $himg; ?>" width="100px" class="img-fluid" alt="team"></a>
                            </div>
                            <div class="col-3 m-auto text-dark text-center"><h5>vs</h5></div>
                            <div class="col-3 mt-3 mx-auto align-items-center">
                                <a href="#"><img src="images/<?php echo $aimg; ?>" width="100px" class="img-fluid" alt="team"></a>
                            </div>
                        </div>
                        <div class="row">
                                <?php
                                echo "<div class=\"text-center main mx-auto\" ><table class=\"text-center main mx-auto\" ><tr><td>$home</td><td>$hg</td><td>:</td><td>$ag</td><td>$away</td></tr></table></div>"
                                ?>
                        </div>
                        <div class="row">
                            <p class="text-center mx-auto mt-1"><?php echo "Date Played: ".$date; ?></p>
                        </div>
                    </div>
                </div>
                <!--result-->
                <div class="col-md-5 my-5 mx-auto">
                    <div class="card">
                        <div class="row">
                            <!--result-->
                            <div class="col-3  mx-auto mt-3 align-items-center">
                                <a href="#"><img src="images/<?php echo $himg1; ?>" width="100px" class="img-fluid" alt="team"></a>
                            </div>
                            <div class="col-3 m-auto text-dark text-center"><h5>vs</h5></div>
                            <div class="col-3 mt-3 mx-auto align-items-center">
                                <a href="#"><img src="images/<?php echo $aimg1; ?>" width="100px" class="img-fluid" alt="team"></a>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                                echo "<div class=\"text-center main mx-auto\" ><table class=\"text-center main mx-auto\" ><tr><td>$home1</td><td>$hg1</td><td>:</td><td>$ag1</td><td>$away1</td></tr></table></div>"
                            ?>
                        </div>
                        <div class="row">
                            <p class="text-center mx-auto mt-1"><?php echo "Date Played: ".$date1; ?></p>
                        </div>
                    </div>
                </div>
                <!--end of result-->
            </div>
            
        </div>
    </section>
    <!--end of latest result-->
    <!--latest match-->
    <section class="text-dark height match">
        <div class="container">
            <!--title-->
            <div class="row">
                <div class="col mx-auto text-center  my-3">
                    <i class="text-light my-3 fas fa-poll-h fa-3x"></i>
                    <h3 class="text-uppercase text-light">latest match</h3>
                    <div class="underline bg-warning mx-auto"></div>
                </div>
            </div>
            <!--end of title-->
            <div class="row mx-auto">
                <div class="col-md-5 my-5 mx-auto">
                    <div class="card bg">
                    <?php
                        $result = mysqli_query($connect, "SELECT * FROM fixtures ORDER BY dt DESC, home DESC  LIMIT 1");
                        while ($row = mysqli_fetch_array($result)) {
                            $home = $row['home'];
                            $away = $row['away'];
                            $date = $row['dt'];
                            $himg = $home.".png";
                            $aimg = $away.".png";
                        }

                        ?>
                        <div class="row">
                            <!--result-->
                            <div class="col-3 mx-auto text-center mt-3">
                                <a href="#"><img src="images/<?php echo $himg; ?>" width="100px" height="100px" class="img-fluid" alt="team"></a>
                            </div>
                            <div class="col-3 m-auto text-light text-center"><h5>vs</h5></div>
                            <div class="col-3 mx-auto text-center mt-3">
                                <a href="#"><img src="images/<?php echo $aimg; ?>" width="100px" height="100px" class="img-fluid" alt="team"></a>
                            </div>
                        </div>
                        <div class="card-title row">
                        <?php
                                echo "<div class=\"text-center main mx-auto text-light\" ><table class=\"text-center main mx-auto\" ><tr><td>$home</td><td></td><td>$away</td></tr></table></div>"
                            ?> 
                        </div> 
                        <div class="row card-text mx-auto text-center">
                            <p class="text-center mx-auto text-light"><?php echo "Date: ".$date; ?></p><hr/>
                        </div> 
                    </div>
                </div>
                <div class="col-md-5 my-5 mx-auto">
                    <div class="card bg">
                    <?php
                        $result = mysqli_query($connect, "SELECT * FROM fixtures ORDER BY dt DESC, home DESC LIMIT 2");
                        while ($row = mysqli_fetch_array($result)) {
                            $home1 = $row['home'];
                            $away1 = $row['away'];
                            $date1 = $row['dt'];
                            $himg = $home1.".png";
                            $aimg = $away1.".png";
                        }

                        ?>
                        <div class="row">
                            <!--result-->
                            <div class="col-3 mx-auto text-center mt-3">
                                <a href="#"><img src="images/<?php echo $himg; ?>" width="100px" height="100px" class="img-fluid" alt="team"></a>
                            </div>
                            <div class="col-3 m-auto text-light text-center"><h5>vs</h5></div>
                            <div class="col-3 mx-auto text-center mt-3">
                                <a href="#"><img src="images/<?php echo $aimg; ?>" width="100px" height="100px" class="img-fluid" alt="team"></a>
                            </div>
                        </div>  
                        <div class="card-title row">
                            <?php
                                echo "<div class=\"text-center main mx-auto text-light\" ><table class=\"text-center main mx-auto\" ><tr><td>$home1</td><td></td><td>$away1</td></tr></table></div>"
                            ?> 
                        </div> 
                        <div class="row card-text mx-auto text-center">
                            <p class="text-center mx-auto text-light"><?php echo "Date: ".$date1; ?></p><hr/>
                        </div> 
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--end of latest match-->
    <!--latest news-->
    <section id="new">
        <div class="contrainer">
            <!--title-->
            <div class="row">
                <div class="col mx-auto text-center  my-3">
                    <i class="text-secondary my-3 far fa-newspaper fa-3x"></i>
                    <h3 class="text-uppercase">latest news</h3>
                    <div class="underline bg-warning mx-auto"></div>
                </div>
            </div>
            <!--end of title-->
            <div class="row">
                <!--latest 6 news-->
                <?php
                $news = mysqli_query($connect, "SELECT * FROM news ORDER BY dt DESC LIMIT 6");
                while ($row = mysqli_fetch_array($news)) {
                    $title = $row['title'];
                    $dsp = $row['newsdsp'];
                    $main = $row['mainnews'];
                    $dt = $row['dt'];
                    $img = $row['img'];
                    if ($img !== ""){
                        echo "<div class=\"mx-auto col-md-6 col-lg-4 my-5\">
                        <div class=\"card\">
                            <a href=\"#\"><img src=\"images/$img\" alt=\"image\"  width='500px' height='400px' class=\"card-img-top\"></a>
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
                ?>
            </div>
        </div>
    </section>
    <!--end of latest news-->
    <!--table section--> 
    <section class="bg-light" id="table">
            <div class="row">
                <div class="col-lg-6 col-12 table-border mx-auto text-center">
                    <!--title-->
                    <div class="row">
                        <div class="col mx-auto text-center  my-3">
                            <i class="text-secondary my-2 far fa-list-alt fa-3x"></i>
                            <h3 class="text-uppercase">table</h3>
                            <div class="underline bg-warning mx-auto"></div>
                        </div>
                    </div>
                    <!--end of title-->
                    <?php
                    $result = mysqli_query($connect, "SELECT * FROM leaguetable ORDER BY Pts DESC,GD DESC, Teams ASC");
                    echo "<div class=\"mx-auto text-center\">";
                    echo "<table align=center>";
                    echo "<tr>
                        <th align=center bdcolor=\"FFFFOO\">#</td>
                        <th align=center bdcolor=\"FFFFOO\">TEAM</td>
                        <th align=center bdcolor=\"FFFFOO\">P</td>
                        <th align=center bdcolor=\"FFFFOO\">W</td>
                        <th align=center bdcolor=\"FFFFOO\">D</td>
                        <th align=center bdcolor=\"FFFFOO\">L</td>
                        <th align=center bdcolor=\"FFFFOO\">GD</td>
                        <th align=center bdcolor=\"FFFFOO\">Pt</td>
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
                    echo "</table></div>";
                    ?>
                </div>
                <div class="col-lg-6 mx-auto text-center">
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
                        $result = mysqli_query($connect, "SELECT * FROM scorer ORDER by goals DESC, players ASC, team ASC");
                        echo "<table width=\"50%\" class=\"text-left mx-auto\" align=center>";
                        echo "<tr class=\"text-right main mx-auto\">
                            <th align=center bdcolor=\"FFFFOO\">#</td>
                            <th bdcolor=\"FFFFOO\">NAME</td>
                            <th width='50%' class=\"text-right mx-auto\" bdcolor=\"FFFFOO\">TEAM</td>
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
                            <td align=center bdcolor=\"FFFFOO\"><img src=\"images/$img\" class=\"text-center mx-auto\" width='30px' height='30px' alt=\"image\"><br/>$team</td>
                            <td align=center bdcolor=\"FFFFOO\">$goals</td>
                            </tr>";
                            }
                        echo "</table>";
                        echo "</div>";
                        ?>
                </div>
            </div>
    </section>
    <!--end of table section-->
    <!--top scorer section-->
    <section class="mt-3">
        <?php
            $result = mysqli_query($connect, "SELECT * FROM player ORDER BY dt DESC LIMIT 1");
            while ($row = mysqli_fetch_array($result)) {
                $player = $row['player'];
            }
            $result = mysqli_query($connect, "SELECT * FROM team ORDER BY dt DESC LIMIT 1");
            while ($row = mysqli_fetch_array($result)) {
                $team = $row['team'];
            }
            ?>
        <div class="container mb-3">
            <div class="row">
                <div class="col-sm-6 mx-auto text-center">
                    <!--title-->
                    <div class="row">
                        <div class="col mx-auto text-center  mt-2">
                            <i class="text-secondary my-2 fas fa-user fa-3x"></i>
                            <h3 class="text-uppercase">player of the week</h3>
                            <div class="underline bg-warning mx-auto"></div>
                        </div>
                    </div>
                    <!--end of title-->
                    <img src="images/<?php echo $player; ?>" alt="image"  width="500px" height="400px" class="img img-fluid w-75 mt-3">
                </div>
                <div class="col-sm-6 mx-auto text-center">
                    <!--title-->
                    <div class="row">
                        <div class="col mx-auto text-center  mt-2">
                            <i class="text-secondary my-2 fas fa-users fa-3x"></i>
                            <h3 class="text-uppercase">Team of the week</h3>
                            <div class="underline bg-warning mx-auto"></div>
                        </div>
                    </div>
                    <!--end of title-->
                    <img src="images/<?php echo $team; ?>" alt="image"  width="500px" height="400px" class="img img-fluid mt-3 w-75">
                </div>
            </div>
        </div>
    </section>
    <!--end of top scorer section-->
    <!--fixtures and topscorers-->
    <section  class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto text-center">
                    <!--title-->
                    <div class="row">
                        <div class="col mx-auto text-center  my-3">
                            <i class="text-secondary my-2 fas fa-calendar-alt fa-3x"></i>
                            <h3 class="text-uppercase">fixtures</h3>
                            <div class="underline bg-warning mx-auto"></div>
                        </div>
                    </div>
                    <!--end of title-->
                    <?php
                        $result = mysqli_query($connect, "SELECT * FROM fixtures ORDER by dt DESC LIMIT 4");



                        while ($row = mysqli_fetch_array($result)) {
                            $home = $row['home'];
                            $away = $row['away'];
                            $date = $row['dt'];
                            $himg = $home.".png";
                            $aimg = $away.".png";
                            
                            echo "<div class=\"text-center main mx-auto\" align=center><table class=\"text-center main mx-auto\" align=center><tr>$date</tr>";
                            echo "<tr>
                            <th width=\"50%\" align=center bdcolor=\"FFFFOO\"><img src=\"images/$himg\" class=\"text-center mx-auto\" width='30px' height='30px' alt=\"image\">$home</td>
                            <td align=center bdcolor=\"FFFFOO\"> </td>
                            <td align=center bdcolor=\"FFFFOO\">vs</td>
                            <td align=center bdcolor=\"FFFFOO\"> </td>
                            <th width=\"50%\" align=center bdcolor=\"FFFFOO\"><img src=\"images/$aimg\" class=\"text-center mx-auto\" width='30px' height='30px' alt=\"image\">$away</td></tr>";
                            }
                        echo "</table>";
                        echo "</div>";
                        ?>
                </div>
                <div class="col-md-6 mx-auto text-center">
                    <!--title-->
                    <div class="row">
                        <div class="col mx-auto text-center  my-3">
                            <i class="text-secondary my-2 fas fa-futbol fa-3x"></i>
                            <h3 class="text-uppercase">Results</h3>
                            <div class="underline bg-warning mx-auto"></div>
                        </div>
                    </div>
                    <!--end of title-->
                    <?php
                    $result = mysqli_query($connect, "SELECT * FROM results ORDER by dt DESC LIMIT 4");



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
        </div>
    </section>
    <!--end of fixtures-->
    <!--footer section-->
    <?php include ("footer.php");?>
    <!--end of footer section-->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>