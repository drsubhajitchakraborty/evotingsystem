<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

   

    <style type="text/css">

    .i
    {
        position:relative;
        float:left;
        
    }
    .pi
    {
        position:relative;
        float:left;
      
        
    }

    #hom2
	{
		height:31px;
		width: 80px;
		font-weight:normal;
		border-radius:9px;
		background-color:#ff1a1a;
		float:left;
		position: fixed;
        left: 1250px;
        
		font-size:13px;
		text-decoration:none
	}
    #hom2:hover
	{
		background-color:#e60000;
	}

    #ad
	{
		height:31px;
		width: 80px;
		font-weight:normal;
		border-radius:9px;
		background-color: #cc33ff;
		float:left;
		position: fixed;
        left: 1250px;
        top:80px;
		font-size:13px;
		text-decoration:none
	}
	#ad:hover
	{
		background-color: #bf00ff;
	}
	#res
	{
		height:31px;
		width: 80px;
		font-weight:normal;
		border-radius:9px;
		background-color:#00cc88;
		float:left;
        top:132px;
		font-size:13px;
		position: fixed;
        left: 1250px;
	}
	#res:hover
	{
		background-color:  #00b377;
	}
	#con
	{
		height:31px;
		width: 80px;
		font-weight:normal;
		border-radius:9px;
		font-size:13px;
		background-color:#008ae6;
		float:left;
        top:184px;
		position: fixed;
        left: 1250px;
	}
	#con:hover
	{
		background-color:   #3366ff;
	}


    </style>


</head>
<body>


<div class="pi">
             <img src="<?=base_url('assets/pic.jpg'); ?> " height="675px" width="530px">  
</div>

<br>
<div class="i">
             <img src="<?=base_url('assets/cv.jpg'); ?> ">  
</div>

         <?php echo form_open("Welcome/index") ?>
		 <input type="submit" name="home" value="HOME" id="hom2"></form>

         <?php echo form_open("Welcome/admin") ?>
		 <input type="submit" name="admin" value="ADMIN" id="ad"></form>

		 <?php echo form_open("Welcome/contact") ?>
		 <input type="submit" name="contact" value="CONTACT" id="con"></form>

		 <?php echo form_open("Welcome/result") ?>
		 <input type="submit" name="result" value="RESULT" id="res"></form>






</body>
</html>