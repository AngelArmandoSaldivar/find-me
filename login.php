<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Inicio Sesión</title>
      <link rel="stylesheet" href="styled.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="container">
         <header>Inicio Sesión</header>
         <div class="progress-bar">
         <div class="form-outer">
            <form method="POST" action="signup.php">
               
               <div class="page">
                  <div class="title">
                     Ingresa tu correo y contraseña
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
                     <button class="submit">Iniciar sesión</button>
                     <!-- <input type="submit" class="submit" name="register" > -->
                  </div>
               </div>
            </form>
        
         </div>
      </div>
      <script src="script.js"></script>
   </body>
</html>