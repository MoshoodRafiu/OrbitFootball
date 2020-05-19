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
        $image = $_FILES['img']['name'];
        $tmp = $_FILES['img']['tmp_name'];
        $type = $_FILES['img']['type'];

        include ("../db.php");
        if (($type=="image/jpeg") || ($type=="image/jpg") || ($type=="image/png")){

            move_uploaded_file($tmp, "../images/$image");
            mysqli_query($connect, "INSERT INTO team (team) VALUES ('$image')");
            echo '<div class="alert alert-success cd col-9 mt-5 col-md-6 col-lg-4 mx-auto text-center" role="alert">Uploaded Successfully!</div>';
        }else {
            echo '<div class="alert alert-danger cd col-9 mt-5 col-md-6 col-lg-4 mx-auto text-center" role="alert">Please select an image file!</div>';
        }   
        mysqli_close($connect);
    }
    ?>
    <div class="row">
        <div class="col-9 col-md-6 col-lg-4 mx-auto text-center">
            <div class="card mb-5">
                <div class="bg card-title"><h2 class="py-3">Update team of the week</h2></div>
                <form action="team.php" enctype="multipart/form-data"  class="mx-5 my-3"  method="post">
                    <input type="file" class="form-control mt-3" name="img">
                    <input type="submit" class="form-control mx-auto my-5 w-75 bg text-white" name="submit" value="Update" />
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
