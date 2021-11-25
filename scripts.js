const slidePage = document.querySelector(".slide-page");
const nextBtnFirst = document.querySelector(".firstNext");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const nextBtnThird = document.querySelector(".next-2");
const prevBtnFourth = document.querySelector(".prev-3");
const submitBtn = document.querySelector(".submit");
const progressText = document.querySelectorAll(".step p");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");
let current = 1;


//VARIABLES
const nombre=document.getElementById("name")
const last=document.getElementById("last")
const cel=document.getElementById("cel")
const edad=document.getElementById("edad")
const fecha=document.getElementById("fecha")
const email=document.getElementById("correo")
const password=document.getElementById("password")
const form=document.getElementById("form")
const parrafo=document.getElementById("warnings")


nextBtnFirst.addEventListener("click", function(event){
  event.preventDefault();

  let errName = document.getElementById("errorName");
  let errLastName = document.getElementById("errorLastName");  
  let errPhone = document.getElementById("errPhone");  
  let errAge = document.getElementById("errAge");  
  let errDate = document.getElementById("errDate");
  let errGender = document.getElementById("errGender");
  let errEmail = document.getElementById("errEmail");
  let errPassword = document.getElementById("errPassword");

  console.log(nombre.value);  

  if(nombre.value === ''){  
    errName.innerHTML = "<h4 style=color:red>Nombre requerido!</h4>";
  } else if(nombre.value.length > 0 && nombre.value.length < 3) {
    errName.innerHTML = "<h4 style=color:red>Nombre demasiado corto!</h4>";
  } else if(nombre.value.length >= 3) {
    errName.innerHTML = "";
  }
  if(last.value === '') {
    errLastName.innerHTML = "<h4 style=color:red>Apellido requerido!</h4>";
  } else if(last.value.length > 0 && last.value.length < 3) {
    errLastName.innerHTML = "<h4 style=color:red>Apellido demasiado corto!</h4>";
  } else if(last.value.length >=3) {
    errLastName.innerHTML = "";
  }
  if(nombre.value.length >= 3 && last.value.length >=3) {
    slidePage.style.marginLeft = "-25%";
    bullet[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    progressText[current - 1].classList.add("active");
    current += 1;
  }
});


nextBtnSec.addEventListener("click", function(event){
  event.preventDefault();
  if(cel.value === ''){
    errPhone.innerHTML = "<h4 style=color:red>Telefono requerido!</h4>";
  }
  else if(cel.value.length > 0 && cel.value.length < 10 ){
    errPhone.innerHTML = "<h4 style=color:red>Telefono demasiado corto!</h4>";
  }
  else if(cel.value.length >= 11){
    errPhone.innerHTML = "<h4 style=color:red>Telefono demasiado largo.!</h4>";
  } else if(cel.value.length > 0 && cel.value.length <= 10){
    errPhone.innerHTML = "";
  }

  if(edad.value == ''){
    errAge.innerHTML = "<h4 style=color:red>Edad requerida!</h4>";
  } else if(edad.value <= 15){
    errAge.innerHTML = "<h4 style=color:red>Debes tener más de 15 años!</h4>";
  } else if(edad.value >= 100){
    errAge.innerHTML = "<h4 style=color:red>Edad excedida!</h4>";
  } else if(edad.value > 0 && edad.value.length <=100) {
    errAge.innerHTML = "";
  } 
  if(cel.value.length === 10 && edad.value > 0 && edad.value <=100) {
    slidePage.style.marginLeft = "-50%";
    bullet[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    progressText[current - 1].classList.add("active");
    current += 1;
  }
});



nextBtnThird.addEventListener("click", function(event){
  event.preventDefault();
  if(fecha.value==''){
    errDate.innerHTML = "<h4 style=color:red>Fecha de nacimiento requerida!</h4>";
  }
  else if(fecha.value > "2006-01-01"){
    errDate.innerHTML = "<h4 style=color:red>Debes ser mayor de edad!</h4>";
  }
  else if(fecha.value<"1930-01-01"){
    errDate.innerHTML = "<h4 style=color:red>Ingresar una fecha mayor!</h4>";
  }else if(fecha.value < "2006-01-01" && fecha.value > "1930-01-01"){
    errDate.innerHTML = "";
  }
  if(fecha.value < "2006-01-01" && fecha.value > "1930-01-01"){
    slidePage.style.marginLeft = "-75%";
    bullet[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    progressText[current - 1].classList.add("active");
    current += 1;
  }
});
 
//VALIDACION EMAIL
let  emailRegex=/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
  console.log(emailRegex)


//BOTON PARA TERMINAR EL REGISTRO
submitBtn.addEventListener("click", function(){
  
  if(emailRegex.test(email.value)==false){
    errEmail.innerHTML = "<h4 style=color:red>Tu correo debe llevar @ y .com, .mx, etc!</h4>";
  }else if(email.value==''){
    errEmail.innerHTML = "<h4 style=color:red>Campo Email requerido!</h4>";
  }

  if(password.value==''){
   errPassword.innerHTML = "<h4 style=color:red>Campo Contraseña requerido!</h4>";
  }else if(password.value.length < 8){    
    errPassword.innerHTML = "<h4 style=color:red>Tu contraseña debe tener como minimo 8 caracteres, incluyendo mayusculas y minusculas!</h4>";
  }
  // if(emailRegex.test(email.value) == true && email.value.length > 0  && password.value.length <= 8 ) {
  //   window.location.href = "login.php";
  // }
});

//BOTONES PARA REGRESAR 

prevBtnSec.addEventListener("click", function(event){
  event.preventDefault();
 slidePage.style.marginLeft = "0%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});


prevBtnThird.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-25%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});


prevBtnFourth.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-50%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});