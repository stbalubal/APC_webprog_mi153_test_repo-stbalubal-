<!DOCTYPE html>
<html>
<head>
</head>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/style.css"/>
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
	body {
		background-image: url("<?php echo base_url('css/uploads/bg.jpg')?>");
		background-attachment: fixed;
		table border:0;
		align:center; 
		cellpadding:15;
		font-family: Garamond;
		font-size:20px;
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
	
	.all {
		align: center;
		position: relative;
	}
</style>
<body>

<center>
<p class="con">You can reach me through the following sites</p>
<?php echo validation_errors(); ?>
<table class="t1" align="middle" bgcolor="#fde9ec" BORDER="1" BORDERCOLOR="BLACK" cellpadding="4" width="30%" style="float:center">
	<tr>
		<td> 
		<p class="intro stylee">Facebook</p>
		</td>
	
		<td>
		
		<center><p class="intro stylee"><a href = "https://www.facebook.com/momoxielle" target="_blank"> <img src="<?php echo base_url('css/uploads/fb.png')?>" height="80" align="center"></a><figcaption>Rachel Anne Brillantes</figcaption></center></p>
		</td>
	</tr>
	
	<tr>
		<td> 
		<p class="intro stylee">Twitter</p>
		</td>
		
		<td> 
		<center><p class="intro stylee"><a href = "https://www.twitter.com/_raimssi" target="_blank"> <img src="<?php echo base_url('css/uploads/twitter.png')?>" height="80" align="center"></a><figcaption>@_raimssi</figcaption></center></p>
		</td>
	</tr>
	
	<tr>
		<td> 
		<p class="intro stylee">Instagram</p>
		</td>
		
		<td>
		<center><p class="intro stylee"><a href = "https://www.instagram.com/_raimssi" target="_blank"> <img src="<?php echo base_url('css/uploads/insta.png')?>" height="80" align="center"></a><figcaption>@_raimssi</figcaption></center></p>
		</td>
	</tr>
	
	<tr>
		<td> 
		<p class="intro stylee">Youtube</p>
		</td>
		
		<td>
		<center><p class="intro stylee"><a href = "https://www.youtube.com/channel/UC3jO-jb9FzhcM21GJ-AY4aA" target="_blank"> <img src="<?php echo base_url('css/uploads/yt.png')?>" height="50" align="center"></a><figcaption>Rachel Anne Brillantes</figcaption></center></p>
		</td>
	</tr>
	
	<tr>
		<td> 
		<p class="intro stylee">Snapchat</p>
		</td>
		
		<td>
		<center><p class="intro stylee"><img class="net" src="<?php echo base_url('css/uploads/snapchat.png')?>" height="50" align="center"></a><figcaption>@momoxielle</figcaption></center></p>
		</td>
	</tr>
	
	<tr>
		<td> 
		<p class="intro stylee">Gmail</p>
		</td>
		
		<td>
		<center><p class="intro stylee"><img class="net" <img src="<?php echo base_url('css/uploads/gmail.png')?>" height="50" align="center"></a><figcaption>Momoxielle@gmail.com</figcaption></center></p>
		</td>
	</tr>
</table>

</body>
</html>