<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Online Voting system</title>

	<style type="text/css">
	body 
	{
		font: 13px/20px sans-serif;
		color: #4F5155;
	}

	.one 
	{
		color: black;
	}

	h1 {
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	   }

	   

	#body 
	{
		margin: 0 15px 0 15px;
	}

	p.footer 
	{
		text-align: center;
		font-size: 14px;
		border-top: 1px solid #D0D0D0;
		line-height: 43px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
		font-weight:bold;
        
	}
table
{
    border: 3px solid black;
    padding:8px;
    width:800px;
    text-align: center;
    border-collapse: collapse;
    font-size: 19px;	
}

td
{
    border: 3px solid black;
	height:35px;
}

thead{
	background-color:#1a1aff;
	height:20px;
}

tr:hover
{
     background-color: #00ff00;
}

.t
{
	height:40px;
	width: 120px;
	font-weight:bold;
	border-radius:10px;
	background-color:red;
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
        width:100px;
		height:120px;
	}

</style>

<script src="<?=base_url('assets/jquery-3.6.0.min.js'); ?>"></script>


</head>

<body class="bck">
<center>
<div id="container" class="one">

   
   <img src="<?=base_url('assets/a.png'); ?>" class= "size" >
   <span class="one">
	<h1><center><b> GOVT OF INDIA</b></center></h1>
   </span>
    <h2><center><u>Choose any one candidate</u></center></h2>
	
	
	<?php echo form_open('Welcome/vote')?><br>
<table>
	
<tr>
	<thead >
	<td>Serial Number</td>	
	<td>PARTY NAME</td>
	<td>CANDIDATE NAME</td>
	<td>PARTY SYMBOL</td>
	<td> ALERT </td>
	<td> SELECTION </td>
	</thead>
</tr>    

<tbody class="tb">

  
	<tr>
	<td>1</td>
	<td >Aam Admi Party</td>
	<td>Arvind Kejriwal</td>
	<td> IMAGE </td>
	<td id="aap"></td>
	<td><?php echo form_radio('select', 'Aam Admi Party'); ?></td>
	</tr>
  

	<tr>
	<td>2</td>
	<td>All India Trinamool Congress</td>
	<td>Mamata Banerjee</td>
	<td>IMAGE</td>
	<td id="tmc"></td>
	<td><input type="radio" name="select" value="All India Trinamool Congress" ></td>
	</tr>

	<tr>
	<td>3</td>
	<td>Bharatiya Janata Party</td>
	<td>Narendra Modi</td>
	<td>IMAGE</td>
	<td id="bjp"></td>
	<td><input type="radio" name="select" value="Bharatiya Janata Party" ></td>
    </tr>

	<tr>
	<td>4</td>
	<td>Communist Party of India (Marxist)</td>
	<td>Buddhadeb Bhattacharya</td>
	<td>IMAGE</td>
	<td id="cpim"></td>
	<td><input type="radio" name="select" value="Communist Party of India (Marxist)" ></td>
	</tr>

	<tr>
	<td>5</td>
	<td>Indian National Congress</td>
	<td>Rahul Gandhi</td>
	<td>IMAGE</td>
	<td id="cong"></td>
	<td><input type="radio" name="select" value="Indian National Congress" ></td>
    </tr>

	<tr>
	<td>6</td>
	<td>NOTA</td>
	<td>WXYZ</td>
	<td>IMAGE</td>
	<td id="nota"></td>
	<td><?php echo form_radio('select', 'Nota'); ?></td>
    </tr>

	
</tbody>

</tr>
</table>
<br>
<input type="submit" name="submit" value="Submit" class="t">
<input type="reset" name="reset" value="Reset" class="t">&nbsp;&nbsp;&nbsp;
<?php echo anchor("Welcome/index","Go back");?>


</center>
<br><br><br><br><br><br><br>
<b>
<p>* If anyone do Any kind of malicious act on this website ,this will be a punishable offence.</p>
<p>* This website is designed, developed and maintained by SUBHAJIT CHAKRABORTY of Citizen of India.</p>
<p>* Though all efforts have been made to ensure the accuracy and currency of the content on this website, 
the same should not be construed as a statement of law or used for any legal purposes.</p>
<p>* In case of any ambiguity or doubts, users are advised to verify/check with the Department(s) and/or other source(s),
and to obtain appropriate professional advice.</p>
<p>* Under no circumstances will the Election Commission of India be liable for any expense, 
loss or damage including,without limitation, indirect or consequential loss or damage, or any expense, 
loss or damage whatsoever arising from use,
or loss of use, of data, arising out of or in connection with the use of this website.</p>
<p>* These terms and conditions shall be governed by and construed in accordance with the Indian Laws. 
Any dispute arising under these terms and conditions shall be subject to the jurisdiction of the courts of India.</p> 

</b>
<p class="footer"><?php echo anchor("welcome/developer","Developed by SUBHAJIT CHAKRABORTY") ?></p>

</body>
</html>