<!DOCTYPE html PUBLIC>
<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $name = $_POST['name'];
 $nickname = $_POST['nickname'];
 $email = $_POST['email'];
 $home = $_POST['home'];
 $gender = $_POST['gender'];
 $number = $_POST['number'];
 $comment = $_POST['comment'];
 
// sql query for inserting data into database
$sql_query = "INSERT INTO users(name, nickname, email, home, gender, number, comment) VALUES('$name','$nickname','$email','$home','$gender','$number','$comment')";
mysqli_query($link, $sql_query);
}
?>

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
</head>
<body>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>ADD YOUR DATA</title>

<center>

<div id="header">
 <div id="content">
    <label><font color = "white" font face = "Lucida Calligraphy">Please fill out the form.<font size = "28"></label>
    </div>
</div>

<br> 

<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
	<td align="center"><a href="index.php"><font size="4" font color = "white">Back to Main Page</font></a><br><br><br></td>
    </tr>
	
    <tr>
    <td><input type="text" name="name" placeholder="Name" required /><br><br></td>
    </tr>
	
    <tr>
    <td><input type="text" name="nickname" placeholder="Nickname" required /><br><br></td>
    </tr>
	
    <tr>
    <td><input type="text" name="email" placeholder="Email" required /><br><br></td>
    </tr>
	
	<tr>
    <td><input type="text" name="home" placeholder="Home Address" required /><br><br></td>
    </tr>
	
	<tr>
    <td><input type="text" name="gender" placeholder="Gender" required /><br><br></td>
    </tr>
	
	<tr>
    <td><input type="text" name="number" placeholder="Cellphone number" required/><br><br></td>
    </tr>
	
	<tr>
    <td><input type="text" name="comment" placeholder="Comment" required /><br><br></td>
    </tr>
	
	<tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
	
    </table>
    </form>
    </div>
</div>
</center>
</body>