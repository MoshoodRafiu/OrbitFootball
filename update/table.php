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
        $team = $_POST["team"]; 
        $won = $_POST["w"];
        $lost = $_POST["l"];
        $draw = $_POST["d"];
        $scored = $_POST["gf"];
        $conceded = $_POST["ga"];
        $mp = $won + $draw + $lost;
        $difference = $scored - $conceded;
        $pts = ($won * 3) + $draw; 

        include ("../db.php");
        mysqli_query($connect, "UPDATE leaguetable SET MP='$mp', W='$won', D='$draw', L='$lost', GF='$scored' , GA='$conceded' , GD='$difference' , Pts='$pts' WHERE Teams='$team' ");

        echo '<div class="alert alert-success cd col-9 mt-5 col-md-6 col-lg-4 mx-auto text-center" role="alert">Table Updated Successfully!</div>';

        mysqli_close($connect);
    }
    ?>

    <div class="row">
        <div class="col-9 col-md-6 col-lg-4 mx-auto text-center">
            <div class="card mb-5">
                <div class="bg card-title"><h2 class="py-3">Update Table</h2></div>
                <form action="table.php"  class="mx-5 my-3"  method="post">
                    <select name="team" class="form-control mt-3" required="required">
                        <option value="">Select Team</option>
                        <option value="Dragons">Dragons</option>
                        <option value="Eagles">Eagles</option>
                        <option value="Tigers">Tigers</option>
                        <option value="Tornadoes">Tornadoes</option>
                        <option value="Volcanoes">Volcanoes</option>
                        <option value="Warriors">Warriors</option>
                    </select>
                    <input type="number" class="form-control mt-3" name="w" required="required" maxlenght="30" placeholder="Matches Won"/>
                    <input type="number" class="form-control mt-3" name="l" required="required" maxlenght="15" placeholder="Matches lost"/>
                    <input type="number" class="form-control mt-3" name="d" required="required" maxlenght="15" placeholder="Matches Drawn"/>
                    <input type="number" class="form-control mt-3" name="gf" required="required" maxlenght="15" placeholder="Total Goals Scored"/>
                    <input type="number" class="form-control mt-3" name="ga" required="required" maxlenght="15" placeholder="Total Goals Conceded"/>
                    <input type="submit" class="form-control mx-auto text-white my-2 w-75 bg" name="submit" value="Update" />
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
