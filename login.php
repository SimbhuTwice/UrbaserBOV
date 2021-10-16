<?php
session_start();
include_once 'config.php';
if(isset($_POST['submit']))
{

$query = "SELECT * FROM login WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
$num = mysqli_num_rows($result);
if($num == 1) 
{
$_SESSION["id"] = $row['id'];
$_SESSION["username"] = $row['username'];
header("Location:index.php");
} 
else {
$message = "Invalid Userid or Password!";
}
}
?>
    <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Urbaser Sumeet</title>
    <link rel="shortcut icon" href="images/Urbaser-logo.jpg"> </head>
    <!-- base:css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="fix-menu">
    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="col-lg-4 col-md-4 login-box" style="margin:auto;">
                <div class="col-lg-12 login-key">
                    <div class="login-logo-image gr-bg">
                <img src="images/Posrite-logo-fly.png" alt="branding logo" width="100%">
            </div>
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form method="POST">
                            <div class="form-group">
                                <label class="form-control-label">USERNAME</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" name="password" class="form-control" i>
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <input type="submit" class="login btn btn-outline-primary" name="submit" value="LOGIN"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>
    </div>

        <!-- end of container-fluid -->
    </section>
    
</body>

</html>
