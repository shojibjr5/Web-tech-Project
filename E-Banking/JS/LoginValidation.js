function validateForm() {
    var password = document.getElementById("password").value;
    var user = document.getElementById("username").value;
    if(user=="")
    {
      document.getElementById("errorUser").innerHTML="Username  Required !!";
      //return false; 
    }
    else
    {
      document.getElementById("errorUser").innerHTML="";
     
    }
  
   if (password.length=="" ) 
   {
     document.getElementById("errorpass").innerHTML="Password Required!!";
      return false;
    }
    else 
    {
      document.getElementById("errorpass").innerHTML="";
    }

    if (password.length<4 ) 
   {
     document.getElementById("errorpass").innerHTML="Password must be more than 4 character";
      return false;
    }
    else 
    {
      document.getElementById("errorpass").innerHTML="";
    }
  
  
  }
  