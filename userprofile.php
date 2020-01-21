<!----------------user profile---------------->
<!doctype html>
<html>
  <head>
      <title>User Profile</title>
	  <link rel ="stylesheet" href="css/bootstrap.min.css">
	  <link rel ="stylesheet" href="css/style.css">
	 
	  
  
  </head>
  <body> 
		<div class="navbar">
			<ul>
				<li><a href ="userhome.php">Home</a></li>
				<li><a href="userprofile.php">My Profile</a></li>
				<li><a href="#">Appointments</a>
					
					<div class="submenu">
						<ul>
							<li><a href="appointments.php">Take Appointment</a></li>
							<li><a href="appointments_view_user.php">View Appointments</a></li>
						</ul>
					</div>
				</li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
			<div class="container bg-light col-5">
					<h2>MY PROFILE</h2>
			<?php
				
				include_once 'connection.php';
				session_start();
				$sql="select * from user where Name='".$_SESSION['user']."'";
				$result = mysqli_query($conn, $sql);
				while($row = mysqli_fetch_assoc($result)) 
				{
			?>
				<div class="form-group">
                    <label for="Name" class="col-sm-3 control-label" >Name</label>
                    <div class="col-sm-8">
                        <input type="text" id="Name" name="name" class="form-control " value="<?php echo $row['Name'] ;?>"readonly>
                    </div>
                </div>
                <div class="form-group">
                        <label  class="col-sm-3 control-label">Mobile</label>
                    <div class="col-sm-8">
                        <input type="number" id="mobile" class="form-control" name="mobile" value="<?php echo $row['Mobile'] ;?>"readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email </label>
                    <div class="col-sm-8">
                        <input type="email" id="email" class="form-control" name= "email" value="<?php echo $row['Emailid'] ;?>" readonly>
                    </div>
                </div>
				<div class="form-group">
                    <label for="Age" class="col-sm-3 control-label" >Age</label>
                    <div class="col-sm-8">
                        <input type="text" id="Age" name="age" class="form-control " readonly value="<?php echo $row['Age'] ;?>" name="age">
                    </div>
                </div>
				<div class="form-group">
                    <label for="gender" class="col-sm-3 control-label" >Gender</label>
                    <div class="col-sm-8">
                        <input type="text" id="gender" name="gender" class="form-control " value="<?php echo $row['Gender'] ;?>" readonly name="gender">
                    </div>
                </div>
				<div class="form-group">
                    <label for="password" class="col-sm-3 control-label">National Id</label>
                    <div class="col-sm-8">
                        <input type="text"  class="form-control"name="nationalid"readonly value="<?php echo $row['Nationalid'] ;?>">
                    </div>
                </div>
				<div class="form-group">
                        <label  class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-8">
                        <input type="text" id="username" class="form-control" name="username"readonly value="<?php echo $row['Username'] ;?>">
                    </div>
                </div>
				<div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-8">
                        <input type="password" id="password" placeholder="Password" class="form-control"name="password"   value="<?php echo $row['Password'] ;?>" readonly>
                    </div>
				<?php } ?>
              			  </div>
						  
  </body>
  </html>