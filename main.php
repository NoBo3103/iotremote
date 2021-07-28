<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>IOT based Remote Access</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container-fluid">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.html"><span>IOT Remote</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      

    </div>
  </header><!-- End #header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1>Home Automation Using IOT</h1>
      <h2>Check your Home Appliances.</h2>
      <style>
        table, th, td {
          border: 1px solid black;
          border-collapse: collapse;
        }
        th, td {
          padding: 15px;
        }
        </style>
        <?php
          if(array_key_exists('room1on', $_POST))
          {
            $file = fopen("room1.txt","w");
            echo fwrite($file,"1");
            fclose($file);
          }
          if(array_key_exists('room1off', $_POST))
          {
            $file = fopen("room1.txt","w");
            echo fwrite($file,"0");
            fclose($file);
          }
          if(array_key_exists('room2on', $_POST))
          {
            $file = fopen("room2.txt","w");
            echo fwrite($file,"1");
            fclose($file);
          }
          if(array_key_exists('room2off', $_POST))
          {
            $file = fopen("room2.txt","w");
            echo fwrite($file,"0");
            fclose($file);
          }
          if(array_key_exists('room3on', $_POST))
          {
            $file = fopen("room3.txt","w");
            echo fwrite($file,"1");
            fclose($file);
          }
          if(array_key_exists('room3off', $_POST))
          {
            $file = fopen("room3.txt","w");
            echo fwrite($file,"0");
            fclose($file);
          }
          if(array_key_exists('room4on', $_POST))
          {
            $file = fopen("room4.txt","w");
            echo fwrite($file,"1");
            fclose($file);
          }
          if(array_key_exists('room4off', $_POST))
          {
            $file = fopen("room4.txt","w");
            echo fwrite($file,"0");
            fclose($file);
          }
          ?>
      <table style="width: 70%">
        <tr>
          <th style="background: powderblue;">
            ROOM 1
          </th>
          
          <th style="background: powderblue;">
            ROOM 2
          </th>
          
          <th style="background: powderblue;">
            ROOM 3
          </th>
          
          <th style="background: powderblue;">
            ROOM 4
          </th>
        </tr>
        <tr>
          <td>
            <form method="post"> 
              <input type="submit" name="room1on"
                      class="button" value="ON" > 
                
              <input type="submit" name="room1off"
                      class="button" value="OFF" > 
          </form> 
          </td>

          <td>
          <form method="post"> 
              <input type="submit" name="room2on"
                      class="button" value="ON" > 
                
              <input type="submit" name="room2off"
                      class="button" value="OFF" > 
          </form> 
          </td>

          <td>
          <form method="post"> 
              <input type="submit" name="room3on"
                      class="button" value="ON" > 
                
              <input type="submit" name="room3off"
                      class="button" value="OFF" > 
          </form> 
          </td>

          <td>
          <form method="post"> 
              <input type="submit" name="room4on"
                      class="button" value="ON" > 
                
              <input type="submit" name="room4off"
                      class="button" value="OFF" > 
          </form> 
          </td>
        </tr>
        <tr>
          <td style="background-color: aquamarine;">
            Current Status:
            <?php 
            $file = fopen("room1.txt","r");
            if(fgetc($file) == 1)
            {
              echo "<span style='color: green;'><b>ON</b></span>";
            }
            else
            {
              echo "<span style='color: red;'><b>OFF</b></span>";
            }
            fclose($file);
            ?>
          </td>

          <td style="background-color: aquamarine;">
            Current Status:
            <?php 
            $file = fopen("room2.txt","r");
            if(fgetc($file) == 1)
            {
              echo "<span style='color: green;'><b>ON</b></span>";
            }
            else
            {
              echo "<span style='color: red;'><b>OFF</b></span>";
            }
            fclose($file);
            ?>
          </td>

          <td style="background-color: aquamarine;">
            Current Status:
            <?php 
            $file = fopen("room3.txt","r");
            if(fgetc($file) == 1)
            {
              echo "<span style='color: green;'><b>ON</b></span>";
            }
            else
            {
              echo "<span style='color: red;'><b>OFF</b></span>";
            }
            fclose($file);
            ?>
          </td>

          <td style="background-color: aquamarine;">
            Current Status:
            <?php 
            $file = fopen("room4.txt","r");
            if(fgetc($file) == 1)
            {
              echo "<span style='color: green;'><b>ON</b></span>";
            }
            else
            {
              echo "<span style='color: red;'><b>OFF</b></span>";
            }
            fclose($file);
            ?>
          </td>
        </tr>
      </table>
    </div>
  </section><!-- End Hero -->



  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
     <!-- <div class="copyright">
        &copy; Copyright <strong><span>WeBuild</span></strong>. All Rights Reserved
      </div>-->
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-coming-soon-template-countdwon/ -->
        Designed with &hearts;
      </div>
    </div>
  </footer><!-- End #footer -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-countdown/jquery.countdown.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>