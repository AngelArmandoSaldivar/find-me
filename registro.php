<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Registro Usuario</title>
      <link rel="stylesheet" href="styled.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="container">
         <header>Registro</header>

         <div class="progress-bar" >
            <div class="step" i>
               <p id="paso">
                  Paso 1
               </p>
               <div class="bullet" id="numeroB">
                  <span>1</span>
               </div>
               <div class="check fas fa-check" id="check"></div>
            </div>
            <div class="step">
               <p  id="paso">
                  Paso 2
               </p>
               <div class="bullet" id="numeroB">
                  <span>2</span>
               </div>
               <div class="check fas fa-check"  id="check"></div>
            </div>
            <div class="step">
               <p  id="paso">
                    Paso 3
               </p>
               <div class="bullet" id="numeroB">
                  <span>3</span>
               </div>
               <div class="check fas fa-check"  id="check"></div>
            </div>
            <div class="step">
               <p  id="paso">
                  Paso 4
               </p>
               <div class="bullet" id="numeroB">
                  <span>4</span>
               </div>
               <div class="check fas fa-check"  id="check"></div>
            </div>
         </div>
         <div class="form-outer">

            <form method="POST" id="form">
               <div class="page slide-page" id="eventos">
                  <div class="title">
                     Información basica:
                  </div>


                  <div class="field">
                     <div class="label">
                        Nombre(s)
                     </div>
                     <input type="text" name="name" id="name" placeholder="ingresa tu nombre" required/>                    
                  </div>
                  <div id="errorName" style="font-size:15px"></div>


                  <div class="field">
                     <div class="label">
                        Apellidos
                     </div>
                     <input type="text" name="lastname"id="last" placeholder="ingresa tus apellidos" required>
                  </div>
                  <div id="errorLastName"></div>


                  <div class="field">
                     <button class="firstNext next" id="boton1" >Siguiente</button>
                  </div>
               </div>

               <div class="page">
                  <div class="title">
                     Información de contacto:
                  </div>

                  <div class="field">
                     <div class="label">
                        Telefono Celular
                     </div>
                     <input type="phone" id="cel" min="0" max="200" name="phone" placeholder="XX XXXX XX XX">
                  </div>
                  <div id="errPhone"></div>

                  <div class="field">
                     <div class="label">
                        Edad
                     </div>
                     <input type="number" id="edad" name="age" min="15" max="90" placeholder="Ingresa tu edad">
                  </div>
                  <div id="errAge"></div>
                  
                  <div class="field btns">
                     <button class="prev-1 prev">Regresar</button>
                     <button class="next-1 next"  id="boton2">Siguiente</button>
                  </div>
               </div>
               <div class="page">
                  <div class="title">
                     Fecha de nacimiento
                  </div>
                  <div class="field">
                     <div class="label">
                        Fecha
                     </div>
                     <input type="date" id="fecha" min="1935-01-01" max="2006-01-01" placeholder="dd/mm/yyyy">
                  </div>
                  <div id="errDate"></div>

                  <div class="field">
                     <div class="label">
                        Género
                     </div>
                     <div id="errGender"></div>

                     <select>
                        <option >Masculino</option>
                        <option>Femenino</option>
                        <option>Otro</option>
                     </select>
                  </div>
                  <div class="field btns">
                     <button class="prev-2 prev">Regresar</button>
                     <button class="next-2 next" id="boton3">Siguiente</button>
                  </div>
               </div>
               <div class="page">
                  <div class="title">
                     Detalles de Inicio Sesión
                  </div>

                  <div class="field">
                     <div class="label">
                        Correo Electrónico
                     </div>
                     <input type="email" name="email" id="correo" require>
                  </div>
                  <div id="errEmail"></div>

                  <div class="field">
                     <div class="label">
                        Contraseña
                     </div>
                     <input type="password" name="password" id="password" autocomplete="off" require>
                  </div>
                  <div id="errPassword"></div>

                  <div>
                    <h6>Debe de contar con al menos 8 caracteres entre mayusculas y minusculas</h6>
                  </div>

                  <div class="field btns">
                     <button class="prev-3 prev">Regresar</button>
                     <button class="submit" type="submit" name="register">Registrarme</button>
                     <!-- <input type="submit" class="submit" name="register" > -->
                  </div>
               </div>
            </form>

              <?php 
                include("registrar.php")
            ?>
         </div>
      </div>
      <script src="scripts.js"></script>
       <script src="validacion.js"></script>
   </body>
</html>