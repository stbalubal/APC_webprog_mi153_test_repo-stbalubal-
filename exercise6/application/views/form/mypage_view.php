<!DOCTYPE HTML>
<html>
<head> 
<style>
	
	body{
		background-image: url("<?php echo base_url('css/pics/pastel_1.jpg')?>");
		background-repeat: no-repeat center fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	
	}
	
	div.container {
    width: 100%;
    border: 1px solid black;
	color: black;
	text-align: center;
	clear: center;
	font-size:large;
}

	img.upper{
		position:center;
		width:200px;
		height:200px;
	}
	
	p.intro{
		text-align:center;
		font family:Lucida Calligraphy;
		font-size: 140%;
		color:rgb(0, 0, 0);
	}
	
	img.myself{
		width: 970px;
		height: 160px;
		position: center;
	}
	
	li.aboutMe{
		font-family: Lucida Calligraphy;
		font-size:140%;
		color:rgb(0, 0, 0);
	}
	
	p{
		text-align:center;
		font-family:Lucida Calligraphy;
		font-size: 50%;
		color: rgb(0, 0, 0); 
	}
	
	p.form{
		font-size: 50%;
		color:rgb(0, 0, 0);
		font-family: Lucida Calligraphy;
	}
	.hehehe {
		width: 250px;
		height: 150px;
	}
	
	#btn{
		text-align:center;
		font-family:Lucida Calligraphy;
		font-size: 50%;
		color: rgb(0, 0, 0);
	}
	
	td, li {
		margin-left: 350px;
	}
	
	.hi {
		font-size: 30px;
	}
</style>
</head>

<body>
<br>
<center>
<font color = "black" font face = "Lucida Calligraphy">
<h1> It's All About ME! &#9825; <font-size = "400"></h1>

<br>

<img class = "upper" src = "<?php echo base_url('css/pics/face.png')?>"  alt="web"/>
</center>

<body>
<p class = "intro"> Hello, my name is Samantha Nicole<br>
My friends call me Sam, Sam-sam or Sammy<br>
Want to know more about me? :)<br></p>

<br>
<br>
<br>
<br>

<center> 
<img class="myself" src = "<?php echo base_url('css/pics/about_me.png')?>" alt = "web"/>

<table width='100%'>
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
<font color = "black" font face = "Lucida Calligraphy">
<h1>MY FAVORITES &#9825; <font size = "28"></h1>
<table>
	<tr>
<p align = "right">
	<td> <img src = "<?php echo base_url('css/pics/chocolates.jpg')?>" width = "250" height = "250" alt="WEBPROG"/> </th></td>
<p align = "right">
	<td> <img src = "<?php echo base_url('css/pics/rr_icecream.jpg')?>" width = "250" height = "250" alt="WEBPROG"/> </th></td>
<p align = "right">
	<td> <img src = "<?php echo base_url('css/pics/pizza.jpg')?>" width = "250" height = "250" alt="WEBPROG"/> </th></td>
<p align = "right">
	<td> <img src = "<?php echo base_url('css/pics/fries.jpg')?>" width = "250" height = "250" alt="WEBPROG"/> </th></td>
</tr>
</table></center>

<br>
<br>

<center>

<img class = "hehehe" src = "<?php echo base_url('css/pics/Trivia.png')?>">

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
</body>
</html>  