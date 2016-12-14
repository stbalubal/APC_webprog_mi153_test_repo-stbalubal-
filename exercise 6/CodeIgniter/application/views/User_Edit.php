<!DOCTYPE html> 
<html lang = "en">
<head> 
      <meta charset = "utf-8"> 
      <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/style.css"/>
</head>

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
<body>
<center>
<p>You can edit your details</p>

<?php echo validation_errors(); ?>
 
<?php echo form_open('views/User_Edit/'.$form_item['user_id']); ?>
    <table BORDER="1" BORDERCOLOR="BLACK" cellpadding="10px">
        <tr>
            <td><label for="name">Name</label></td>
            <td><input type="input" name="name" size="50" value="<?php echo $form_item['name'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="nickname">Nickname</label></td>
			<td><input type="input" name="nickname" size="50" value="<?php echo $form_item['nickname'] ?>" /></td>
		</tr>
		<tr>
            <td><label for="email">Email</label></td>
			<td><input type="input" name="email" size="50" value="<?php echo $form_item['email'] ?>" /></td>
		</tr>
		<tr>
            <td><label for="home">Home</label></td>
			<td><textarea name="home" rows="3" cols="30"><?php echo $form_item['home'] ?></textarea></td>
		</tr>
		<tr>
            <td><label for="gender">Gender</label></td>
			<td><input type="radio" name="gender" value="Female" <?php echo ($form_item['gender'])?'checked':'' ?>>Female
			<input type="radio" name="gender" value="Male" <?php echo ($form_item['gender'])?'checked':'' ?>>Male
			</td>

		</tr>
		
		<tr>
            <td><label for="number">Number</label></td>
			<td><input type="input" name="number" size="50" value="<?php echo $form_item['number'] ?>" /></td>
		</tr>
		<tr>
            <td><label for="comment">Comment</label></td>
            <td><textarea name="comment" rows="3" cols="30"><?php echo $form_item['comment'] ?></textarea></td>
        </tr>
    </table>    

	<input id="btn" type="submit" name="submit" value="Edit form item" /></td>

</form>
</body>
</html>