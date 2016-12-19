<!DOCTYPE html>
<html>
<head>
</head>

	<style>

	<style>
	
	html{
		background: url(css/pics/pastel_1.jpg);
		background-repeat: no-repeat center fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		
		table border:0;
		align:center;
		cellpadding:15;
		font-family:Lucida Calligraphy;
		font-size: 20pt;
	}
	
	
	p{
		text-align:center;
		font-family:Lucida Calligraphy;
		font-size: 20pt;
		color: rgb(0, 0, 0); 
	}
	
	#form{
		font-size: 16pt;
		color:rgb(0, 0, 0);
		font-family: Lucida Calligraphy;
	}
	
	#btn {
		font-family: Lucida Calligraphy;
		font-size:20px;
	}
</style>
</style>
<body>
<center>
<p><a href="<?php echo site_url('Form'); ?>">View List</a> | <a href="<?php echo site_url('Form/User_Create'); ?>">Add Details</a></p>
				
				
<p id="form">Just enter the following details: </p>
<p><span class="error"><u>* required field.</u></p>

<?php echo validation_errors(); ?>
 <?php echo form_open('Form/User_Create'); ?>    
   
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
			<input type="radio" name="gender"<?php if (isset($gender) && $gender=="Female") echo "checked";?> value="Female">Female
			<input type="radio" name="gender"<?php if (isset($gender) && $gender=="Male") echo "checked";?> value="Male">Male
			<span class="error">*</span>
		</td>
	</tr>

	<tr>
		<td>
			<label for="number">Cellphone Number:</label>
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
		<input id="btn" type="submit" name="btn-save" onclick="location.href='mypage_view';">
</form>
</center>
</body>
</html>