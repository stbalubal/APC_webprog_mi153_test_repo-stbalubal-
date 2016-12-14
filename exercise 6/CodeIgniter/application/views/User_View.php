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
		color: #FF0000;
		font-size:20px;
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
	
	.err {
		font-weight: bold;
		color: rgb(255,0,0);
	}
	
	table {
		font-size: 20px;
		font-family: Goudy Old Style;
		cellpadding: 5px;
		table-layout: fixed;
	}
	tr, td {
		width: 220px;
	}
	
</style>
<body>
<center>
<br>
<br>
<br>
<table cellpadding="5px">
	<tr>
		<td>
			<label for="name">Name:</label>
		</td>
		<td>
			<?php echo $form_item['name'];?>
		</td>
	</tr>
	
	<tr>
		<td>
			<label for="nickname">Nickname:</label>
		</td>
		<td>
			<?php echo $form_item['nickname'];?>
		</td>
	</tr>
	
	<tr>
		<td>
			<label for="email">E-mail:</label>
		</td>
		<td>
			<?php echo $form_item['email'];?>
		</td>
	</tr>
	
	<tr>
		<td>
			<label for="home">Home Address:</label>
		</td>
		<td>
			<?php echo $form_item['home'];?>
		</td>
	</tr>
	
	<tr>
		<td>
			<label for="gender">Gender:</label>
		</td>
		<td>
			<?php echo $form_item['gender'];?>
		</td>
	</tr>
	
	<tr>
		<td>
			<label for="number">Mobile Number:</label>
		</td>
		<td>
			<?php echo $form_item['number'];?>
		</td>
	</tr>
	
	<tr>
		<td>
			<label for="comment">Comment:</label>
		</td>
		<td>
			<?php echo $form_item['comment'];?>
		</td>
	</tr>
</table>
</body>
</head>
</html>
