function changeView() {
  var signinBox = document.getElementById("signInBox");
  var signupBox = document.getElementById("signUpBox");

  signinBox.classList.toggle("d-none");
  signupBox.classList.toggle("d-none");
}

function signUp() {
  var fname = document.getElementById("fname");
  var lname = document.getElementById("lname");
  var email = document.getElementById("email");
  var uname = document.getElementById("uname");
  var password = document.getElementById("password");
  var mobile = document.getElementById("mobile");

  var f = new FormData();
  f.append("f", fname.value);
  f.append("l", lname.value);
  f.append("e", email.value);
  f.append("u", uname.value);
  f.append("p", password.value);
  f.append("m", mobile.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if ((request.readyState == 4) & (request.status == 200)) {
      var response = request.responseText;
      // alert(response);

      if (response == "Success") {
        document.getElementById("msg1").innerHTML = "Registration Successfully";
        document.getElementById("msg1").className = "alert alert-success";
        document.getElementById("msgDiv1").className = "d-block col-11";

      } else {
        document.getElementById("msg1").innerHTML = response;
        document.getElementById("msgDiv1").className = "d-block col-11";
      }
    }
  }

  request.open("POST", "signUpProcess.php", true);
  request.send(f);
}

function signIn() {
  var username = document.getElementById("signinuname");
  var password = document.getElementById("signinpassword");
  var rememberme = document.getElementById("rememberme");

  var f = new FormData();
  f.append("un", username.value);
  f.append("pa", password.value);
  f.append("rm", rememberme.checked);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if ((request.readyState == 4) & (request.status == 200)) {
      var response = request.responseText;
      // alert(response);
      if (response == "Success") {
        window.location = "home.php";
      } else {
        document.getElementById("msgDiv2").className = "d-block col-10";
        document.getElementById("msg2").innerHTML = response;
      }
    }
  };

  request.open("POST", "signInProcess.php", true);
  request.send(f);
}

function adminLogin(){

  var adUname = document.getElementById("adminUsername");
  var adPassword = document.getElementById("adminUserpassword");

  var f = new FormData();
  f.append("un",adUname.value);
  f.append("pa",adPassword.value);

  var request =new XMLHttpRequest();
  request.onreadystatechange = function(){
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      // alert(response);
      if (response == "Success") {
        window.location = "adminHomePage.php";
      } else {
        document.getElementById("msg").innerHTML = response;
        document.getElementById("msgDiv").className = "d-block";
      }
    }
  }

  request.open("POST","adminloginProcess.php",true);
  request.send(f);

}

function status(id){
  
  
  var request =new XMLHttpRequest();

  request.onreadystatechange = function(){
    if (request.readyState == 4 ) {
      
      var response = request.responseText;
      // alert(response);

      if (response == "Deactive") {
        window.location.reload();
      } else if(response == "Active"){
        window.location.reload();
      }else{
        alert(response)
      }

    }
  }  

  request.open("GET","statusUserProcess.php?id=" + id ,true);
  request.send();

}