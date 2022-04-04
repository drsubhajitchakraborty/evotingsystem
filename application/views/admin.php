<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Online Voting system</title>

	
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/exxt.css'); ?>">  
</head>


<body  >
<center>

  <div id="container" class="bck" ><br>
         <div>

		 <?php echo form_open("Welcome/index") ?>
		 <input type="submit" name="home" value="HOME" class="hom"></form>

		 <?php echo form_open("Welcome/admin") ?>
		 <input type="submit" name="admin" value="ADMIN" class="ad"></form>

		 <?php echo form_open("Welcome/contact") ?>
		 <input type="submit" name="contact" value="CONTACT" class="con"></form>

		 <?php echo form_open("Welcome/result") ?>
		 <input type="submit" name="result" value="RESULT" class="res"></form>
		 
		 </div>


          <div><h1>NATIONAL VOTER SERVICE PORTAL</h1></div>

          <img src="<?=base_url('assets/a.png'); ?>" class= "size" >
	

          <div><h2><center>ELECTION COMMISSION OF INDIA </center></h2></div>

	
		  <?php echo form_open("Welcome/admin") ?>

		  <b><p class="s"> Enter Your User Name :
		                   <input type="text" name="epic" placeholder="Epic number" class="i">
	      </p></b>

          <b><p class="s"> Enter Your Aadhaar Number :
		                   <input type="text" name="aadhaar" placeholder="Aadhar Number" class="i">
	      </p></b>

        <b><p class="s"> Enter Your Password :
		                   <input type="password" name="pwd" placeholder="Password" class="i">
	    </p></b>
			

		<br>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

		<input type="submit" name="Login" value="Login" class="t">
        

		<br>
        <span class="one">
			<br>
	        <?php echo isset($error)?$error:"" ;  ?>
	        <?php echo isset($blank)?$blank:"" ;  ?>
        </span>

	    <br><br><br><br><br><br><br><br><br>
	
	    <p class="footer"><?php echo anchor("Welcome/developer","Developed by SUBHAJIT CHAKRABORTY") ?></p> 

    </div>

</center>	
</body>
</html>