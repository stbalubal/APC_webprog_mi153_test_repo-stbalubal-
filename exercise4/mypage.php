<!DOCTYPE HTML>
<html>
<head>
<title>Hello there, welcome to my first CSS Page!</title>
	<style>
	h1{font-size:20pt; font-family: papyrus; font-weight: bold; color: #000000; text-align:center;}
	
	h3{font-size:10pt; font-family: papyrus; font-weight: bold; color: #000000; text-align:center;}
	
	p{text-align:center; font-family: rockwell; color: #000000; font-size:8pt;}
	
	td.intro{font-size:8pt; font-family:rockwell; color:#000000;}
	
	li.add{font-size:8pt; font-family:rockwell; color:#000000;}
	
	body{background-image: url("images.jpg");
		 background-repeat: repeat;}
	img.intro{positon: right;
           width:100px;
           height: 100px;
	}
 
	img.favorite{position:right;
			width:150px;
			height:150px;
	}
	
	p.favorites{text-align:right}
     </style> 

<h1>Hello there, Welcome to my Page!</h1>
<table>
	<tr>
	<td> <img class="intro" src = "face.png" alt="web"/></th></td>
<td class="intro"> I am Samantha Nicole T. Balubal <br><br> You can call me Sam or Sammy :) <br><br> I love reading books, browsing the net and hang-out with my friends </td><b>
</tr>
</table>
</center>
<font color = "black">
</head>

<body>

<center><br>
<h3>FAVORITES:</h3><br>
<table>
	<tr>
<p class = "favorites">
	<td> <img class="favorite" src = "chocolates.jpg" alt="WEBPROG"/> </th></td>
<p class = "favorites">
	<td> <img class="favorite" src = "rr_icecream.jpg" alt="WEBPROG"/> </th></td>
<p class = "favorites">
	<td> <img class="favorite" src="fries.jpg" alt="WEBPROG"/></th></td>
</tr>
</table></center>
<br>


<h3>Additional Information About Me:</h3>
	<ul>
		<li class="add"><em>I am interested in science, and I love experimenting.</em></li>
		<li class="add"><em>I love reading science book and books that are related to medicine</em></li>
		<li class="add"><em>I learned to drive at the age of 15</em></li>
		<li class="add"><em>I am afraid of dogs but I like to have one</em></li>
		<li class="add"><em>Aside from reading books, I also play badminton.</em></li>

<center>
<h3>MY FAVORITE WEBSITES:</h3>
<a href = "https://www.facebook.com/nicole.balubal" target="_blank"> <img src="fb_icon.png" height="30"></a>
<a href = "https://www.instagram.com/" target="_blank"><img src = "insta.png" height ="30"></a>
<a href = "https://www.youtube.com/"><img src = "you_icon.ico" height="30"></a>
<br>

<h3>TRIVIA QUESTIONS ABOUT ME:</h3>
<p id="question1">At what age I started driving?</p> 
<p id="question2">In what subject I am interested?</p>
<p id="question3">What animal I am afraid of?</p>
<p id="question4">What kind of book I am reading?</p>
<p id="question5">What kind of sports I am playing?</p>
<button type="button" onclick="document.getElementById('question1').innerHTML='15 years old'">Trivia 1 Answer :)</button>
<button type="button" onclick="document.getElementById('question2').innerHTML='Science'">Trivia 2 Answer :)</button>						   
<button type="button" onclick="document.getElementById('question3').innerHTML='Dog'">Trivia 3 Answer :)</button>
<button type="button" onclick="document.getElementById('question4').innerHTML='Science and Medical Books'">Trivia 4 Answer :)</button>
<button type="button" onclick="document.getElementById('question5').innerHTML='Badminton'">Trivia 5 Answer :)</button>
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

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Fullname: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  
  Nickname: <input type="text" name="name" value="<?php echo $nickname;?>">
  <span class="error">* <?php echo $nicknameErr;?></span>
  <br><br>
  
  E-mail Address: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  
  Home Address: <input type="text" name="name" value="<?php echo $homeAdd;?>">
  <span class="error">* <?php echo $homeErr;?></span>
  <br><br>
  
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  
  Cellphone Number:
  <input type="text" name="name" value="<?php echo $cellNo;?>">
  <span class="error">* <?php echo $cellErr;?></span>
  <br><br>
  
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $nickname;
echo "<br>";
echo $email;
echo "<br>";
echo $homeAdd;
echo "<br>";
echo $gender;
echo "<br>";
echo $cellNo;
echo "<br>";
echo $comment;
?>

</body>
</html>