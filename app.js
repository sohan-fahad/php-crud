function validateForm() {
  let x = document.forms["myForm"]["fname"].value;
  let a = document.forms["myForm"]["email"].value;
  let b = document.forms["myForm"]["password"].value;
  let c = document.forms["myForm"]["cpassword"].value;
  if (x == "") {
    document.getElementById("err-name").innerText = "";
    document.getElementById("err-name").innerText = "Name must be filled";
    document.getElementById("err-name").style.color = "red";
    document.forms["myForm"]["fname"].focus();
    return false;
  }
  if (a == "") {
    alert("Email must be filled out");
    document.forms["myForm"]["email"].focus();
    return false;
  }
  if (b == "") {
    alert("Password must be filled out");
    document.forms["myForm"]["password"].focus();
    return false;
  }
  if (c == "") {
    alert("Re-password must be filled out");
    document.forms["myForm"]["cpassword"].focus();
    return false;
  }
  if (b != c) {
    alert("Re-password not matched");
    document.forms["myForm"]["fname"].focus();
    return false;
  }
}

function matchPass() {
  let password = document.forms["myForm"]["password"].value;
  let cpassword = document.forms["myForm"]["cpassword"].value;
  if (password != cpassword) {
    // document.getElementById("err-cpassword").textContent = "";
    document.getElementById("err-cpassword").innerText = "Not Match";
    document.getElementById("err-cpassword").style.color = "red";
    return false;
  } else {
    // document.getElementById("err-cpassword").textContent = "";
    document.getElementById("err-cpassword").innerText = "Match";
    document.getElementById("err-cpassword").style.color = "green";
  }
}
