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
 if(mysqli_query($link, $sql_query) == true)
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
$nameErr = $nicknameErr = $emailErr = $genderErr = $numberErr = $homeErr = "";
$name = $nickname = $email = $gender = $comment = $number = $home = "";

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
    
  if (empty($_POST["home address"])) {
    $home = "";
  } else {
    $home = test_input($_POST["home address"]);
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

<!DOCTYPE html>
<html>
<head>
</head>

	<style>

	p.intro {
		font-size: 20px;
		color: #000000;
		font-family: Goudy Old Style;
		text-align: Center; 
	}
	
	p.stylee {
		font-weight: bold;
	}
	
	footer {
		font-family: Times New Roman;
		font-size: 17px;
		font-color: white;
	}

	p.hob {
		font-size: 40px;
		color: BLACK;
		font-family: Gigi;
		text-align: center;
		font-weight: bold;
	}
	
	p.hob2 {
		font-size: 25px;
		font-family: Curlz MT;
		text-align:center;
		font-weight: bold;
	}

	p.con {
		font-size: 40px;
		color: BLACK;
		font-family: Gigi;
		text-align: center;
		font-weight: bold;
	}
	
	.error {
		color: Red;
		font-size:11px;
	}
	
	.error1 {
		color: Red;
		font-size:11px;
	}
	img {
		margin-right: 20px;
		margin-top: 20px;
	}
	body {
		background-image: url("<?php echo base_url('css/uploads/bg.jpg')?>");
		background-attachment: fixed;
		table border:0;
		align:center; 
		cellpadding:15;
		font-family: Garamond;
		font-size:20px;
	}
	
	.all {
		align: center;
		position: relative;
	}
	
	#btn {
		font-family: Garamond;
		font-size:20px;
	}
	
	
</style>
<body>
<center>

<p><span class="error">* required field.
<p class="con">You can also leave a comment here in my page...</p>
<p id="form">Just enter the following details: </p>

	<br>
	<u>Don't forget to click submit </u></span></p>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		
 <div id="content">
    <form method="post">
    <table align="center">
	
    <tr>
   
    </tr>
	
    <tr>
		<td>
			<label>Name:</label>
		</td>
		<td>
			<input type="text" name="name" placeholder="Name" value="<?php echo $name;?>">
			<span class="error"> <?php echo $nameErr;?></span>
		</td>
    </tr>
	
    <tr>
		<td>
			<label>Nickname:</label>
		</td>
		<td>
			<input type="text" name="nickname" placeholder="Nickname" value="<?php echo $nickname;?>">
			<span class="error">* <?php echo $nicknameErr;?></span></td>
		</td>
    </tr>
	
    <tr>
		<td>
			<label>Email:</label>
		</td>
		<td>
			<input type="text" name="email" placeholder="Email" value="<?php echo $email;?>">
		</td>
    </tr>
	
	<tr>
		<td>
			<label>Home Address:</label>
		</td>
		<td>
			<textarea name="home" placeholder ="Home Address" rows ="3" cols="30"><?php echo $home;?></textarea>></span>
		</td>
    </tr>

	<tr>
		<td>
			<label>Gender:</label>
		</td>
		<td>
			<input type="radio" name="gender"
				<?php if (isset($gender) && $gender=="female") echo "checked";?>
					value="female">Female
			<input type="radio" name="gender"
				<?php if (isset($gender) && $gender=="male") echo "checked";?>
				value="male">Male
		<td>
    </tr>

	<tr>
		<td>
			<label>Mobile Number:</label>
		</td>
		<td>
			<input type="text" name="number" placeholder="Cellphone Number" value="<?php echo $number;?>">
		</td>
    </tr>

	<tr>
		<td>
			<label>Comment:</label>
		</td>
		<td>
			<textarea name="comment" placeholder="Comment" rows="4" cols="30"><?php echo $comment;?></textarea></span>
		</td>
    </tr>
</table>
    
	<button id="btn" type="submit" name="Submit"><strong>SUBMIT</strong></button>
</form>
</div>

</body>
</html>