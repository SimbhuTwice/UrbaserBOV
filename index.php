<?php
session_start();
if(!isset($_SESSION['id']))
{
    header("Location:login.php");
}
?>
<?php
include_once 'config.php';
$result = mysqli_query($conn,"SELECT * FROM public_bov_table");
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
  <body>
    <div class="container">
      <div class="row">
        <nav class="navbar col-lg-12 d-flex flex-row margin-auto">
          <div class="col-md-3 navbar-brand-wrapper d-flex justify-content-center">
            <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center">
              <a class="navbar-brand brand-logo" href="index.php"><img src="images/chennai-logo.jpg" alt="logo" /></a>
              <a class="navbar-brand brand-logo" href="index.php"><img src="images/Urbaser-logo.jpg" alt="logo" /></a>
            </div>
          </div>
          <div class="col-md-7 d-flex align-items-center justify-content-end">
            <ul class="navbar-nav mr-lg-2">
              <li class="nav-item nav-profile dropdown">
                <h3 class="nav-profile-name text-center" style="
    color: #151584;
">BATTERY OPERATED VEHICLES GARBAGE<br> COLLECTION BIN COUNTING SYSTEM</h3> </li>
            </ul>
          </div>
          <div class="col-md-2 navbar-brand-wrapper d-flex justify-content-center">
            <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center">
              <a class="navbar-brand brand-logo" href="index.php"><img src="images/posrite-logo.jpg" alt="logo" /></a>
            </div>
          </div>
        </nav>
        <hr> </div>
    </div>
    <div class="container-fluid">
      <div class="row" style="
    border-bottom: 7px solid #151584;
"> </div>
    </div>
    <div class="container py-30" style="
    padding-top: 4%;
">
      <div class="row">
        <div class="col-md-4">
          <iframe src="video.html" width="100%" height="315" style="height:100%;width:100%;" title="Iframe Example"></iframe>
        </div>
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-4">
              <table class="table text-center" cellspacing="0">
                <thead>
                  <tr rowspan="2" style="background:#151584;color: #fff;" class="text-center">
                    <th style="
    height: 75px;
    vertical-align: middle;">Vehicle Number</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
    $query = mysqli_query($conn,"SELECT * FROM public_bov_table ORDER BY id DESC LIMIT 1 ");
    $i = 1;
    while($row = mysqli_fetch_array($query))
    {
    ?>
                    <tr class="text-center">
                      <td style="color: #151584;padding: 5px;height: 38px;" class="bg-lgrey">
                        <h4 style="margin-bottom: 0px;">

<?php echo $row['vehicle_number'];?>
                                 </h4></td>
                                 <?php
$i++;
    }
?>
                      
                    </tr>
                </tbody>
              </table>
              <br>
              <table class="table checkbox-bg-table bg-lgrey">
                <thead>
                  <tr>
                    <th class="bg-lgrey">
                      <h1>
                        <table class="table checkbox-bg-table bg-lgrey">
                            <tbody>
                              <?php
    $query = mysqli_query($conn,"SELECT * FROM public_bov_table ORDER BY id DESC LIMIT 1 ");
    $i = 1;
    while($row = mysqli_fetch_array($query))
    {
    ?>
                              <tr>
                                    <td><div class="green text-center"><span class="checkbox-bg one"><i class="fa fa-remove"><span class="hidden"><?php echo $row['bin_out_counted'];?><?php echo $row['bin_in_counted'];?></span></i></span></div></td>
                                    <td><div class="green text-center"><span class="checkbox-bg two"><i class="fa fa-remove"><span class="hidden"><?php echo $row['bin_out_counted'];?><?php echo $row['bin_in_counted'];?></span></i></span></div></td>
                                    <td><div class="green text-center"><span class="checkbox-bg three"><i class="fa fa-remove"><span class="hidden"><?php echo $row['bin_out_counted'];?><?php echo $row['bin_in_counted'];?></span></i></span></div></td>
                                    <td><div class="green text-center"><span class="checkbox-bg four"><i class="fa fa-remove"><span class="hidden"><?php echo $row['bin_out_counted'];?><?php echo $row['bin_in_counted'];?></span></i></span></div></td>
                                </tr>
                                <tr>
                                   <td><div class="green text-center"><span class="checkbox-bg five"><i class="fa fa-remove"><span class="hidden"><?php echo $row['bin_out_counted'];?><?php echo $row['bin_in_counted'];?></span></i></span></div></td>
                                   <td><div class="green text-center"><span class="checkbox-bg six"><i class="fa fa-remove"><span class="hidden"><?php echo $row['bin_out_counted'];?><?php echo $row['bin_in_counted'];?></span></i></span></div></td>
                                   <td><div class="green text-center"><span class="checkbox-bg seven"><i class="fa fa-remove"><span class="hidden"><?php echo $row['bin_out_counted'];?><?php echo $row['bin_in_counted'];?></span></i></span></div></td>
                                   <td><div class="green text-center"><span class="checkbox-bg eight"><i class="fa fa-remove"><span class="hidden"><?php echo $row['bin_out_counted'];?><?php echo $row['bin_in_counted'];?></span></i></span></div></td>
                                </tr>
                                <?php
$i++;
    }
?>
                            </tbody>
                        </table>
                      </h1>
                      </th>
                    </tr>
                  </thead>
                </table>
            </div>
            <div class="col-md-4">
              <table class="table text-center" cellspacing="0">
                <thead>
                  <tr style="background:#4caf50;color: #fff;" class="text-center">
                    <th colspan="2">March IN</th>
                  </tr>
                  <tr>
                    <th class="in-date">Date</th>
                    <th class="in-time">Time</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
    $query = mysqli_query($conn,"SELECT * FROM public_bov_table ORDER BY id DESC LIMIT 1 ");
    $i = 1;
    while($row = mysqli_fetch_array($query))
    {
    ?>
                  <tr class="text-center" style="height: 38px;">
                    <td class="bg-lgrey green"> <span class=""><?php echo $row['march_in_date'];?>

                           </span> </td>
                    <td class="bg-lgrey green"> <span class="">
                      <?php echo $row['march_in_time'];?>
                    </span> </td>
                  </tr>
                  <?php
$i++;
    }
?>
                </tbody>
              </table>
              <br>
              <table class="table text-center" cellspacing="0">
                <thead>
                  <tr style="background:#4caf50;color: #fff;" class="text-center">
                    <th>March IN Bin Counted</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
    $query = mysqli_query($conn,"SELECT * FROM public_bov_table ORDER BY id DESC LIMIT 1 ");
    $i = 1;
    while($row = mysqli_fetch_array($query))
    {
    ?>
                  <tr class="text-center" style="height: 140px;">
                    <td class="bg-lgrey green p-t-0 p-b-0 border-0">
                      <h1><span class="bin-in"><?php echo $row['bin_in_counted'];?>
                            </span></h1></td>
                  </tr>

                  <tr class="text-center">
                    <td class="bg-lgrey text-right p-t-0 border-top-0"><span class="status status-row">Status &nbsp<i class="fa fa-remove"><span class="hidden"><?php echo $row['bin_in_counted'];?></span></i></span></td>
                  </tr>
                   <?php
$i++;
    }
?>
                </tbody>
              </table>
            </div>
            <div class="col-md-4">
              <table class="table text-center" cellspacing="0">
                <thead>
                  <tr style="background:orange;color: #fff;" class="text-center">
                    <th colspan="2">March OUT</th>
                  </tr>
                  <tr>
                    <th class="out-date">Date</th>
                    <th class="out-time">Time</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
    $query = mysqli_query($conn,"SELECT * FROM public_bov_table ORDER BY id DESC LIMIT 1 ");
    $i = 1;
    while($row = mysqli_fetch_array($query))
    {
    ?>
                  <tr class="text-center" style="height: 38px;">
                    <td class="bg-lgrey orange"> <span class="">
                      <?php echo $row['march_out_date'];?>
                      </span> </td>
                    <td class="bg-lgrey orange"> <span class="">
                      <?php echo $row['march_out_time'];?>
                    </span> </td>
                  </tr>
                  <?php
$i++;
    }
?>
                </tbody>
              </table>
              <br>
              <table class="table text-center" cellspacing="0">
                <thead>
                  <tr style="background:orange;" class="text-center">
                    <th>March OUT Bin Counted</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
    $query = mysqli_query($conn,"SELECT * FROM public_bov_table ORDER BY id DESC LIMIT 1 ");
    $i = 1;
    while($row = mysqli_fetch_array($query))
    {
    ?>
                  <tr style="height: 140px;">
                    <td class="text-center bg-lgrey orange" class="bg-lgrey text-right status p-t-0 border-top-0 border-0">
                      <h1 class=""><span class="bin-out"><?php echo $row['bin_out_counted'];?></span>
                      </h1></td>
                  </tr>
                  <tr class="text-center">
                    <td class="bg-lgrey text-right p-t-0 border-top-0"><span class="status status-row">Status &nbsp<i class="fa fa-remove"><span class="hidden"><?php echo $row['bin_out_counted'];?></span></i></span></td>
                  </tr>
                  <?php
$i++;
    }
?>
                </tbody>
              </table>
            </div>

          </div>

        </div>
      </div>
      <br>
      <br>
      <div class="row table-responsive">
        <table class="table text-center table-data bg-lgrey" cellspacing="0" id="table">
          <thead>
            <tr>
              <th>Vehicle Number</th>
              <th>March IN Date</th>
              <th>Time</th>
              <th>March OUT Date</th>
              <th>Time</th>
              <th>Bin IN Counted</th>
              <th>Bin OUT Counted</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php
    $query = mysqli_query($conn,"SELECT * FROM public_bov_table");
    $i = 1;
    while($row = mysqli_fetch_array($query))
    {

    ?>
              <tr>
                <td>
                  <?php echo $row['vehicle_number'];?>
                </td>
                <td>
                  <?php echo $row['march_in_date'];?>
                </td>
                <td>
                  <?php echo $row['march_in_time'];?>
                </td>
                <td>
                  <?php echo $row['march_out_date'];?>
                </td>
                <td>
                  <?php echo $row['march_out_time'];?>
                </td>
                <td class="bin">
                  <?php echo $row['bin_in_counted'];?>
                </td>
                <td class="bin">
                  <?php echo $row['bin_out_counted'];?>
                </td>
                <td class="bin-status">
                  <span class="hidden">
                  <?php echo $row['bin_out_counted'];?>
                  <?php echo $row['bin_in_counted'];?>
                </span>
                </td>
                <?php
$i++;
    }
?>
              </tr>
          </tbody>
        </table>
      </div>
      <br>
      <br>
      <div class="row">
        <div class="col-md-12">
          <p>Powered by <a href="https://zaprify.com/" target="_blank">Zaprify</a>. Copyright @ 2021. All rights reserved</p>
        </div>
      </div>
    </div>
  </body>
  </html>