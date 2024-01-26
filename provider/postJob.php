<?php
include('../config/constant.php');
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $jobTitle = $_POST["jobtitle"];
  $hireCompany = $_POST["hirecompany"];
  $qualification = $_POST["qualification-certificate"];
  $experience = $_POST["appliciantexperiance"];
  $category = $_POST["jobcategory"];
  $salary = $_POST["salary"];
  $quantityNeeded = $_POST["quantityneeded"];
  $postDate = $_POST["postdate"];
  $deadline = $_POST["deadline"];
  $region = $_POST["region"];
  $city = $_POST["city"];

  $sql= "INSERT INTO  jobs (title, category, salary, experience, qualification, quantity, createdDate, deadline, hirerName) VALUES ('$jobTitle', '$category', '$salary', '$experience', '$qualification', '$quantityNeeded', '$postDate', '$deadline', '$hireCompany')";

  if ($conn->query($sql) === true) {
    header("Location:index.php");
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
    <title>post a job</title>
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Libre+Baskerville:wght@400;700&display=swap");

* {
  font-family: "inter";
  margin: 0;
  padding: 5px;
  box-sizing: border-box;

}
@media screen and (max-width: 600px) {
  .container {
    width: 90%;
  }
  form {
    text-align: center;
  }
  input {
    width: 100%;
    display: flex;
  }

  .post-ajob input[type="submit"] {
    width: 100%;
  }
} 

.post-ajob .container {
  border: solid 3px #3795b3;
  border-radius: 100px 0;
  width: 600px;
  height: auto;
  max-width: 90%;
  margin: auto;
  margin-top: 40px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  padding: 0;
  /* display: flex;  */


}
.post-ajob input[type="text"] {
  margin: 0,;
  justify-content: center;
  display: flex;
  border-top: none;
  border-left: none;
  border-right: none;
  width: 100%;
  padding: 5px;
  
}

  /* width: 65%; */
  /* margin: 0 auto;
  justify-content: center;
  display: flex;
*/

form input[type="text"] {
  border-top: none;
  border-left: none;
  border-right: none;
  width: 50%;
  /* padding: 5px; */
  
}
.post-ajob input[type="submit"]{
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
.postcolor {
  color: #3795b3;
  text-align: center;
  padding-top: 40px;
  font-size: 20px;
}
#forms{
  /* display: flex; */
  justify-content: center;
  padding:20px 65px;
 

}
#quantityNeeded{
  margin: 5px;
}
#error{
  color: red ;
   font-size: 14px;
   font-style: italic;
  font-family: monospace;
}
    </style>
  </head>
  <!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>post a job</title>
    <link rel="stylesheet" href="style.css" />
  </head> -->
  <body>
    <section class="post-ajob">
      <div class="container">
        <div class="postcolor">
          <h2>Post a job</h2>
        </div>
        <div id="forms">
          <p id="error"></p>
        <form action="" id="myform"  onsubmit="return a()">
          <input type="text" name="jobtitle" placeholder="Job title" id="jobtitle" required/><br />
          <input
            type="text"
            name="hirecompany"
            id="hirecompany"
            placeholder="Hirer company/individual name" required
          /><br />
          <input
            type="text"
            name="qualification-certificate"
            placeholder="Qualification/Certificate"
            id="certificate" required
          /><br />
          
          <input
          id="appliciantexperiance"
            type="text"
            name="appliciantexperiance"
            placeholder="Applicant's experience" required
          /><br />
          <label for="jobcategory">Job Catagory</label>
          <select id="jobcategory"
          type="text"
          name="jobcategory"
          placeholder="Job category"
          list="jobcategories"
         required>
         <option value="" disabled selected>Select job catagory</option>
          <option value="Creative art and design">Creative art and design</option>
          <option value="Finance and Accounting">Finance and Accounting</option>
          <option value="Sales and Marketing">Sales and Marketing</option>
          <option value="Information technology">Information technology</option>
          <option value="Engineering">Engineering</option>
          <option value="Healthcare">Healthcare</option>
          <option value="Teaching and Training">Teaching and Training</option>
          <option value="other">other</option>
        </select>
        <br />
        <label for="quantityneeded">Quantity Needed</label>
        <input
        id="quantityNeeded"
            type="number"
            name="quantityneeded"
            placeholder="Quantity Needed" required
          /><br />
          <label for="postdate">Postdate</label>
          <input type="date" name="postdate" placeholder="Post date" id="postdate" required/>
          <label for="deadline">Deadline</label>
          <input type="date" name="deadline" placeholder="Deadline" id="deadline" required /><br />
          <div class="address">
          <label for="address">Address</label><br>
          <select id="region" name="region" class="js-example-basic-single"  required>
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
        </div>
      
          <input type="submit" id="submit" value="submit">
        </form>
      </div>
      </div>
    </section>
    <!-- <script src="script.js"></script>
  </body> -->
</html>
    <script>



    function validateform(){
    var jobtitle = document.getElementById("jobtitle").value;
    var hirecompany = document.getElementById("hirecompany").value;
    var certificate = document.getElementById("certificate").value;
    var quantityneeded = document.getElementById("quantityneeded").value;
    var appliciantexperiance = document.getElementById("appliciantexperiance").value;
    var jobcatagory = document.getElementById("job-catagory").value;
    var salary = document.getElementById("salary").value;
var postdate = document.getElementById("postdate").value;
var deadline = document.getElementById("deadline").value;
var region= document.getElementById("region").value;
var city= document.getElementById("city").value;
console.log("gggggggggggggggg");
<?php 
  header("Location: index.php");

?>

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
addInputListener("salary", /^(|[1-9]\d*)$/, "🚫 At least 1 quantity is required");

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
    isInputValid("salary") &&
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
        isInputValid("salary") &&
        isInputValid("appliciantexperiance") &&
        isInputValid("city") 

    );
}


</script>
  </body>
</html> 