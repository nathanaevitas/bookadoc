
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>BOOK A DOCTOR</title>
    
    
    
    
        <link rel="stylesheet" href="csslogin/style.css">

    
    
    
  </head>

  <body>
<img src="img/logo.png" style="margin:2%; ">
    <div class="wrapper">

	<div class="container">
		<h1>Sign Up Here</h1>
		
		<form class="form" method="POST" action="">
			<input type="text" placeholder="Username"  name='usn'  autofocus>
			<input type="password" placeholder="Password" name='passwd'>
			<select name="signup" onchange="redirect">
			<option value=""> Select Your Choice</option>
			<option value="1">Doctors </option>
			<option value="2">Patients </option>
			
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li><img src="img/group4.png"></li>
		<li></li>
		<li><img src="img/logo.png"></li>
		<li></li>
		<li><img src="img/group4.png"></li>
		<li></li>
		<li><img src="img/group4.png"></li>
		<li></li>
		
		<li><img src="img/group4.png"></li>
		
		
		<li></li>
	</ul>
	
<p style="color:#000; font-size:14px; margin-left:40%">&copy; <?php echo date('Y');?> Powered by <a href="www.google.com/" target="_blank">Group4</a></p>	  
</div>


    <!--  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>-->

        <script src="jslogin/index.js"></script>

    
  
    
  </body>
</html>
