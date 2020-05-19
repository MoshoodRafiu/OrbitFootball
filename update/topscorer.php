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
        $name = $_POST['name'];
        $goals = $_POST['goals'];
        $team = $_POST['team'];

        include ("../db.php");

        $member = mysqli_query($connect, "SELECT players from scorer WHERE players='$name' and team='$team'");
        $count = mysqli_num_rows($member);
        if ($count !== 0){
            mysqli_query($connect, "UPDATE scorer SET goals='$goals'  WHERE players='$name' and team='$team'");
        } else{
            mysqli_query($connect, "INSERT INTO scorer (players,team,goals) VALUES ('$name','$team','$goals') ");
        }

        mysqli_close($connect);
        echo '<div class="alert alert-success cd col-9 mt-5 col-md-6 col-lg-4 mx-auto text-center" role="alert">Top Scorers Updated Successfully!</div>';
        header ("refresh:2; url=topscorer.php");
    }
    ?>
    <div class="row">
        <div class="col-9 col-md-6 col-lg-4 mx-auto text-center">
            <div class="card mb-5">
                <div class="bg card-title"><h2 class="py-3">Update TopScorers</h2></div>
                <form action="topscorer.php"  class="mx-5 my-3"  method="post">
                    <select name="team" class="form-control mt-3" required="required">
                        <option value="">Select Team</option>
                        <option value="Dragons">Dragons</option>
                        <option value="Eagles">Eagles</option>
                        <option value="Tigers">Tigers</option>
                        <option value="Tornadoes">Tornadoes</option>
                        <option value="Volcanoes">Volcanoes</option>
                        <option value="Warriors">Warriors</option>
                    </select>
                    <input type="text" class="form-control mt-3" name="name" required="required" maxlenght="30" placeholder="Player Name"/>
                    <input type="number" class="form-control mt-3" name="goals" required="required" maxlenght="15" placeholder="No. of goals"/>
                    <input type="submit" class="form-control mx-auto my-2 w-75 bg text-white" name="submit" value="Update" />
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
