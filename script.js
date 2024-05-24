 function validatePassword()
 {
  let passwordField = document.getElementById("Password").value;
  let confirmPasswordField = document.getElementById('Confirm_Password').value;
  console.log(passwordField,confirmPasswordField);
   const message = document.getElementById('message');

    if (passwordField == confirmPasswordField) {
      // confirmPasswordField.setCustomValidity('');
      message.textContent= 'Passwords match!';
    } else {
      // confirmPasswordField.setCustomValidity('Passwords do not match');
      message.textContent = 'Passwords do not match';
    }
  }
 });
