function check(){
    pass = document.getElementById("pass").value;
    confirmpass = document.getElementById("confirmpass").value;
    btn = document.getElementById("btn");
    if(pass!=confirmpass){

     alert("Password didn't macth");
     btn.disabled = true;
    }
    else {

        btn.disabled = false;
    }
}
function go()
{
   div5 = document.getElementById("div5");
   container = document.getElementById("container");
   div5.style.display = "block";
   container.style.display = "none";
 
}