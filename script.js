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
  };

  request.open("POST", "signUpProcess.php", true);
  request.send(f);
}

function reload() {
  window.location.reload();
}

function signIn() {
  var email = document.getElementById("email2");
  var password = document.getElementById("password2");
  var rememberme = document.getElementById("rememberme");

  var f = new FormData();
  f.append("e", email.value);
  f.append("p", password.value);
  f.append("r", rememberme.checked);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if ((request.readyState == 4) & (request.status == 200)) {
      var response = request.responseText;
      // alert(response);
      if (response == "success") {
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

var av;
function adminVerification() {
  var email = document.getElementById("e");
  var uname = document.getElementById("uname");

  var f = new FormData();
  f.append("e", email.value);
  f.append("u", uname.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;

      if (response == "Success") {
        alert("Please Go to Email to find the Verification Code.");
        var adminVerificationModel = document.getElementById(
          "adminVerificationModel"
        );
        av = new bootstrap.Modal(adminVerificationModel);
        av.show();
      } else {
        alert(response);
      }
    }
  };

  request.open("POST", "adminVerificationProcess.php", true);

  request.send(f);
}

function verify() {
  var code = document.getElementById("vcode");

  var f = new FormData();
  f.append("c", code.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if ((request.status == 200) & (request.readyState == 4)) {
      var response = request.responseText;

      if (response == "success") {
        av.hide();
        window.location = "admindashBoard.php";
      } else {
        alert(response);
      }
    }
  };

  request.open("POST", "verificationProcess.php", true);
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
        alert(response);
      }
    }
  };

  request.open("GET", "statusUserProcess.php?id=" + id, true);
  request.send();
}

function custlogin() {
  window.location = "index.php";
}

function logOut() {
  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      if (response == "success") {
        window.location = "adminLogin.php";
      }
    }
  };

  request.open("POST", "signOutProcess.php", true);
  request.send();
}

function logOut2() {
  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      if (response == "success") {
        window.location = "index.php";
      }
    }
  };

  request.open("POST", "userSignoutProcess.php", true);
  request.send();
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
        document.getElementById("msg").innerHTML =
          "Succefully Add Category Name";
        document.getElementById("msg").className =
          "col-12 text-center mt-4 alert alert-success border border-2 border-dark shadow-lg";
        document.getElementById("msgDiv").className = "d-block";
      } else {
        document.getElementById("msg").innerHTML = response;
        document.getElementById("msgDiv").className = "d-block";
      }
    }
  };

  request.open("POST", "addCategoryNameProcess.php", true);

  request.send(f);
}

function sub_cat() {
  var sub_cat_name = document.getElementById("subcat_name");

  var cat_opt = document.getElementById("catopt");

  var f = new FormData();

  f.append("sbn", sub_cat_name.value);
  f.append("opt", cat_opt.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;

      if (response == "Succes") {
        document.getElementById("msg").innerHTML =
          "Succefully Add Sub Category Name";
        document.getElementById("msg").className =
          "col-12 text-center mt-4 alert alert-success border border-2 border-dark shadow-lg";
        document.getElementById("msgDiv").className = "d-block";
      } else {
        document.getElementById("msg").innerHTML = response;
        document.getElementById("msgDiv").className = "d-block";
      }
    }
  };

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
        document.getElementById("msg").className =
          "col-12 text-center mt-4 alert alert-success border border-2 border-dark shadow-lg";
        document.getElementById("msgDiv").className = "d-block";
      } else {
        document.getElementById("msg").innerHTML = response;
        document.getElementById("msgDiv").className = "d-block";
      }
    }
  };

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
        document.getElementById("msg").innerHTML = "Succefully Add Size Name";
        document.getElementById("msg").className =
          "col-12 text-center mt-4 alert alert-success border border-2 border-dark shadow-lg";
        document.getElementById("msgDiv").className = "d-block";
      } else {
        document.getElementById("msg").innerHTML = response;
        document.getElementById("msgDiv").className = "d-block";
      }
    }
  };

  request.open("POST", "sizeAddProcess.php", true);

  request.send(f);
}

// function loadSubCat() {
//   var subname = document.getElementById("pcatname").value;

//   var request = new XMLHttpRequest();

//   request.onreadystatechange = function () {
//     if (request.readyState == 4 && request.status == 200) {
//       var response = request.responseText;

//       document.getElementById("psubcatname").innerHTML = response;
//     }
//   };

//   request.open("GET", "loadSubCatProcess.php?sub=" + subname, true);

//   request.send();
// }

function uploadeProductImage() {
  var img = document.getElementById("imgUploader");

  img.onchange = function () {
    var fil_count = img.files.length;

    if (fil_count <= 4) {
      for (var x = 0; x < fil_count; x++) {
        var file = this.files[x];
        var url = window.URL.createObjectURL(file);

        document.getElementById("i" + x).src = url;
      }
    } else {
      alert(
        fil_count +
          "files.Your are Proceed to uploaded only 4 Or Less than 4 Files."
      );
    }
  };
}

function addProduct() {
  var pname = document.getElementById("pname");
  var pdescription = document.getElementById("description");
  var price = document.getElementById("pprice");
  var quantity = document.getElementById("pqty");
  var delivery_cost = document.getElementById("pdiliver");
  var category_name = document.getElementById("pcatname");
  var sub_category_name = document.getElementById("psubcatname");
  var condition = 0;

  if (document.getElementById("c").checked) {
    condition = 1;
  } else if (document.getElementById("u").checked) {
    condition = 2;
  }
  var discount = document.getElementById("pdiscount");
  var branad_name = document.getElementById("pbrandname");
  var size = document.getElementById("psize");
  var img = document.getElementById("imgUploader");

  var f = new FormData();
  f.append("pn", pname.value);
  f.append("pd", pdescription.value);
  f.append("pr", price.value);
  f.append("qty", quantity.value);
  f.append("dc", delivery_cost.value);
  f.append("cn", category_name.value);
  f.append("scn", sub_category_name.value);
  f.append("con", condition);
  f.append("dis", discount.value);
  f.append("br", branad_name.value);
  f.append("sz", size.value);

  var fil_count = img.files.length;

  for (var x = 0; x < fil_count; x++) {
    f.append("image" + x, img.files[x]);
  }

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      if (response == "success") {
        window.location.reload();
      } else {
        alert(response);
        window.location.reload();
      }
    }
  };

  request.open("POST", "addProductProcess.php", true);

  request.send(f);
}

function productblock(x) {
  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;

      if (response == "Deactive") {
        window.location.reload();
      } else if (response == "Active") {
        window.location.reload();
      } else {
        alert(response);
      }
    }
  };

  request.open("GET", "productBlockProcess.php?status=" + x, true);
  request.send();
}

function loadStock(x) {
  var page = x;

  var f = new FormData();
  f.append("p", page);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      // alert(response);

      document.getElementById("pid").innerHTML = response;
    }
  };

  request.open("POST", "loadStockProcess.php", true);
  request.send(f);
}

function loadUser(y) {
  var user = y;

  var f = new FormData();
  f.append("u", user);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;

      document.getElementById("uid").innerHTML = response;
    }
  };

  request.open("POST", "loadeUserProcess.php", true);
  request.send(f);
}

function searchProduct(x) {
  var page = x;
  var product = document.getElementById("product");

  var f = new FormData();
  f.append("p", product.value);
  f.append("pg", page);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      // alert(response);
      document.getElementById("pid").innerHTML = response;
    }
  };

  request.open("POST", "admin_SearchProductProcess.php", true);
  request.send(f);
}

// home Page Product Search
function loadeProduct(x) {
  var page = x;

  var f = new FormData();
  f.append("p", page);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      //
      document.getElementById("pid").innerHTML = response;
    }
  };

  request.open("POST", "loadeHomeProductProcess.php", true);
  request.send(f);
}

function homeSearch(x) {
  var page = x;
  var product = document.getElementById("homeproduct");

  // alert(page);
  // alert(product.value);

  var f = new FormData();
  f.append("pa", page);
  f.append("pr", product.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;

      document.getElementById("spid").innerHTML = response;
    }

    if (product.value.trim() == "") {
      window.location.reload();
    }
  };

  request.open("POST", "homeSearchProductProcess.php", true);
  request.send(f);
}
// home Page Product Search

function loadMainImg(id) {
  var sample_img = document.getElementById("productImg" + id).src;
  var main_img = document.getElementById("mainImg");

  main_img.style.backgroundImage = "url(" + sample_img + ")";
}

// Product Update (updateProduct.php)
function changeProductImage() {
  var image = document.getElementById("imgUploader");

  image.onchange = function () {
    var file_count = image.files.length;

    if (file_count <= 4) {
      for (var x = 0; x < file_count; x++) {
        var file = this.files[x];

        var url = window.URL.createObjectURL(file);

        document.getElementById("i" + x).src = url;
      }
    } else {
      alert(
        file_count +
          "Files.You are Process to uploade Only 4 Or Less than 4 Files..."
      );
    }
  };
}

function changeProductDeatiles() {
  var pdescription = document.getElementById("description");
  var price = document.getElementById("pprice");
  var quantity = document.getElementById("pqty");
  var delivery_cost = document.getElementById("pdiliver");
  var discount = document.getElementById("pdiscount");
  var img = document.getElementById("imgUploader");

  var f = new FormData();
  f.append("pd", pdescription.value);
  f.append("pr", price.value);
  f.append("qu", quantity.value);
  f.append("dc", delivery_cost.value);
  f.append("dis", discount.value);

  var fil_count = img.files.length;

  for (var z = 0; z < fil_count; z++) {
    f.append("i" + z, img.files[x]);
  }

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 2) {
      var response = request.responseText;

      if (response == "Product has been Updateed") {
        window.location = "adminStockManagement.php";
      } else {
        alert(response);
      }
    }
  };

  request.open("POST", "updateProductDeatiles.php", true);
  request.send(f);
}
// Product Update (updateProduct.php)

function check_value(qty) {
  var input = document.getElementById("qty_input");

  if (input.value <= 0) {
    alert("Quantity must be 01 or more.");
    input.value = 1;
  } else if (input.value > qty) {
    alert("Insyfficient Quantity.");
    input.value = qty;
  }
}

function qty_inc(qty) {
  var input = document.getElementById("qty_input");

  if (input.value < qty) {
    var newValue = parseInt(input.value) + 1;
    input.value = newValue;
  } else {
    alert("Maximum Quantity has achieved.");
    input.value = qty;
  }
}

function qty_dec() {
  var input = document.getElementById("qty_input");

  if (input.value > 1) {
    var newValue = parseInt(input.value) - 1;
    input.value = newValue;
  } else {
    alert("Minimum Quantity has achieved.");
    input.value = 1;
  }
}

// customer singup process
var forgotPasswordModal;

function forgotPassword() {
  var email = document.getElementById("email2");

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.status == 200 && request.readyState == 4) {
      var response = request.responseText;

      if (response == "Success") {
        alert("Verification Code is Successfully Sent Please Check Your Email");
        var modal = document.getElementById("fpmodal");
        forgotPasswordModal = new bootstrap.Modal(modal);
        forgotPasswordModal.show();
      } else {
        document.getElementById("msg1").innerHTML = text;
        document.getElementById("msgdiv1").className = "d-block";
        alert(response);
      }
    }
  };

  request.open("GET", "forgotPasswordProcess.php?e=" + email.value, true);
  request.send();
}

function showpassword1() {
  var textfield = document.getElementById("np");
  var button = document.getElementById("npb");

  if (textfield.type == "password") {
    textfield.type = "text";
    button.innerHTML = "Hide";
  } else {
    textfield.type = "password";
    button.innerHTML = "Show";
  }
}

function showpassword2() {
  var textfield = document.getElementById("np1");
  var button = document.getElementById("npb1");

  if (textfield.type == "password") {
    textfield.type = "text";
    button.innerHTML = "Hide";
  } else {
    textfield.type = "password";
    button.innerHTML = "Show";
  }
}

function resetpassword() {
  var email = document.getElementById("email2");
  var newpassword = document.getElementById("np");
  var retypepassword = document.getElementById("np1");
  var verification = document.getElementById("vcode");

  var f = new FormData();
  f.append("e", email.value);
  f.append("np", newpassword.value);
  f.append("rp", retypepassword.value);
  f.append("vc", verification.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.status == 200 && request.readyState == 4) {
      var response = request.responseText;
      if (response == "Success") {
        alert(response);
      } else {
        alert("Password Updated Successfully.");
        forgotPasswordModal.hide();
      }
    }
  };

  request.open("POST", "resetPasswordProcess.php", true);
  request.send(f);
}

function showpasswordicon() {
  var textfield = document.getElementById("pass");
  var butn_icon = document.getElementById("passicon");

  if (textfield.type == "password") {
    textfield.type = "text";
    butn_icon.innerHTML =
      '<i class="fa-solid fa-eye-slash fw-bold text-white fs-4"></i>';
  } else {
    textfield.type = "password";
    butn_icon.innerHTML =
      '<i class="fa-sharp fa-solid fa-eye fw-bold text-white fs-4"></i>';
  }
}
// customer singup process

// user Profile Process
function uploadeProfileImg() {
  var img = document.getElementById("profileImage");
  img.onchange = function () {
    var file = this.files[0];
    var url = window.URL.createObjectURL(file);

    document.getElementById("img").src = url;
  };
}

function updateUserDeatils() {
  var first_name = document.getElementById("fn");
  var last_name = document.getElementById("ln");
  var user_name = document.getElementById("un");
  var password = document.getElementById("pass");
  var email = document.getElementById("em");
  var ad_lin1 = document.getElementById("ln1");
  var ad_lin2 = document.getElementById("ln2");
  var city = document.getElementById("city");
  var distric = document.getElementById("dis");
  var postal_code = document.getElementById("pc");
  var mobile_no = document.getElementById("mn");
  var p_img = document.getElementById("profileImage");

  var f = new FormData();
  f.append("fn", first_name.value);
  f.append("ln", last_name.value);
  f.append("pa", password.value);
  f.append("em", email.value);
  f.append("ln1", ad_lin1.value);
  f.append("ln2", ad_lin2.value);
  f.append("ct", city.value);
  f.append("dis", distric.value);
  f.append("ps", postal_code.value);
  f.append("mb", mobile_no.value);
  f.append("im", p_img.files[0]);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      if (response == "Upadated" || response == "Saved") {
        window.location.reload();
      } else if (response == "You Have not Select any Images") {
        window.location.reload();
      } else {
        window.location.reload();
      }
    }
  };

  request.open("POST", "profileDeatilsUploadeProcess.php", true);
  request.send(f);
}
// user Profile Process

// add to cart Process
function addtoCart(x) {
  var pid = x;
  var qty = document.getElementById("qty");

  if (qty.value > 0) {
    var f = new FormData();
    f.append("p", pid);
    f.append("q", qty.value);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
      if (request.readyState == 4 && request.status == 200) {
        var response = request.responseText;
        // alert(response);

        Swal.fire({
          title: response,
          icon: "success",
        });

        qty.value = "";
      }
    };

    request.open("POST", "addtoCartProcess.php", true);
    request.send(f);
  } else {
  }
}

function loadCart() {
  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      // alert(response);
      if (response == "Cart is Empty") {
        Swal.fire({
          icon: "error",
          title: "Warning!",
          text: "Cart is Empty!",
          footer:
            '<a href="home.php" class="text-primary fs-3 fw-bold">Continue Shoping....</a>',
        });
      } else {
        document.getElementById("cartBody").innerHTML = response;
      }
    }
  };

  request.open("POST", "loadeCartProcess.php", true);
  request.send();
}

function incrementCartQty(x) {
  var cartId = x;
  var qty = document.getElementById("qty" + x);
  // alert(qty.value);
  var newQty = parseInt(qty.value) + 1;

  var f = new FormData();
  f.append("c", cartId);
  f.append("q", newQty);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      // alert(response);

      if (response == "Success") {
        qty.value = parseInt(qty.value) + 1;
        loadCart();
      } else {
        alert(response);
      }
    }
  };

  request.open("POST", "updateCartQtyProcess.php", true);
  request.send(f);
}

function decrementCartQty(x) {
  // alert(x);
  var cartId = x;
  var qty = document.getElementById("qty" + x);
  // alert(qty.value);
  var newQty = parseInt(qty.value) - 1;

  var f = new FormData();
  f.append("c", cartId);
  f.append("q", newQty);

  if (newQty > 0) {
    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
      if (request.readyState == 4 && request.status == 200) {
        var response = request.responseText;
        // alert(response);

        if (response == "Success") {
          qty.value = parseInt(qty.value) - 1;
          loadCart();
        } else {
          alert(response);
        }
      }
    };

    request.open("POST", "updateCartQtyProcess.php", true);
    request.send(f);
  }
}

function removeCart(x) {
  if (confirm("Are You sur deleting this items?")) {
    var f = new FormData();
    f.append("c", x);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
      if (request.readyState == 4 && request.status == 200) {
        var response = request.responseText;
        // alert("OK");

        alert(response);
        reload();
      }
    };

    request.open("POST", "removeCartProcess.php", true);
    request.send(f);
  }
}
// add to cart

// CheckOut Process
function cheCkout() {
  // alert("OK");

  var f = new FormData();
  f.append("cart", true);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      // alert(response);

      var payment = JSON.parse(response);
      doCheckout(payment, "checkOutProcess.php");
    }
  };

  request.open("POST", "paymentProcess.php", true);
  request.send(f);
}

function doCheckout(payment, path) {
  // Payment completed. It can be a successful failure.
  payhere.onCompleted = function onCompleted(orderId) {
    console.log("Payment completed. OrderID:" + orderId);
    // Note: validate the payment and show success or failure page to the customer
  };

  // Payment window closed
  payhere.onDismissed = function onDismissed() {
    // Note: Prompt user to pay again or show an error page
    console.log("Payment dismissed");

    var f = new FormData();
    f.append("payment", JSON.stringify(payment));

    var request = new XMLHttpRequest();
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      alert(response);
      // if (response == "Success") {
      //   reload();
      // } else {
      //   alert(response);
      // }
    }

    request.open("POST", path, true);
    request.send(f);
  };

  // Error occurred
  payhere.onError = function onError(error) {
    // Note: show an error page
    console.log("Error:" + error);
  };

  // Show the payhere.js popup, when "PayHere Pay" is clicked
  // document.getElementById('payhere-payment').onclick = function (e) {
  payhere.startPayment(payment);
  // };
}
