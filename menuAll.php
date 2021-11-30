 <!-- RD Navbar Nav-->
 <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-element">
                    <ul class="list-icons list-inline-sm">
                      <?php
                         $correo = $_SESSION['email'];
                         $query = "SELECT name, lastname FROM users WHERE email='$correo'";
                     
                         $result = mysqli_query($conection,$query);
                     
                         while($row = $result->fetch_assoc()) {
                             echo "<h5>".$row['name']."</h5> ", "<h5>".$row['lastname']."</h5> ";                             
                         }
                      ?>
                    </ul>
                  </div>
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="active"><a href="userView.php">Inicio<span></span><span></span><span></span><span></span></a>
                    </li>
                    </li>                
                    <li><a href="contact.php">Contacto de confianza<span></span><span></span><span></span><span></span></a>
                    <li><a href="cierreSesion.php">Salir<span></span><span></span><span></span><span></span></a>
                    </li>
                  </ul>
                </div>