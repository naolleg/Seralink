<?php
include 'header.php';
?>
<?php
include('../config/constant.php');
ini_set('display_errors', 1);
error_reporting(E_ALL);
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm-password"]; // Updated to match the input name attribute

    // Validate password and confirm password match
    if ($password != $confirmPassword) {
        echo "Error: Passwords do not match.";
        exit;
    }
   
    $sql= "INSERT INTO users (firstname, lastname, email, password) VALUES ('$firstName', '$lastName', '$email', '$password')";
   
    if ($conn->query($sql) === true) {
        header("Location:profesionalprofile.php");
    } else {
        echo 'Failed to insert data into the database: ' . mysqli_error($conn);
    }
    $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>web project</title>
    <!-- <link rel="stylesheet" href="signup.css"> -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Libre+Baskerville:wght@400;700&display=swap');
*{
    font-family: "inter";
}
.create_account .logo{
    text-align: center;
} 
.create_account{
    width: 400px;
    background-color: #fff;
    padding: 40px;
    border-radius: 100px 0;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 400px;
    margin: 0 auto;
    border: 2px solid #3795b3;
}


.create_account .container {

    margin: 0 auto; 
    justify-content: center;
    height: auto;
} 

.create_account .container img {
width: 150px;
height: auto;
}

.create_account form {
    display: flex;
    flex-direction: column;
}

.create_acc_form h2 {
    text-align: center;
    color: #3795b3;
}

.input-group {
    margin-bottom: 15px;
}


.create_acc_form input {
    width: 85%;
    padding: 8px;
    border: 1px solid #ccc;
    border-top: none;
    border-right: none;
    border-left: none;
}

.create_acc_form button {
    background-color: #279574;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    width: 85%;
    
}

@media (max-width: 600px) {
    .container .logo {
        width: 80%;
    }
}


    </style>
  </head>
  <body>
    <section class="create_account">
      <div class="container">
        <div class="logo">
            <img src="asset/logo.png" alt="sera link logo">
        </div>
        <div class="create_acc_form">
            <h2>Create Account</h2>
            <p id="error"></p>
            <form action="signup.php" method="POST" onsubmit="return validateForm()">
                <div class="input-group">
                    <!-- <label for="firstName">First Name</label> -->
                    <input type="text" id="firstName" name="firstName" placeholder="First Name" required>
                </div>

                <!-- <div class="input-group">
                   
                    <input type="text" id="middleName" name="middleName" placeholder="Middle Name" required>
                </div> -->

                <div class="input-group">
                    <!-- <label for="lastName">Last Name</label> -->
                    <input type="text" id="lastName" name="lastName" placeholder="Last Name" required>
                </div>

                <div class="input-group">
                    <!-- <label for="email">email</label> -->
                    <input type="email" id="email" name="email" placeholder="email" required>
                    <span id="emailError" class="error"></span>
                </div>
                
                <div class="input-group">
                    <!-- <label for="password">Password</label> -->
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    <span id="passwordError" class="error"></span>
                </div>
                <div class="input-group">
                    <!-- <label for="confirm-password">Confirm Password</label> -->
                    <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm-Password" required>
                    <span id="confirmPasswordError" class="error"></span>
                </div>
                <button type="submit">Create Account</button>
            </form>
<script>

function updateError(inputId, isValid,  Message ){
  var errorElement=document.getElementById("error");
  if(errorElement.textContent=isValid){
    document.getElementById(inputId).style.borderColor="green";
    errorElement.textContent="✅";
  }else{
    document.getElementById(inputId).style.borderColor="red";
    errorElement.textContent=Message;
  }
}
function addInputListener(inputId, regex, errorMessage){
    document.getElementById(inputId).addEventListener("input", function(){
        var value = this.value;
        var isValid = regex.test(value);
        updateError(inputId, isValid, errorMessage);
    });
}
addInputListener("firstName",/^[a-zA-Z  ]{3,20}$/, "🚫only letters, atleast 3 character");
// addInputListener("middleName",/^[a-zA-Z  ]{3,20}$/, "🚫only letters, atleast 3 character");
addInputListener("lastName",/^[a-zA-Z  ]{3,20}$/, "🚫only letters, atleast 3 character");
addInputListener("email", /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/, "🚫invalid Email");
addInputListener("password", /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/, "🚫at least(6 characters, 1 uppercase, 1 lowercase, 1 number)");


document.getElementById("confirm-password").addEventListener("input", function(){
    var value = this.value;
    var password = document.getElementById("password").value;
    var isValid = value === password;
    updateError("confirm-password", isValid, "🚫passwords do not match");
});
document.getElementById("submit").addEventListener("click", function () {
    var isValid =
      document.getElementById("firstName").style.borderColor === "green" &&
      document.getElementById("middleName").style.borderColor === "green" &&
      document.getElementById("lastName").style.borderColor === "green" &&
      document.getElementById("email").style.borderColor === "green" &&
      document.getElementById("password").style.borderColor === "green" &&
      document.getElementById("confirm-password").style.borderColor === "green";
  
    if (!isValid) {
      alert("Please fill the form correctly");
    }
  });
</script>
    </section>

  </body>
</html>
<?php include('../common/footer.php'); ?>