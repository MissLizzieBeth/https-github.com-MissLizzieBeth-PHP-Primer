<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <meta charset="UTF-8">
  <style>
body {
  background-color: #4CAF50;
  color: white;
}

/* Style the container for inputs */
.container {
  width: 300px;
  margin: 0 auto;
  background-color: #f1f1f1;
  padding: 20px;
}

/* The message box is shown only when the user clicks on the password field */
#message {
  display:none;
  width: 300px;
  margin: 0 auto;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color when the requirements are right */
.valid {
  color: green;
}

/* Add a red text color when the requirements are wrong */
.invalid {
  color: red;
}
  </style>
</head>
<body>

  <form action="process.php" method="post" name="loginform" id="loginform">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="psw">Password:</label>
    <input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\_\$\^\!]).{15,}" required>

    <input type="submit" value="Log In">
  </form>

  <div id="message">
    <h3>Password must contain the following:</h3>
    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
    <p id="number" class="invalid">A <b>number</b></p>
    <p id="special" class="invalid">A <b>special</b> character</p>
    <p id="length" class="invalid">Minimum <b>15 characters</b></p>
  </div>

  <script>
	var myInput = document.getElementById("psw");
	var letter = document.getElementById("letter");
	var capital = document.getElementById("capital");
	var number = document.getElementById("number");
	var special = document.getElementById("special");
	var length = document.getElementById("length");


// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) { 
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) { 
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) { 
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate special characters
  var specialCharacters = /[_\$\^\!]/g;
  if(myInput.value.match(specialCharacters)) { 
    special.classList.remove("invalid");
    special.classList.add("valid");
  } else {
    special.classList.remove("valid");
    special.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 15) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
  </script>

</body>
</html>


--- Composer.json Configuration ---
{
    "name": "your/project-name",
    "description": "A short description of your project",
    "type": "project",
    "require": {},
    "authors": [
        {
            "name": "Your Name",
            "email": "you@example.com"
        }
    ],
    "minimum-stability": "dev",
    "prefer-stable": true
}