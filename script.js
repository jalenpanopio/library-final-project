function validateForm() {
  let x = document.forms["psw"]["email"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}