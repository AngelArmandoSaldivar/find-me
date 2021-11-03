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
         <div class="progress-bar">
            <div class="step">
               <p>
                  Paso 1
               </p>
               <div class="bullet">
                  <span>1</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Paso 2
               </p>
               <div class="bullet">
                  <span>2</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                    Paso 3
               </p>
               <div class="bullet">
                  <span>3</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Paso 4
               </p>
               <div class="bullet">
                  <span>4</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
         </div>
         <div class="form-outer">
            <form method="POST">
               <div class="page slide-page">
                  <div class="title">
                     Información basica:
                  </div>
                  <div class="field">
                     <div class="label">
                        Nombre(s)
                     </div>
                     <input type="text" name="name">
                  </div>
                  <div class="field">
                     <div class="label">
                        Apellidos
                     </div>
                     <input type="text" name="lastname">
                  </div>
                  <div class="field">
                     <button class="firstNext next">Siguiente</button>
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
                     <input type="phone" min="0" max="200" name="phone">
                  </div>

                  <div class="field">
                     <div class="label">
                        Edad
                     </div>
                     <input type="number" name="age">
                  </div>
                  
                  <div class="field btns">
                     <button class="prev-1 prev">Regresar</button>
                     <button class="next-1 next">Siguiente</button>
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
                     <input type="text" placeholder="d/m/y">
                  </div>
                  <div class="field">
                     <div class="label">
                        Género
                     </div>
                     <select>
                        <option>Masculino</option>
                        <option>Femenino</option>
                        <option>Otro</option>
                     </select>
                  </div>
                  <div class="field btns">
                     <button class="prev-2 prev">Regresar</button>
                     <button class="next-2 next">Siguiente</button>
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
                     <input type="text" name="email">
                  </div>
                  <div class="field">
                     <div class="label">
                        Contraseña
                     </div>
                     <input type="password" name="password">
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
   </body>
</html>