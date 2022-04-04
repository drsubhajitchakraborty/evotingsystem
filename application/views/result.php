<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Online Voting system</title>

	
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/exxt.css'); ?>">  
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/ext.css'); ?>">  
</head>
<style type="text/css">

#size
	{
        width:100px;
		height:120px;
	}

   #h
   {
      background-color: #ffa366;
      height:20px;
      width:590px;
   } 
   u{
       color:#990000;
   }

   h1
   {
       font-weight:bold;
   }

   h2
   {
       
       color:black;
   }

   
	.tb
	{
		 color:black ;
         font-weight:bold;
	}

    .thd
    {
        color:white;
    }

    .tbl
    {
        position:absolute;
        left:60px;
        font-size:16px;
        width:550px;
        
    }

    .pubb
    {
        position:absolute;
        left:670px;
        bottom:185px;
        font-size:18px;
        font-weight:bold;
        color:black;
    }

    .pub
    {
        position:absolute;
        left:660px;
        
        font-size:18px;
        font-weight:bold;
        color:black;
    }

    .cd
    {
        position:absolute;
        left:240px;
        
    }
    .fx
    {
        position:absolute;
        left:670px;
        top:650px;
        font-weight:bold;
        font-size:18px;
        color:black;
    }

    .fix
    {
        position:absolute;
        left:670px;
        top:678px;
        
        font-weight:bold;
        font-size:18px;
        color:black;

    }

    .cl
    {
       color:red;
    }


</style>

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

          <img src="<?=base_url('assets/a.png'); ?>" id= "size" >
	

          <div><h2 ><center>ELECTION COMMISSION OF INDIA </center></h2></div>

	
          <br>

          <h1 id="h">Result is Coming Soon!!</h1><br>
          <h2 class="cd">CANDIDATE  DETAILS</h2><br><br><br>

        <div >
           <table class="tbl">
	
               <tr>
	              <thead class="thd" >
	                <td>Serial Number</td>	
	                <td>PARTY NAME</td>
	                <td>CANDIDATE NAME</td>
	                <td>PARTY SYMBOL</td>
	              </thead>
               </tr>    

                  <tbody class="tb">
	           <tr>
	               <td>1</td>
	               <td >Aam Admi Party</td>
	               <td>Arvind Kejriwal</td>
	               <td> IMAGE </td>
	            </tr>

	           <tr>
	              <td>2</td>
	              <td>All India Trinamool Congress</td>
	              <td>Mamata Banerjee</td>
	              <td>IMAGE</td>
	           </tr>

	           <tr>
	              <td>3</td>
	              <td>Bharatiya Janata Party</td>
	              <td>Narendra Modi</td>
	              <td>IMAGE</td>
	
               </tr>

	           <tr>
	              <td>4</td>
	              <td>Communist Party of India (Marxist)</td>
	              <td>Buddhadeb Bhattacharya</td>
	              <td>IMAGE</td>

	           </tr>

	           <tr>
	              <td>5</td>
	              <td>Indian National Congress</td>
	              <td>Rahul Gandhi</td>
	              <td>IMAGE</td>
	
               </tr>

	           <tr>
	              <td>6</td>
	              <td>NOTA</td>
	              <td>WXYZ</td>
	              <td>IMAGE</td>
	
               </tr>
                 </tbody>


            </table>

        </div>
<div>
        <p class="pub">* <u>Result Publishing Date is 32/99/7009 at Night 223.00am.</u>
                 <br><br><br></p>

      <p class="pubb"> Any Report or Query  <?php echo mailto("complaints@eci.gov.in","   Click here for Write Mail") ?>
      to election commissioner.</p><br>

      <p class="fx">Control Room:<span class="cl"> 23052220, 23052221 </span></p><br>

      <p class="fix">Tollfree Number:<span class="cl"> 1950 </span></p>
</div>
	

		<br>
        <span class="one">
			<br>
	        <?php echo isset($error)?$error:"" ;  ?>
	        <?php echo isset($blank)?$blank:"" ;  ?>
        </span>

	    <br><br><br><br><br><br><br><br><br><br><br><br><br>
	
	    <p class="footer"><?php echo anchor("Welcome/developer","Developed by SUBHAJIT CHAKRABORTY") ?></p> 

    </div>

</center>	
</body>
</html>