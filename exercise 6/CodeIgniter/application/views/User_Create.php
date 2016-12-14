<!DOCTYPE html>
<html>
<head>
</head>

	<style>

	<style>
	
	{
		background: url(css/pics/pastel_1.jpg);
		background-repeat: no-repeat center fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
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
		color:rgb(0, 0, 0);
	}
	
	img.myself{
		width: 950px;
		height: 200px;
		position: center;
	}
	
	li.aboutMe{
		font-family: Lucida Calligraphy;
		font-size:20pt;
		color:rgb(0, 0, 0);
	}
	
	p{
		text-align:center;
		font-family:Lucida Calligraphy;
		font-size: 20pt;
		color: rgb(0, 0, 0); 
	}
	
	p.form{
		font-size: 16pt;
		color:rgb(0, 0, 0);
		font-family: Lucida Calligraphy;
	}
</style>
</style>
<body>
<center>
<p><a href="<?php echo site_url('form'); ?>">View List</a> | <a href="<?php echo site_url('form/create'); ?>">Add Details</a></p>
				

<p class="con">You can also leave a comment here in my page...</p>
<p id="form">Just enter the following details: </p>
<p><span class="error"><u>* required field.</u></p>

<?php echo validation_errors(); ?>
 <?php echo form_open('form/create'); ?>    
   
<table BORDER="1" BORDERCOLOR="BLACK" cellpadding="5px">
	<tr> 
		<td>
			<label for="name">Name:</label>
		</td>
		<td>
			<input type="text" name="name" size="30" />
			<span class="error">*</span>
		</td>
	</tr>
	
	<tr>
		<td>
			<label for="nickname">Nickname:</label>
		</td>
		<td>
			<input type="text" name="nickname" size="30" />
			<span class="error">*</span>
		</td>
	</tr>
		
	<tr>
		<td>
			<label for="email">E-mail:</label>
		</td>
		<td>
			<input type="text" name="email" size="30" />
			<span class="error">*</span>
		</td>
	</tr>
		
	<tr>
		<td>
			<label for="home">Home Address:</label>
		</td>
		<td>
			<textarea name="home" rows="5" cols="30"></textarea>
		</td>
	</tr>

	<tr>
		<td>
			<label for="gender">Gender:</label>
		</td>
		<td>
			<input type="radio" name="gender"<?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
			<input type="radio" name="gender"<?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
			<span class="error">*</span>
		</td>
	</tr>

	<tr>
		<td>
			<label for="number">Mobile Number:</label>
		</td>
		<td>
			<input type="text" name="number" size="30" />
			<span class="error">*</span>
		</td>
	</tr>	
	
	<tr>
		<td>
			<label for="comment">Comment:</label>
		</td>
		<td>
			<textarea name="comment" rows="5" size="30"></textarea>
		</td>
	</tr>
</table>
<br>	
		<input id="btn" type="submit" name="btn-save" onclick="location.href='form';">
</form>
</center>
</body>
</html>