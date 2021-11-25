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
  
  if(nombre.value==''){
   alert("el nombre esta vacio")
  }
  else if(nombre.value.length<4 ){
  alert("nombre demasiado corto")
  }
 else  if(last.value==''){
   alert("el apellido esta vacio")
  }
  else if(last.value.length<4){
 alert('alert demasiado pequeño')
  }
  else{
    console.log("estoy lleno")
  slidePage.style.marginLeft = "-25%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
  }
});


nextBtnSec.addEventListener("click", function(event){
  event.preventDefault();
  
  if(cel.value==''){
   alert("el telefono esta vacio")
  }
  else if(cel.value.length<10 ){
  alert("faltan numero a su telefono")
  }
  else if(cel.value>=11){
    alert("son demasiados numeros")
  }
 else  if(edad.value==''){
   alert("ingresa tu edad")
  }
   else if(edad.value<=5){
 alert('debes de tener mas de 15 años')

  }
   else if(edad.value>=100){
 alert('excendente de edad')

    } else{
      console.log("logrado")
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
      alert("ingresa una fecha")
  }
  else if(fecha.value>"2006-01-01"){
    alert("ingresa una fecha menor a la elegida")
  }
    else if(fecha.value<"1930-01-01"){
    alert("ingresa una fecha mayor a la elegida")
  }else{
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
    alert('tu correo debe de llevar @ y .com, .mx, etc')
  }else if(email.value==''){
    alert("ingresa un valor al campo correo")
  }

  else if(password.value==''){
    alert("ingresa un valor a la contraseña")
  }else if(password.value.length<8){
    alert("Tu contraseña debe tener como minimo 8 caracteres, incluyendo mayusculas y minusculas")
  }else{
       window.location.href = "login.php";
  }  
 
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