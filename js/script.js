/*script do slide*/

var slideIndex = 1;

showSlide(slideIndex);


function plusSlides(n){

showSlide(slideIndex += n);

}


function currentSlide(n) {

showSlide(slideIndex = n);

}


function showSlide(n){

var i;

var slides = document.getElementsByClassName("myslides");

var dots = document.getElementsByClassName("dots");

if (n > slides.length) { slideIndex = 1};

if (n < 1) { slideIndex = slides.length};

for (i=0;i<slides.length;i++) {

slides[i].style.display = "none";

};

for (i=0;i<dots.length;i++) {

dots[i].className = dots[i].className.replace(" active","");

};

slides[slideIndex-1].style.display = "block";

dots[slideIndex-1].className += " active";

}
/*script do slide*/
/*script do menu*/
/*
 function abre(){
  a=document.getElementById("cursos");
 a.style.width="200px";
 }
  function abresec(){
   document.getElementById("principal").style.transform = "translateX(300px)";
  }
  */
  fut=  document.getElementById("futebol");
  nat=  document.getElementById("natacao");
  lut=  document.getElementById("luta");
  bas=document.getElementById("basquete");
  prin=document.getElementById("principal");
  icon=document.getElementsByClassName("menu-icon");
  home=ducument.getElementById("home");

  function mouseicone(){
  	//var x = document.getElementsByClassName("example");
  	prin.style.transform = "translateX(300px)";
  }

function sairmouseincone(){
 prin.style.transform = "translateX(-300px)";

  }
  function passarmouseprincipal(){
  	 	prin.style.transform = "translateX(300px)";
  }
   function tirarpassarmouseprincipal(){
      prin.style.transform = "translateX(-300px)";

  }
 
  function pegaid(a){
 
//prin.style.transform = "translateX(300px)"; alert(a);


if(a=="nat"){

nat.style.display="block";
fut.style.display="none";
bas.style.display="none";
lut.style.display="none";
}

if(a=="fut"){

fut.style.display="block";
nat.style.display="none";
bas.style.display="none";
lut.style.display="none";
}
if(a=="bas"){
bas.style.display="block";
fut.style.display="none";
nat.style.display="none";
lut.style.display="none";

}
if(a=="lut"){
lut.style.display="block";
bas.style.display="none";
fut.style.display="none";
nat.style.display="none";
}
  }

function permaneceprin(){
prin.style.transform = "translateX(300px)";
}
function saisecun(){
fut.style.display="none";
nat.style.display="none";
bas.style.display="none";
lut.style.display="none";
}

/*script para fazer login e adm*/
function abreaces(){
 a= document.getElementById("sessaologin");
a.style.display ="block";
}
function saices(){
 a= document.getElementById("sessaologin");
a.style.display ="none";
}

/*script para fazer login e adm*/

 /*script do menu*/


