<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Registro Usuario</title>
      <link rel="stylesheet" href="styles.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="container">
         <header>Registro</header>
         <div class="progress-bar">
            <div class="step">
               <p>
                  Nombre
               </p>
               <div class="bullet">
                  <span>1</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Contact
               </p>
               <div class="bullet">
                  <span>2</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Birth
               </p>
               <div class="bullet">
                  <span>3</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Submit
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
                     Basic Info:
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
                     <button class="firstNext next">Next</button>
                  </div>
               </div>
               <div class="page">
                  <div class="title">
                     Contact Info:
                  </div>
                  <div class="field">
                     <div class="label">
                        Edad
                     </div>
                     <input type="number" name="age">
                  </div>
                  <div class="field">
                     <div class="label">
                        Phone Number
                     </div>
                     <input type="Number">
                  </div>
                  <div class="field btns">
                     <button class="prev-1 prev">Previous</button>
                     <button class="next-1 next">Next</button>
                  </div>
               </div>
               <div class="page">
                  <div class="title">
                     Date of Birth:
                  </div>
                  <div class="field">
                     <div class="label">
                        Date
                     </div>
                     <input type="text">
                  </div>
                  <div class="field">
                     <div class="label">
                        Gender
                     </div>
                     <select>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                     </select>
                  </div>
                  <div class="field btns">
                     <button class="prev-2 prev">Previous</button>
                     <button class="next-2 next">Next</button>
                  </div>
               </div>
               <div class="page">
                  <div class="title">
                     Login Details:
                  </div>
                  <div class="field">
                     <div class="label">
                        Username
                     </div>
                     <input type="text">
                  </div>
                  <div class="field">
                     <div class="label">
                        Password
                     </div>
                     <input type="password">
                  </div>
                  <div class="field btns">
                     <button class="prev-3 prev">Previous</button>
                     <!-- <button class="submit">Submit</button> -->
                     <input type="submit" class="submit" name="register" >
                  </div>
               </div>
            </form>
            <?php 
                include("registrar.php")
            ?>
         </div>
      </div>
      <script src="script.js"></script>
   </body>
</html>