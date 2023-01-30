function go()
{
   div5 = document.getElementById("div5");
   container = document.getElementById("container");
   div5.style.display = "block";
   container.style.display = "none";
 
}
function go2()
{

    password = document.getElementById('password').value;
    username = document.getElementById('username').value;
   
   if(username!="admin" && password != "admin@123"){
      
      
      alert("incorrect username or password");
   }
   else{
      
      window.open('https://sirajju.github.io/SaveTech/home.html '_blank');
   }
 
}
