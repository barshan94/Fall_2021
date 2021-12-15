function myajaxfunc()
{
  var username=document.getElementById("lname").value;


var xhttp=new XMLHttpRequest();
xhttp.onreadystatechange=function()
{
  if(this.readyState == 4 && this.status == 200)
  {
    document.getElementById("message").innerHTML=this.responseText;
  }
};
xhttp.open("GET", "/Service_provider/control/formhandle.php?lname="+username,true);
xhttp.send();


}









function validateForm() {
  var fname = document.getElementById("fname").value;
  var lname = document.getElementById("lname").value;
  var age = document.getElementById("age").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var mobile = document.getElementById("mobile").value;
  var mailformat = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
  var res= mailformat.test(email);





  if (fname == "") {
    document.getElementById("mytext").innerHTML="Please enter your name properly";
    return false;
  }
  if ( fname.length < 5) {
    document.getElementById("mytext").innerHTML="Please enter your name properly";
    return false;
  }



  if (lname == "") {
    document.getElementById("mytext").innerHTML="Please enter your username properly";
    return false;
  }
  if ( lname.length < 5) {
    document.getElementById("mytext").innerHTML="Please enter your username properly";
    return false;
  }





  if ( age < 16) {
    document.getElementById("mytext").innerHTML="Your age does not fulfill the minimum requirement";
    return false;
  }
  if ( age > 65) {
    document.getElementById("mytext").innerHTML="Your age exceds the age requirement";
    return false;
  }

  
  if (email == "") {
    document.getElementById("mytext").innerHTML="Please enter email properly";
    return false;
  }
  if(!res)
  {
    document.getElementById("mytext").innerHTML="Invalid email format";
    return false;
  }



  if ( password.length < 5) {
    document.getElementById("mytext").innerHTML="Please enter password";
    return false;
  }

  if (password == "") {
    document.getElementById("mytext").innerHTML="Please enter password";
    return false;
  }






  if (mobile == "") {
    document.getElementById("mytext").innerHTML="Please enter your Number properly 11 digit";
    return false;
  }
  if ( mobile.length < 11) {
    document.getElementById("mytext").innerHTML="Please enter your Number properly 11 digit";
    return false;
  }
  

}