<?php    
     session_start();
     include 'conection.php'; 
?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">


    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>      
    
    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Mis datos personales: </h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                  <ul class="list-icons list-inline-sm">
                    <?php
                        $idUser = $_GET['id'];                         
                         $query = "SELECT * FROM users WHERE idusers='$idUser'";
                     
                         $result = mysqli_query($conection,$query);
                     
                         while($row = $result->fetch_assoc()) {
                             echo "<h5>Nombre(s) y apellido(s): ".$row['name']." ".$row["lastname"]."</h5>";
                             echo "<br></br>";
                         }
                      ?>                     
                    </ul>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                  <ul class="list-icons list-inline-sm">
                    <?php
                        $idUser = $_GET['id'];                         
                         $query = "SELECT * FROM users WHERE idusers='$idUser'";
                     
                         $result = mysqli_query($conection,$query);
                     
                         while($row = $result->fetch_assoc()) {
                             echo "<h5>Email: ".$row['email']."</h5>";
                             echo "<br></br>";
                         }
                      ?>                     
                    </ul>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12" style="flex-start">
                  <ul class="list-icons list-inline-sm">
                    <?php
                        $idUser = $_GET['id'];                         
                         $query = "SELECT * FROM users WHERE idusers='$idUser'";
                     
                         $result = mysqli_query($conection,$query);
                     
                         while($row = $result->fetch_assoc()) {
                             echo "<h5>Telefono celular: ".$row['phone']."</h5>";
                             echo "<br></br>";
                         }
                      ?>                     
                    </ul>
                  </div>
                  <div class="col-lg-12">
                  <ul class="list-icons list-inline-sm">
                    <?php
                        $idUser = $_GET['id'];
                         $correo = $_SESSION['email'];
                         $query = "SELECT * FROM users WHERE idusers='$idUser'";
                     
                         $result = mysqli_query($conection,$query);
                     
                         while($row = $result->fetch_assoc()) {
                             echo "<h5>Edad: ".$row['age']."</h5>";
                         }
                      ?>                     
                    </ul>
                  </div> 
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-4">
            <img src="images/image_profile.jpg" class="img-fluid" alt="">

            <h5 class="text-center" style="margin-top: 15px;">Nombre usuario</h5>
          </div>
        </div>
      </div>
    </div>

    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Contacto de confianza: </h2>
            </div>
          </div>
          <div class="col-md-8">
            <img src="images/image_profile.jpg" class="img-fluid" alt="" style="width:350px">            
          </div>
          <div class="col-md-4">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                  <ul class="list-icons list-inline-sm">
                    <?php
                        $idUser = $_GET['id'];                   
                                                
                        $email = "SELECT email FROM users WHERE idusers='$idUser'";
                        $result = mysqli_query($conection,$email);
                     
                        while($row = $result->fetch_assoc()) {

                            $emailUser = $row['email'];
                            $query ="SELECT * FROM contact WHERE emailUser='$emailUser'";
                            $resultContact = mysqli_query($conection,$query);

                            while($row2 = $resultContact->fetch_assoc()) {
                                echo "<h5>Nombre: ".$row2['name']." ".$row2['lastname']."</h5>";
                                echo "<br></br>";
                            }

                        }
                      ?>                     
                    </ul>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                  <ul class="list-icons list-inline-sm">
                    <?php
                        $idUser = $_GET['id'];                   
                                                
                        $email = "SELECT email FROM users WHERE idusers='$idUser'";
                        $result = mysqli_query($conection,$email);
                     
                        while($row = $result->fetch_assoc()) {

                            $emailUser = $row['email'];
                            $query ="SELECT * FROM contact WHERE emailUser='$emailUser'";
                            $resultContact = mysqli_query($conection,$query);

                            while($row2 = $resultContact->fetch_assoc()) {
                                echo "<h5>Email: ".$row2['email']."</h5>";
                                echo "<br></br>";
                            }

                        }
                      ?>                     
                    </ul>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12" style="flex-start">
                  <ul class="list-icons list-inline-sm">
                    <?php
                        $idUser = $_GET['id'];                   
                                                
                        $email = "SELECT email FROM users WHERE idusers='$idUser'";
                        $result = mysqli_query($conection,$email);
                     
                        while($row = $result->fetch_assoc()) {

                            $emailUser = $row['email'];
                            $query ="SELECT * FROM contact WHERE emailUser='$emailUser'";
                            $resultContact = mysqli_query($conection,$query);

                            while($row2 = $resultContact->fetch_assoc()) {
                                echo "<h5>Telefono Celular: ".$row2['phone']."</h5>";
                                echo "<br></br>";
                            }

                        }
                      ?>                     
                    </ul>
                  </div>
                  <div class="col-lg-12">
                  <ul class="list-icons list-inline-sm">
                    <?php
                        $idUser = $_GET['id'];                   
                                                
                        $email = "SELECT email FROM users WHERE idusers='$idUser'";
                        $result = mysqli_query($conection,$email);
                     
                        while($row = $result->fetch_assoc()) {

                            $emailUser = $row['email'];
                            $query ="SELECT * FROM contact WHERE emailUser='$emailUser'";
                            $resultContact = mysqli_query($conection,$query);

                            while($row2 = $resultContact->fetch_assoc()) {
                                echo "<h5>Edad: ".$row2['age']."</h5>";
                            }

                        }
                      ?>                     
                    </ul>
                  </div> 
                </div>
              </form>
            </div>
          </div>          
        </div>
      </div>
    </div>


    <div class="find-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Estancia donde me encuentro.</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div id="map" style="height: 400px; width:100%; "></div>
                <script>
                    //19.25650738719049, -99.53847986090585
                    function initMap() {
                        var coordenadas = {lat: 19.2563083, lng: -99.5384743};
                        var mapa = new google.maps.Map(document.getElementById("map"), {zoom:20, center: coordenadas});
                        var marker = new google.maps.Marker({position: coordenadas, map:mapa});
                    }
                </script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC36bGPspEJEk79AVJmUNWXcjMB7AlYtdg&callback=initMap" async defer></script>                
            </div>
          </div>  
          <br><br><br><br><br>    
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>

</html>
