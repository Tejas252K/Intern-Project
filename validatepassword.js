function checkPassword(form) {
  firstname = form.firstname.value;
  password1 = form.password.value;
  password2 = form.cpassword.value;

  if (firstname == "") {
    alert("please Enter you Name");
    return false;
  }

  // If password not entered
  else if (password1 == "") {
    alert("Please enter Password");
    return false;
  }
  // If confirm password not entered
  else if (password2 == "") {
    alert("Please enter confirm password");
    return false;
  } 
  else if (password1.length < 6 || password1.length > 12) {
    alert("Password must be at least 6-12 characters long.");
    return false;
  }
  // If Not same return False.
  else if (password1 != password2) {
    alert("\nPassword did not match: Please try again...");
    return false;
  }

  // If same return True.
  else {
    return true;
  }
}
