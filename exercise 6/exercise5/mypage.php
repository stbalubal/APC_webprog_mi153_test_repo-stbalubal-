<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $name = $_POST['name'];
 $nickname = $_POST['nickname'];
 $email = $_POST['email'];
 $home = $_POST['home'];
 $gender=$_POST['gender'];
 $number = $_POST['number'];
 $comment = $_POST['comment']; 
 // variables for input data

 // sql query for inserting data into database
 $sql_query = "INSERT INTO users(name,nickname,email,home,gender,number,comment) VALUES('$name','$nickname','$email','$home','$gender','$number','$comment')";
 
 // sql query execution function
 if(mysqli_query($link, $sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Inserted Successfully ');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while inserting your data');
  </script>
  <?php
 }
 // sql query execution function
}
?>

<?php
// define variables and set to empty values
$nameErr = $nicknameErr = $emailErr = $homeErr = $genderErr = $numberErr = "";
$name = $nickname = $email = $home = $gender = $number = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
	  $name = "";
    }
  }
  
  if (empty($_POST["nickname"])) {
    $nicknameErr = "Nickname is required";
  } else {
    $nickname = test_input($_POST["nickname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nicknameErr = "Only letters and white space allowed"; 
	  $nickname = "";
    }
  }

  if (!empty($_POST["email"])) {
    $email = test_input($_POST["email"]);
   // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
	  $email = "";
    }
  }	else {
		$emailErr = "Email is required";
		$email = "";
  }
  
	if (empty($_POST["home address"])) {
    $home = "";
  } else {
    $home = test_input($_POST["home address"]);
  }
  
	if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  
	if (!empty($_POST["number"])) {
		$number = test_input($_POST["number"]);
		if (strlen($number) < 11) {
		$numberErr = "invalid mobile number";
		$number = "";
			if (!$number[0]) {
				$numberErr = "invalid format";
				$number = "";
			}
		}
	} else{
		$numberErr = "Number is required";
	}
    
	if (empty($_POST["comment"])) {
		$comment = "";
	} else {
		$comment = test_input($_POST["comment"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

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

<br>
<br>
<br>

<center>
<h2>Registration Form</h2>

<p class = "form"><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <br><br>
  
  Nickname: <input type="text" name="nickname" value="<?php echo $nickname;?>">
  <br><br>
  
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <br><br>
  
  Home Address: <textarea name="home" rows="5" cols="40"><?php echo $home;?></textarea>
  <br><br>
  
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <br><br>
  
  Cellphone Number: <input type="text" name="number" value="<?php echo $number;?>">
  <br><br>
  
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  
  <button id="btn" type="submit" name="btn-save" onclick="location.href='index.php';"><strong>SUBMIT</strong></button>
</form>
</center>

</body>
</html>  