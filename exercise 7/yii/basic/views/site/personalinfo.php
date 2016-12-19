<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About the user';
$this->params['breadcrumbs'][] = $this->title;
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
	
	p.info {
		font-size: 40px;
		color: BLACK;
		font-family: Gigi;
		text-align: center;
		font-weight: bold;
	}
	
	table {
		position: center;
	}
	img {
		margin-right: 20px;
		margin-top: 20px;
	}

	.all {
		align: center;
		position: relative;
	}
	
	body {
		background-image:url=("<?php echo Yii::$app->request->baseUrl . "/Images/bg.jpg";?>");
		background-attachment: fixed;
		table border:0;
		align:center; 
		cellpadding:15;
		font-family: Garamond;
		font-size:20px;
	}
	
</style>
<body>
<center>
<p class="info"> Basic Information </p>
<table border="0" cellpadding="5" >

	<tr>
		<td>
		<img border="0" src=
		<?php echo CHtml::image(Yii::app()->request->baseUrl.'/Images/me.jpg'
, 'me'); ?>>
		</td>
		
		<td>
		<img border="0" src=<?php echo Yii::$app->request->baseUrl . "/Images/me3.jpg";?> style="float:left" height=300>
		</td>
		
		<td>
		<img border="0" src=<?php echo Yii::$app->request->baseUrl . "/Images/me2.jpg";?> style="float:left" height=300>
		</td>
	</tr>
</table>
<br>
<br>

<center>
<table bgcolor="#fde9ec" BORDER="1" BORDERCOLOR="BLACK" cellpadding="4" width="30%">

	<tr>
		<td>
		<p class="intro stylee">Fullname: </p>
		</td>
		
		<td>
		<p class="intro">Rachel Anne Rondena Brillantes</p>
		</td>
	</tr>
	
	<tr>
		<td>
		<p class="intro stylee">Nickname:</p>
		</td>
		
		<td>
		<p class="intro">Rachel/Chel</p>
		</td>
	</tr>
	
	<tr>
		<td>
		<p class="intro stylee">Birthdate:</p>
		</td>
		
		<td>
		<p class="intro">March 04, 1997</p>
		</td>
	</tr>
	
	<tr>
		<td>
		<p class="intro stylee">Zodiac Sign:</p>
		</td>
		
		<td>
		<p class="intro">Pisces</p>
		</td>
	</tr>
	
	<tr>
		<td>
		<p class="intro stylee">Birthplace:</p>
		</td>
		
		<td>
		<p class="intro">Taytay, Rizal</p>
		</td>
	</tr>
	
</table>

</body>
</html>
	