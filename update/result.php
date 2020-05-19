<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orbit Football</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Arvo:700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/maincss.css">
    <script src="../js/all.js"></script>
    <style>
        body{
            margin-top: 10% !important; 
        }
        .card{
            border-radius: 10px !important;
        }
        .card-title{
            border-top-left-radius: 10px !important;
            border-top-right-radius: 10px !important;
        }
        .bg{
            background:rgb(19, 187, 159);
        }
        h2{
            color: white;
        }
        input::placeholder{
            color: rgb(204, 204, 204) !important;
        }
    </style>
</head>
<body>
    <?php
    session_start();

    if (!isset($_SESSION['name'])){
    echo "<script>location.href='login.php'</script>";
    exit();}
    if (isset($_POST['submit'])){
        $home = $_POST['home-team'];
        $away = $_POST['away-team'];
        $hg = $_POST['home-goals'];
        $ag = $_POST['away-goals'];
        $date = $_POST['date'];
        include ("../db.php");
        if ($home !== $away){
            include ("../db.php");
            mysqli_query($connect, "INSERT INTO results (home,hg,away,ag,dt) VALUES ('$home','$hg','$away','$ag','$date') ");

            echo '<div class="alert alert-success cd col-9 mt-5 col-md-6 col-lg-4 mx-auto text-center" role="alert">Result Updloaded Successfully!</div>';
        }else {
            echo '<div class="alert alert-danger cd col-9 mt-5 col-md-6 col-lg-4 mx-auto text-center" role="alert">Please select a different team!</div>';
        }
        mysqli_close($connect);
        header ("refresh:2; url=result.php");
    }
    ?>
    <div class="row">
        <div class="col-9 col-md-6 col-lg-4 mx-auto text-center">
            <div class="card mb-5">
                <div class="bg card-title"><h2 class="py-3">Upload Result</h2></div>
                <form action="result.php"  class="mx-5 my-3"  method="post">
                    <select name="home-team" class="form-control mt-3" required="required">
                        <option value="">Select Home Team</option>
                        <option value="Dragons">Dragons</option>
                        <option value="Eagles">Eagles</option>
                        <option value="Tigers">Tigers</option>
                        <option value="Tornadoes">Tornadoes</option>
                        <option value="Volcanoes">Volcanoes</option>
                        <option value="Warriors">Warriors</option>
                    </select>
                    <select name="away-team" class="form-control mt-3" required="required">
                        <option value="">Select Away Team</option>
                        <option value="Dragons">Dragons</option>
                        <option value="Eagles">Eagles</option>
                        <option value="Tigers">Tigers</option>
                        <option value="Tornadoes">Tornadoes</option>
                        <option value="Volcanoes">Volcanoes</option>
                        <option value="Warriors">Warriors</option>
                    </select>
                    <select name="home-goals" class="form-control mt-3" required="required">
                        <option value="">Select Home Goals</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                    <select name="away-goals" class="form-control mt-3" required="required">
                        <option value="">Select Away Goals</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                    <input type="date" class="form-control mt-3" name="date" required="required">
                    <input type="submit" class="form-control mx-auto my-2 w-75 bg text-white" name="submit" value="Upload" />
                </form>
            </div>
        </div>
    </div>
    </div>
        <!--end of footer section-->
        <script src="../js/jquery-3.4.1.min.js"></script>
        <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
