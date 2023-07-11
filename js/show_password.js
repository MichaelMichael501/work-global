function myFunction() {
  var pass = document.getElementById("password");
  var confirmpass = document.getElementById("confirm_password");
  if (pass.type === "password" || confirmpass.type === "password") {
    pass.type = "text";
    confirmpass.type = "text";
  } else {
    pass.type = "password";
    confirmpass.type = "password";
  }
}