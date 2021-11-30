<?php 
    session_start();
    include 'conection.php';
    $correo = $_SESSION['email'];

    if(!isset($_SESSION['email'])) {
      header("location: login.php");
    } else {
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>Inicio</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300,400,700,400italic%7CJosefin+Sans:400,700,300italic">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
   

    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>  
    <!-- Page-->
    <div class="page">
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-stick-up-clone="false" data-md-stick-up-offset="5px" data-lg-stick-up-offset="5px" data-md-stick-up="true" data-lg-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="index.php">
                      <div class="brand__name"><img class="brand__logo-dark" src="assets/images/FM.png" style="width:110px"/>
                      <span></span></div></a></div>
                </div>
                <?php

                $correo = $_SESSION['email'];
                $query = "SELECT email FROM users WHERE email='$correo'";

                $result = mysqli_query($conection,$query);

                while($row = $result->fetch_assoc()) {
                  if($row["email"] == "") {
                    require('menuAll.php');
                  } else {
                    require('menu.php');
                  }                         
                }
                ?>
              </div>
            </div>
          </nav>
        </div>
      </header>
    
      <section class="section section-md bg-white">
        <div class="shell">
          <div class="range range-50 range-sm-center range-md-left range-md-middle range-md-reverse">
            <div class="cell-sm-6 wow fadeInRightSmall">
                <h3>Código QR de familiar  <?php
                    $correo = $_SESSION['email'];
                    $query = "SELECT name, lastname FROM users WHERE email='$correo'";
                
                    $result = mysqli_query($conection,$query);
                
                    while($row = $result->fetch_assoc()) {
                      echo "<h5>".$row['name']."</h5> ", "<h5>".$row['lastname']."</h5> ";                             
                    }
                ?></h3>
              <div class="thumb-line">
           
              <?php
                    $correo = $_SESSION['email'];
                    $query = "SELECT * FROM users WHERE email='$correo'";
                
                    $result = mysqli_query($conection,$query);
                
                    while($row = $result->fetch_assoc()) {
                        echo "<a href='QR/show.php?id=https://findmed.herokuapp.com/helpme.php?id=".$row["idusers"]."' class='btn btn-md btn-danger btn-block'>Ver QR</a>";                             
                    }
                ?>
                    <!-- <a href="QR/show.php" class="btn btn-md btn-danger btn-block" value="Generar" ></a> -->
                <!-- </form> -->
              </div>
           
              </div>
            </div>
            <div class="cell-sm-6">
                <h3>Contacto de confianza</h3><br>
              <div class="box-width-3">
              <?php
                  $correo = $_SESSION['email'];
                  $query = "SELECT name, lastname FROM contact WHERE emailUser='$correo'";
              
                  $result = mysqli_query($conection,$query);
              
                  while($row = $result->fetch_assoc()) {
                      echo "<h5>".$row['name']."</h5> ", "<h5>".$row['lastname']."</h5> ";                             
                  }
              ?>
                <article class="quote-big wow fadeInLeftSmall" data-wow-delay=".1s">
                 <h4>Email:</h4>  <?php
                    $correo = $_SESSION['email'];
                    $query = "SELECT email FROM contact WHERE emailUser='$correo'";
                
                    $result = mysqli_query($conection,$query);
                
                    while($row = $result->fetch_assoc()) {
                        echo "<h5>".$row['email']."</h5>";                             
                    }
                ?>
                <h4>Telefono Celular:</h4>  <?php
                    $correo = $_SESSION['email'];
                    $query = "SELECT phone FROM contact WHERE emailUser='$correo'";
                
                    $result = mysqli_query($conection,$query);
                
                    while($row = $result->fetch_assoc()) {
                        echo "<h5>+52 ".$row['phone']."</h5>";
                    }
                ?>
                <h4>Edad:</h4>  <?php
                    $correo = $_SESSION['email'];
                    $query = "SELECT age FROM contact WHERE emailUser='$correo'";
                
                    $result = mysqli_query($conection,$query);
                
                    while($row = $result->fetch_assoc()) {
                        echo "<h5>".$row['age']." Años</h5>";                             
                    }
                ?>
                </article>             
            </div>
          </div>
        </div>
      </section>


           

     
      <footer class="footer-centered section bg-gray-darker">
        <div class="shell">
          <div class="range range-sm-center">
            <div class="cell-sm-10 cell-md-8 cell-lg-6">
              <!-- Brand--><a class="brand" href="index.html">
                <div class="brand__name">
                </div><span class="brand__slogan"></span></a>
                    <!-- RD Mailform-->
                    <form class="rd-mailform form_inline" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                      <div class="form__inner">
                        <div class="form-wrap">
                          <input class="form-input" id="subscribe-form-footer-email" type="email" name="email" data-constraints="@Email @Required">
                          <label class="form-label" for="subscribe-form-footer-email">Tu correo electrónico</label>
                        </div>
                        <div class="form-button">
                          <button class="button button-link" type="submit">Suscribete</button>
                        </div>
                      </div>
                    </form>
              <ul class="list-icons list-inline-sm">
                <li><a class="icon icon-sm fa fa-instagram icon-style-camera" href="#"><span></span><span></span><span></span><span></span></a></li>
                <li><a class="icon icon-sm fa fa-facebook icon-style-camera" href="#"><span></span><span></span><span></span><span></span></a></li>
                <li><a class="icon icon-sm fa fa-pinterest icon-style-camera" href="#"><span></span><span></span><span></span><span></span></a></li>
              </ul>
              <!-- Rights-->
              <p class="rights"><span>Findme</span><span>&nbsp;&copy;&nbsp; </span><span class="copyright-year"></span>.&nbsp; <br class="veil-xs">
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/scripts.js"></script>
    <!-- coded by Himic-->
  </body>
</html>

<?php 
}
ob_end_flush();
?>