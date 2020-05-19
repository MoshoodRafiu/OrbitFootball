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
        $title = $_POST["title"];
        $title = str_replace("'", "''", $title);
        $body = $_POST["body"];
        $body = str_replace("'","''", $body);
        $image = $_FILES['img']['name'];
        $tmp = $_FILES['img']['tmp_name'];
        $type = $_FILES['img']['type'];

        include ("../db.php");
        if ($image !== ""){
            if (($type=="image/jpeg") || ($type=="image/jpg") || ($type=="image/png")){
                move_uploaded_file($tmp, "../images/$image");
                mysqli_query($connect, "INSERT INTO news (title, newsdsp, mainnews, img) VALUES ('$title','$body','$body','$image')");
                echo '<div class="alert alert-success cd col-9 mt-5 col-md-6 col-lg-4 mx-auto text-center" role="alert">News Uploaded Successfully!</div>';
            }else {
                echo '<div class="alert alert-danger cd col-9 mt-5 col-md-6 col-lg-4 mx-auto text-center" role="alert">Please select an image file!</div>';
            }    
        } else {
            mysqli_query($connect, "INSERT INTO news (title, newsdsp, mainnews, img) VALUES ('$title','$body','$body','$image')");
            echo '<div class="alert alert-success cd col-9 mt-5 col-md-6 col-lg-4 mx-auto text-center" role="alert">News Updloaded Successfully!</div>';
        }
        mysqli_close($connect);
    }
   
    ?>
    <div class="row">
        <div class="col-10 col-md-8 col-lg-6 mx-auto text-center">
            <div class="card mb-5">
                <div class="bg card-title"><h2 class="py-3">Upload News</h2></div>
                <form action="news.php" enctype="multipart/form-data"  class="mx-5 my-3"  method="post">
                    <textarea name="title" class="form-control mt-3" required="required" placeholder="News Title"></textarea>
                    <textarea name="body" class="form-control mt-3" rows="7" required="required" placeholder="News Body"></textarea>
                    <input type="file" class="form-control mt-3" name="img">
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