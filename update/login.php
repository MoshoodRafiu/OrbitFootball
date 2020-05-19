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
    if (isset($_POST['submit'])){
        session_start();
        include ("../db.php");
        $pass = md5($_POST['password']);
        $result = mysqli_query($connect, "SELECT * FROM login WHERE name='".$_POST['name']."' and password='$pass'");
        
        if (mysqli_fetch_assoc($result)){
            $_SESSION['name'] = $_POST['name'];
            echo "<script>location.href='select.php'</script>";
        }else{
            echo '<div class="alert alert-danger cd col-9 mt-5 col-md-6 col-lg-4 mx-auto text-center" role="alert">Invalid Login details!</div>';
        }
    }
    ?>
    <div class="row">
        <div class="col-9 col-md-6 col-lg-4 mx-auto text-center">
            <div class="card mb-5">
                <div class="bg card-title"><h2 class="py-3">Orbit Football</h2></div>
                <form action="login.php"  class="mx-5 my-3"  method="post">
                    <input type="text" class="form-control mt-3" required="required" name="name" placeholder="Username">
                    <input type="password" class="form-control mt-3" required="required" name="password" placeholder="Password">
                    <input type="submit" name="submit" value="Login" class="form-control text-white mx-auto my-2 w-75 bg">
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
