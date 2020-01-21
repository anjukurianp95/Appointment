<!doctype html>
 <html>
  <head>
      <title>doctor registration</title>
	  <link rel ="stylesheet" href="css/bootstrap.min.css">
	  <link rel ="stylesheet" href="css/style.css">
	 
	  
  <style>
  
  </style>
  
  </head>
  <body class="reg"> 
	<div class="navbar">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="login.php">Login</a></li>
		</ul>
	</div>
  
  <div>
			
  <div class="container bg-light col-5">
  <!---------------------------------doctor registration form-----------> 
            <form class="form-horizontal" name="myform" role="form" onsubmit=" return validate_form()" action="action.php" method="post">
                <h3>Registration</h3>
                <div class="form-group">
                    <label class="col-sm-3 control-label" >Name</label>
                    <div class="col-sm-8">
                        <input type="text" id="name" name="name" class="form-control " autofocus>
                    </div>
                </div>
                <div class="form-group">
                        <label  class="col-sm-3 control-label">Mobile</label>
                    <div class="col-sm-8">
                        <input type="number" id="mobile" class="form-control" name="mobile">
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Email </label>
                    <div class="col-sm-8">
                        <input type="email" id="email" class="form-control" name= "email">
                    </div>
                </div>
                
                <div class="form-group">
                    <label  class="col-sm-3 control-label">National Id</label>
                    <div class="col-sm-8">
                        <input type="text" id="nationalid" class="form-control"name="nationalid">
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Qualification</label>
                    <div class="col-sm-8">
                        <input type="text" id="qualification" class="form-control" name="qualification">
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Experience</label>
                    <div class="col-sm-8">
                        <input type="text" id="experience" placeholder="experience" class="form-control" name="experience">
                       
                    </div>
                </div>
                
                 <div class="form-group">
                        <label  class="col-sm-3 control-label">Department </label>
                    <div class="col-sm-8">
                        <input type="text" id="department" class="form-control" name="department">
                    </div>
                </div>
				<div class="form-group">
                        <label class="col-sm-3 control-label">ClinicAddress </label>
                    <div class="col-sm-8">
                        <input type="text" id="clinicaddress" class="form-control" name="clinicaddress">
                    </div>
                </div>
				<div class="form-group">
                        <label  class="col-sm-3 control-label">Clinic Timing</label>
                    <div class="col-sm-8">
                        <input type="text" id="clinictiming" class="form-control" name="clinictiming">
                    </div>
                </div>
				
				<div class="form-group">
                        <label  class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-8">
                        <input type="text" id="username" class="form-control" name="username">
                    </div>
                </div>
				<div class="form-group">
                    <label  class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-8">
                        <input type="password" id="password" placeholder="Password" class="form-control"name="password">
                    </div>
                </div>
				<div class="form-group">
                    <label  class="col-sm-4 control-label">Confirm Password</label>
                    <div class="col-sm-8">
                        <input type="password" id="cpassword" placeholder="Cnfrm Password" class="form-control" name="cpassword"><br>
						
                    </div>
					<button type="submit" class="btn btn-primary ml-5" name="docregister">Register</button>
					
                </div>
                
                
                
				 </form> <!-- /form  ends-->
                </div>	
           
        </div> <!-- ./container -->

  
  <script>
			function validate_form()
			{
				var mb=document.forms["myform"]["mobile"].value;
				var str=document.forms["myform"]["password"].value;
				var str1=document.forms["myform"]["cpassword"].value;
				
				if(mb.length!=10){
					alert("Invalid mobileno");
					return false;
					
				}
				else if(str.length<6){
					alert("Password too short.");
					return false;
				}
				else if(str != str1){
					alert ("password doesn't match");
					return false;
				}
				/*else{
					return true;
				}*/
				
			}
		</script>
       
 </body>
</html>