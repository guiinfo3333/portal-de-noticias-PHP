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