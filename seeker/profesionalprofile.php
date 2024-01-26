<?php
include 'header.php';
?>
<?php
include('../config/constant.php');
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Create tables if they don't exist
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Prepare the data for insertion
    $region = $_POST['region'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $skillMessage = $_POST['skillmessage'];
    $summary = $_POST['summary'];
    $cvPdf = $_FILES['file']['name'];

    // Insert address into the address table
    $sqlInsertAddress = "INSERT INTO address (region, city) VALUES ('$region', '$city')";
    if ($conn->query($sqlInsertAddress) === true) {
        $addressId = $conn->insert_id;
    } else {
        echo "Error inserting address: " . $conn->error;
    }

    // Insert profile data into the profile table
    $sqlInsertProfile = "INSERT INTO professionalProfile (address_id, gender, skill_message, summary, cv_pdf_path) 
    VALUES ('$addressId', '$gender', '$skillMessage', '$summary', '$cvPdf')";
    if ($conn->query($sqlInsertProfile) === true) {
        header("Location: index.php");
        exit(); // Add exit() to stop further execution
    } else {
        echo "Error inserting profile data: " . $conn->error;
    }

    $conn->close();
}
?>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional page</title>
    <link rel="stylesheet" href="style.css">
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Libre+Baskerville:wght@400;700&display=swap');

* {
    margin: 0;
    padding: 0;
    font-family: "inter";
}
.title{
    text-align: center;
    margin-bottom: 30px;
    font-size: 20px;
    color: #3795b3;
}
.container {
    background-color: #fff;
    border-radius: 100px 0;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    width: 420px;
    margin: 0 auto;
    padding: 40px;
    margin-top: 50px;
    border: 2px solid #3795b3;
}
 .profile input[type="text"]{
     border-bottom: 1px solid;
     border-top: none;
     border-left: none;
     border-right: none;
     /* border-radius: 4px; */
     padding: 5px;
     width: 85%;
     margin-bottom: 20px;
     transition: background-color 0.3s ease;
 }
 .profile label{
    margin-right: 15%;
    font-size: 14px;
 }
textarea {
    width: 90%;
    padding: 8px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    resize: vertical;
    margin-top: 10px;
}
.profile input[type="submit"] {
    background-color: #279574;
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 10px;
    font-size: 16px;
    cursor: pointer;
    display: flex;
    justify-content: center;
    margin:0 auto;
    margin-top: 10px;
    width: 80%;
} 
#error{
    color: red ;
     font-size: 14px;
     font-style: italic;
    font-family: monospace;
 }

@media(max-width: 500px) {
    .container {
        width: 90%;
        padding: 20px;
    }

    .title {
        font-size: 18px;
    }

    .profile label {
        margin-right: 10%;
    }

    .profile input[type="text"],
    textarea {
        font-size: 14px;
    }

    .profile input[type="submit"] {
        font-size: 14px;
    }
}
    </style>
</head>

<body>
    <section class="perofProfile">
          <div class="container">
            <div class="title"><h3>Professional profile</h3></div>
            <p id="error"></p>
            <div class="profile">
                <form action="profesionalprofile.php" method="POST" onsubmit="return validateForm()" id="myForm">
                    <!-- <input type="text" name="FirstName"  placeholder="First Name" id="firstName" required><br>-->
                    <!-- <input type="text" name="LastName" placeholder="Last Name" id="lastName" required><br>  -->
                    <label for="address">Address</label><br>
                    <select id="region" name="region" class="js-example-basic-single" required>
                        <option value="" disabled selected>Select your region</option>
                        <option value="Oromia">Oromia</option>
                        <option value="Amhara">Amhara</option>
                        <option value="Tigray">Tigray</option>
                        <option value="Somali">Somali</option>
                        <option value="Gambela">Gambela</option>
                        <option value="Addis Ababa">Addis Ababa</option>
                        <option value="Harari">Harari</option>
                        <option value="Affar">Affar</option>
                        <option value="Sidama">Sidama</option>
                        <option value="Benishangul-Gumuz">SNNPR</option>

                    </select>
                    <input type="city" name="city" placeholder="city" id="city" required><br>
                    <label>
                        <input type="radio" name="gender" value="male" required> Male
                      </label>
                      <label>
                        <input type="radio" name="gender" value="female" required> Female
                      </label>
                  
                    <textarea name="skillmessage" id="skillmessage" cols="25" rows="5" placeholder="Skills and work experience in one paragraph" required></textarea>
                    <textarea name="summary" id="summary" cols="25" rows="5" placeholder="Professional summary" required></textarea><br>
                    <label for="file">Add your CV PDF file</label>
                    <input type="file" id="file" name="file" accept="application/pdf" required> <br>
                    <input type="submit" value="Submit" id="submit">
                </form>
            </div>

          </div>
    </section>
    <script>
      function formvalidation(){
    var jobtitle = document.getElementById("jobtitle").value;
    var hirecompany = document.getElementById("hirecompany").value;
    var certificate = document.getElementById("certificate").value;
    var quantityneeded = document.getElementById("quantityneeded").value;
    var appliciantexperiance = document.getElementById("appliciantexperiance").value;
    var jobcatagory = document.getElementById("job-catagory").value;
var postdate = document.getElementById("postdate").value;
var deadline = document.getElementById("deadline").value;
var region= document.getElementById("region").value;
var city= document.getElementById("city").value;
}
function updateError(inputId, isValid,  Message){
    var errorElement=document.getElementById("error");
    if(errorElement.textContent=isValid){
        document.getElementById(inputId).style.borderColor="green";
        errorElement.textContent="✅";
    }else{
        document.getElementById(inputId).style.borderColor="red";
        errorElement.textContent=Message;
    }
}
function addInputListener(inputId, regex, Message){
    document.getElementById(inputId).addEventListener("input", function(){
        var value = this.value;
        var isValid = regex.test(value);
        updateError(inputId, isValid, Message);
    });
}
addInputListener("jobtitle",/^[a-zA-Z  ]{3,20}$/, "🚫only letters, atleast 3 character");
addInputListener("hirecompany",/^.{3,}$/, "🚫atleast 3 character");
addInputListener("certificate",/^.{3,}$/, "🚫 atleast 3 character");
addInputListener("quantityNeeded",/^(|[1-9]\d*)$/, "🚫atleast 1");
addInputListener("city",/^[a-zA-Z  ]{3,20}$/, "🚫only letters, atleast 3 character");
addInputListener("appliciantexperiance",/^.{3,}$/, "🚫 atleast 3 character");


document.addEventListener("DOMContentLoaded", function () {
    // Get the current date
    var today = new Date();

    // Format the date as YYYY-MM-DD (required format for the date input)
    var formattedDate = today.toISOString().split('T')[0];

    // Set the value and max attribute of the date input field
    var todayDateInput = document.getElementById("postdate");
    todayDateInput.value = formattedDate;
    todayDateInput.setAttribute("max", formattedDate);
    todayDateInput.setAttribute("min", formattedDate);
});

document.addEventListener("DOMContentLoaded", function () {

    var today = new Date();


    var formattedDate = today.toISOString().split('T')[0];

    
    var futureDateInput = document.getElementById("deadline");
    futureDateInput.value = formattedDate;
    futureDateInput.setAttribute("min", formattedDate);
});

function checkFormValidity() {
    var isFormValid =
    isInputValid("jobtitle") &&
    isInputValid("hirecompany") &&
    isInputValid("certificate") &&
    isInputValid("quantityneeded") &&
    isInputValid("appliciantexperiance") &&
    isInputValid("city") 

    document.getElementById("submit").disabled = !isFormValid;
}

function isInputValid(inputId) {
    return document.getElementById(inputId).style.borderColor === "green";
}

document.getElementById("myform").addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent the default form submission
    
    if (isFormValid()) {
       document.getElementById("error").textContent = "✅Form submitted successfully✅";
       document.getElementById("error").style.color = "green";
        document.getElementById("myForm").submit();
    } else {
        document.getElementById("error").textContent = "🚫Please fill the form correctly🚫";
        document.getElementById("error").style.color = "red";
    }
});

function isFormValid() {
    
    return (
        isInputValid("jobtitle") &&
        isInputValid("hirecompany") &&
        isInputValid("certificate") &&
        isInputValid("quantityNeeded") &&
        isInputValid("appliciantexperiance") &&
        isInputValid("city") 

    );
}</script>

</body>
</html>