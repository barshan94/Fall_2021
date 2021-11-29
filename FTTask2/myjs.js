function validateForm() {
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var age = document.getElementById("age").value;
    var password = document.getElementById("password").value;
    if (fname == "" && fname<5) {
      document.getElementById("mytext").innerHTML="Please enter valid name";
      return false;
    }
    if (lname == "" && lname<5) {
        document.getElementById("mytext").innerHTML="Please enter valid name";
        return false;
      }
      if (age == "") {
        document.getElementById("mytext").innerHTML="Please enter age";
        return false;
      }
    if ( password.length < 8) {
      document.getElementById("mytext").innerHTML="Please enter password";
      return false;
    }
  }

    
  
    /*if (document.getElementById("red").checked == false &&  document.getElementById("blue").checked == false)
    {
      document.getElementById("mytext").innerHTML="Please select any radio button";
      return false;
    }*/