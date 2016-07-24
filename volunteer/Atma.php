<!DOCTYPE HTML> 
<html>
<head>
<style>
.error {color: BLUE;}
</style>
</head>
<body> 

<?php
// define variables and set to empty values
$nameErr = $emailErr = $countryerror=$genderErr = $websiteErr = "";
$name = $email = $gender = $country=$comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is compulsory field.";
   } else {
     $name = test_input($_POST["name"]);
   }
   
   if (empty($_POST["email"])) {
     $emailErr = "Email  required";
   } else {
     $email = test_input($_POST["email"]);
   }
     
   if (empty($_POST["website"])) {
     $website = "";//this shows website is optional
   } else {
     $website = test_input($_POST["website"]);
   }

   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["comment"]);
   }

   if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = test_input($_POST["gender"]);
   }
}

function test_input($data) { //this function is for cleaning user input data.
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h2>PHP Form Validation Example2</h2>
<p><span class="error">* required field.</span></p> <!---A <span> element used to color a part of a text--->
<p>This form only registers your interest to Volunteer with Atma. 
Our Volunteer Manager will get in touch with you to know more about your skills. 
Please note that all volunteering positions are located in Mumbai (India) and are unpaid. 
We also focus on providing a professional volunteering experience which in most cases would require a minimum commitment of 3 months (approx. 40 hours a week)

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Name: <input type="text" name="name" value="<?php echo $name;?>"> <!---the php script shows how to keep the values in the input fields when the user hits the submit button--->
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   
   Country: <input type="text" name="country" value="<?php echo $country;?>"> 
   
   <br><br>
   
   Date of Birth:<br>
   Month:<select>
   <option value="1">Jan</option>
   <option value="2">Feb</option>
   <option value="3">March</option>
   <option value="4">April</option>
   <option value="5">May</option>
   <option value="6">June</option>
   <option value="7">July</option>
   <option value="8">Aug</option>
   <option value="9">Sept</option>
   <option value="10">Oct</option>
   <option value="11">Nov</option>
   <option value="12">Dec</option>
</select>
<br><br>
	How long do you intend to volunteer with Atma?<br><br>
	<select>
	<option value="0">Plz select</option>
   <option value="1">3 months</option>
   <option value="2">6 months</option>
   <option value="3">9 months</option>
   <option value="4">12 months</option>
   </select>
	<br><br>
	Do you have Bachelors degree or higher? <br><br>
	<input type="radio" name="option" value="yes"> Yes<br>
  <input type="radio" name="option" value="No"> No
  <br><br>
  
  Which of the 10 organisational development and 3 internal areas would you like to work in at Atma? Please choose a maximum of three areas <br><br>
  <input type="checkbox" name="org" value="1"> Administration (Creating a basic how to guide and assisting with putting in place basic administration systems e.g. filing systems) <br>
   <input type="checkbox" name="org" value="2"> Finance <br>
   <input type="checkbox" name="org" value="3"> Fundrasing <br>
   <input type="checkbox" name="org" value="4"> Governance <br>
   <input type="checkbox" name="org" value="5"> Human Resources<br> 
   <input type="checkbox" name="org" value="6"> Leadership <br>
   <input type="checkbox" name="org" value="7"> Marketing <br>
   <input type="checkbox" name="org" value="8"> Monitoring and Evaluation <br>
   <input type="checkbox" name="org" value="9"> Strategy Development<br>
      <input type="checkbox" name="org" value="10"> Communications<br>
	     <input type="checkbox" name="org" value="11"> Business Development<br>
   <br><br>
   
   How many years of experience do you have in working in the chosen developmental area? 
   <select >
	<option value="0">Plz select</option>
   <option value="1">1-2 years</option>
   <option value="2">3-4 years</option>
   <option value="3">5 years</option>
    </select>
<br><br>

	Tell us about your experience in your area of expertise...  <br>
	<input type="textarea">
	<br><br>
	What is your proficiency level in reading, writing and speaking English? <br>
	<input type="radio" name="option1" value="1"> 1<br>
  <input type="radio" name="option1" value="2"> 2<br>
<input type="radio" name="option1" value="3"> 3<br>
  <input type="radio" name="option1" value="4"> 4<br>
  <input type="radio" name="option1" value="5"> 5<br>
  <br><br>
  
  Do you speak a language in addition to English? Which?<br>
  <input type= text name="lang"><br>
  
  Have you ever lived outside your home country? <br>
  <input type= "textarea"><br><br>
  
  Tell us why you are interested in volunteering at Atma?<br>
  <input type= "textarea"><br><br>
  
  Give us one reference. This can be your superior, colleague (if working) or your University professor (if studying). Please exclude your blood/distant relatives (Mother, Father, Aunty, Cousins etc). <br>
    <input type= "textarea"><br><br>
   E-mail: <input type="text" name="email" value="<?php echo $email;?>">
   <span class="error">* <?php echo $emailErr;?></span>
   <br><br>
   Website: <input type="text" name="website" value="<?php echo $email;?>">
   <span class="error"><?php echo $websiteErr;?></span>
   <br><br>
   Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
   <br><br>
   Gender:
   <input type="radio" name="gender" value="female">Female
   <input type="radio" name="gender" value="male">Male
   <span class="error">* <?php echo $genderErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>
