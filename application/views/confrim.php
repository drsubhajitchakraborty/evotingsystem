<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	body 
	{
		font: 13px/20px normal Helvetica, Arial, sans-serif;
	    margin:0px;
		
	}
	.one 
	{
		color: red;
	}
	.two 
	{
		color: black;
	}

	h1 
	{
		color:black;
		font-size: 25px;
		font-weight: bold;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	.footer 
	{
		font-weight: bold;
		text-align: right;
		color:black;
		font-size: 14px;
		line-height: 43px;
		padding: 0 10px 0 0px;
		margin: 1px 0 0 0;
	}
	
	.bck
	{
		background: rgb(224,82,16);
        background: linear-gradient(180deg, rgba(224,82,16,1) 16%, 
		                                    rgba(255,255,255,1) 50%, 
											rgba(26,255,0,1) 94%);
	    							
	}
	.size
	{
        width:120px;
		height:150px;
	}
	.t
	{
		height:40px;
		width: 70px;
	}
	.i
	{
		height:20px;
		width: 180px;
	}

	</style>
</head>


<body >
<center>

<div id="container" class="bck"  ><br>
<h1>NATIONAL VOTER SERVICE PORTAL</h1>

<img src="<?=base_url('assets/a.png'); ?>" class= "size" >
	
<h1>Thank you for voting !!</h1>
	<br><br><br><br>
    <?php
    echo anchor("Welcome/index","Back");
    ?>
	
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<p class="footer"><?php echo anchor("welcome/developer","Developed by SUBHAJIT CHAKRABORTY") ?></p>
	   
	</center>
</div>
</body>
</html>