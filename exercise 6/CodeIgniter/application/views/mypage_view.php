<!DOCTYPE HTML>
<html>
<head> 
<style>
	
	body{
		background-image: url("HOPE.jpg");
		background-repeat: repeat;
	}
	
	img.upper{
		position:center;
		width:200px;
		height:200px;
	}
	
	p.intro{
		text-align:center;
		font family:Lucida Calligraphy;
		font-size: 20pt;
		color:rgb(253, 253, 253);
	}
	
	img.myself{
		width: 950px;
		height: 200px;
		position: center;
	}
	
	li.aboutMe{
		font-family: Lucida Calligraphy;
		font-size:20pt;
		color:rgb(253, 253, 253);
	}
	
	p{
		text-align:center;
		font-family:Lucida Calligraphy;
		font-size: 20pt;
		color: rgb(253, 253, 253); 
	}
	
	p.form{
		font-size: 16pt;
		color:rgb(253, 253, 253);
		font-family: Lucida Calligraphy;
	}
</style>

<center>
<font color = "white" font face = "Lucida Calligraphy">
<h1> Welcome to My Page! <font-size = "30"></h1>

<br>

<img class = "upper" src = "face.png"  alt="web"/>
</center>

<body>
<p class = "intro"> Hello, my name is Samantha Nicole<br>
My friends call me Sam, Sam-sam or Sammy<br>
Want to know more about me? :)<br></p>

<br>
<br>
<br>

<center> 
<img class="myself" src = "about_me.png" alt = "web"/>

<table>
	<tr>
	<td> 
		<li class = "aboutMe">My dream is to become a cardiologist</li>
		<li class = "aboutMe">I love reading books about science and medicine</li>
		<li class = "aboutMe">I love to play badminton with my younger sister</li>
		<li class = "aboutMe">My favorite color is blue</li>
		<li class = "aboutMe">I learned how to drive when I was in 3rd year highschool</li>
		<li class = "aboutMe">I was a transferee student from St. Scholastica's College</li>
		<li class = "aboutMe">My first course is BS Biology</li>
		<li class = "aboutMe">I'm planning to pursue my first course after I graduate</li>
		<li class = "aboutMe">I have a pet dog, and there names are Toodles and Drixo</li>
		<li class = "aboutMe">My future plan is to travel around the world with my family</li>
	</td>
	</tr>
</table>
</center>

<br>
<br>
<br>

<center> 
<font color = "white" font face = "Lucida Calligraphy">
<h1>MY FAVORITES <font size = "28"></h1>
<table>
	<tr>
<p align = "right">
	<td> <img src = "chocolates.jpg" width = "250" height = "250" alt="WEBPROG"/> </th></td>
<p align = "right">
	<td> <img src = "rr_icecream.jpg" width = "250" height = "250" alt="WEBPROG"/> </th></td>
<p align = "right">
	<td> <img src = "pizza.jpg" width = "250" height = "250" alt="WEBPROG"/> </th></td>
<p align = "right">
	<td> <img src = "fries.jpg" width = "250" height = "250" alt="WEBPROG"/> </th></td>
</tr>
</table></center>

<br>
<br>
<br>

<center>
<font color = "white" font face = "Lucida Calligraphy">
TRIVIA QUESTIONS ABOUT ME <font size = "20">

<br>
<br>

<p id = "question1"> In what subject I am interested?</p>
<button type = "button" onclick="document.getElementById('question1').innerHTML='Science'"> Answer :)</button>
<br>
<p id = "question2"> I dream to be a _______?</p>
<button type = "button" onclick="document.getElementById('question2').innerHTML='Cardiologist'"> Answer :)</button>
<br>
<p id = "question3"> What is my first course?</p>
<button type = "button" onclick="document.getElementById('question3').innerHTML='BS Biology'"> Answer :)</button>
<br>
<p id = "question4"> What are the names of my dogs?</p>
<button type = "button" onclick="document.getElementById('question4').innerHTML='Toodles and Drixo'"> Answer :)</button>
<br>
<p id = "question5"> My future plan is to ___________?</p>
<button type = "button" onclick="document.getElementById('question5').innerHTML='travel around the world with my family'"> Answer :)</button>

<br>
<br>
<br>

<font color = "white" font face = "Lucida Calligraphy">
MY SOCIAL SITES <font size = "24">
<img src = "social_media.png" width = "850" height = "250" alt = "WEBPROG">

<br>
<br>

<img src="fb_icon.png" height="50"></a>
<img src = "insta.png" height ="50"></a>
<a href = "https://www.youtube.com/"><img src = "you_icon.ico" height="50"></a>

<br>
<font color = "white" font face = "Lucida Calligraphy">
<font size = "5">

<a href = "https://www.facebook.com/nicole.balubal">facebook.com/nicole.balubal</a><br>
<a href = "https://www.instagram.com/">instagram.com/_smnthncl</a>
</center>

<?php
// define variables and set to empty values
$nameErr = $nicknameErr = $emailErr = $homeErr = $genderErr = $websiteErr = $cellErr = "";
$name = $nickname = $email = $homeAdd = $gender = $comment = $website = $cellNo = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["nickName"])) {
    $nicknameErr = "Nickname is required";
  } else {
    $nickname = test_input($_POST["nickName"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$nickname)) {
      $nicknameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
  
  if (empty($_POST["homeAddress"])) {
    $homeErr = "";
  } else {
    $homeErr = test_input($_POST["homeAddress"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$homeAdd)) {
      $homeErr = "Only letters and white space allowed"; 
    }
  }
  
  if(empty($_POST["cellNum"])){
	$cellErr = "Cellphone number is required"
  } else {
	$cellNo = test_input($_POST["cellNum"]);
	//check if cellphone number is well-formed
	if(!filter_var($cellNo, FILTER_VALIDATE_INT)){
	$cellErr = "Invalid cellphone number";
	}
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

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<br>
<br>

<center>
<h2>Registration Form</h2>
</center>

<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Nickname: <input type="text" name="nickname" value="<?php echo $nickname;?>">
  <span class="error">* <?php echo $nicknameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Home Address: <textarea name="address" rows="5" cols="40"><?php echo $home;?></textarea>
  <br><br>

  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Cellphone Number: <input type="text" name="cpnum" value="<?php echo $number;?>">
  <span class="error">* <?php echo $numberErr;?></span>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
	<button id="btn" type="submit" name="btn-save" onclick="location.href='index.php';"><strong>SUBMIT</strong></button>

</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $nickname;
echo "<br>";
echo $email;
echo "<br>";
echo $home;
echo "<br>";
echo $comment;
echo "<br>";
echo $number;
echo "<br>";
echo $gender;
echo "<br>";
?>
</body>
</html>  