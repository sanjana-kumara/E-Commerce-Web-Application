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
        reload();
      } else {
        document.getElementById("msg1").innerHTML = response;
        document.getElementById("msgDiv1").className = "d-block col-11";

      }
    }
  }

  request.open("POST", "signUpProcess.php", true);
  request.send(f);
}

function reload() {
  window.location.reload();
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

function adminLogin() {

  var adUname = document.getElementById("adminUsername");
  var adPassword = document.getElementById("adminUserpassword");

  var f = new FormData();
  f.append("un", adUname.value);
  f.append("pa", adPassword.value);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      // alert(response);
      if (response == "Success") {
        window.location = "admindashBoard.php";
      } else {
        document.getElementById("msg").innerHTML = response;
        document.getElementById("msgDiv").className = "d-block";
      }
    }
  }

  request.open("POST", "adminloginProcess.php", true);
  request.send(f);

}

function status(id) {


  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {

      var response = request.responseText;
      // alert(response);

      if (response == "Deactive") {
        window.location.reload();
      } else if (response == "Active") {
        window.location.reload();
      } else {
        alert(response)
      }

    }
  }

  request.open("GET", "statusUserProcess.php?id=" + id, true);
  request.send();

}

function custlogin() {

  window.location = "index.php";

}

function catName() {

  // alert("OK");

  var cat_name = document.getElementById("catname");

  var f = new FormData();

  f.append("cn", cat_name.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {

    if (request.readyState == 4 && request.status == 200) {

      var response = request.responseText;

      // alert(response);

      if (response == "Success") {

        document.getElementById("msg").innerHTML = "Succefully Add Category Name";
        document.getElementById("msg").className = "col-12 text-center mt-4 alert alert-success border border-2 border-dark shadow-lg";
        document.getElementById("msgDiv").className = "d-block";

      } else {

        document.getElementById("msg").innerHTML = response;
        document.getElementById("msgDiv").className = "d-block";

      }

    }

  }

  request.open("POST", "addCategoryNameProcess.php", true);

  request.send(f);

}

function sub_cat() {

  var sub_cat_name = document.getElementById("subcat_name");

  var cat_opt = document.getElementById("catopt");

  var f = new FormData();

  f.append("sbn", sub_cat_name.value);
  f.append("opt",cat_opt.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {

    if (request.readyState == 4 && request.status == 200) {

      var response = request.responseText;

      if (response == "Succes") {
        
        document.getElementById("msg").innerHTML = "Succefully Add Sub Category Name";
        document.getElementById("msg").className = "col-12 text-center mt-4 alert alert-success border border-2 border-dark shadow-lg";
        document.getElementById("msgDiv").className = "d-block";
        

      } else {
        
        document.getElementById("msg").innerHTML = response;
        document.getElementById("msgDiv").className = "d-block";
        

      }

    }

  }

  request.open("POST", "subCaegoryAddProcess.php", true);

  request.send(f);

}

function brand() {

  // alert("OK");

  var brand_name = document.getElementById("brand");

  var f = new FormData();

  f.append("bn", brand_name.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {

    if (request.readyState == 4 && request.status == 200) {

      var response = request.responseText;

      // alert(response);

      if (response == "Succes") {

        document.getElementById("msg").innerHTML = "Succefully Add Brand Name";
        document.getElementById("msg").className = "col-12 text-center mt-4 alert alert-success border border-2 border-dark shadow-lg";
        document.getElementById("msgDiv").className = "d-block";

      } else {

        document.getElementById("msg").innerHTML = response;
        document.getElementById("msgDiv").className = "d-block";

      }

    }

  }

  request.open("POST", "brandAddProcess.php", true);

  request.send(f);

}

function size() {

  var size_name = document.getElementById("size");

  var f = new FormData();
  f.append("sn", size_name.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {

    if (request.readyState == 4 && request.status == 200) {

      var response = request.responseText;

      // alert(response);

      if (response == "Succes") {

        document.getElementById("msg").innerHTML = "Succefully Add Brand Name";
        document.getElementById("msg").className = "col-12 text-center mt-4 alert alert-success border border-2 border-dark shadow-lg";
        document.getElementById("msgDiv").className = "d-block";

      } else {

        document.getElementById("msg").innerHTML = response;
        document.getElementById("msgDiv").className = "d-block";

      }

    }

  }

  request.open("POST", "sizeAddProcess.php", true);

  request.send(f);

}

function loadSubCat(){

  var subname = document.getElementById("pcatname").value;

  var request = new XMLHttpRequest();

  request.onreadystatechange = function(){

    if (request.readyState == 4 && request.status == 200 ) {
      
      var response = request.responseText;

      document.getElementById("psubcatname").innerHTML = response;

    }

  }

  request.open("GET","loadSubCatProcess.php?sub="+subname, true);

  request.send();

}

function uploadeProductImage(){

   var img = document.getElementById("imgUploader");

   img.onchange = function(){

    var fil_count = img.files.length;

    if (fil_count <= 4) {
      
      for (var x = 0; x < fil_count; x++) {

        var file = this.files[x];
        var url = window.URL.createObjectURL(file);

        document.getElementById("i" + x).src = url;
         
      }

    } else {
      
      alert(fil_count + "files.Your are Proceed to uploaded only 4 Or Less than 4 Files.");

    }

   }

}