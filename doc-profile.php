<!--------------------------docts profile--------------->
<!doctype html>
<html>
  <head>
      <title>Doctor Profile</title>
	  <link rel ="stylesheet" href="css/bootstrap.min.css">
	  <link rel ="stylesheet" href="css/style.css">
	 
	  
  
  </head>
  <body> 
		<div class="navbar">
			<ul>
				<li><a href ="doctorhome.php">Home</a></li>
				<li><a href="doc-profile.php">My Profile</a></li>
				<li><a href="appointment_view.php">Appointments</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
			<div class="container bg-light col-5">
					<h2>MY PROFILE</h2>
			<?php
				
				include_once 'connection.php';
				session_start();
				$sql="select * from doctor where Name='".$_SESSION['user']."'";
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
                        <input type="number" id="mobile" class="form-control" name="mobile" value="<?php echo $row['MobileNo'] ;?>"readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email </label>
                    <div class="col-sm-8">
                        <input type="email" id="email" class="form-control" name= "email" value="<?php echo $row['Emailid'] ;?>" readonly>
                    </div>
                </div>
				
				<div class="form-group">
                    <label for="password" class="col-sm-3 control-label">National Id</label>
                    <div class="col-sm-8">
                        <input type="text"  class="form-control"name="nationalid"readonly value="<?php echo $row['Nationalid'] ;?>">
                    </div>
                </div>
				<div class="form-group">
                    <label for="qualification" class="col-sm-3 control-label">Qualification</label>
                    <div class="col-sm-8">
                        <input type="text" id="birthDate" class="form-control" name="qualification" readonly value="<?php echo $row['Qualification'] ;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Experience</label>
                    <div class="col-sm-8">
                        <input type="text" id="experience" placeholder="experience" class="form-control" name="experience" readonly value="<?php echo $row['Experience'] ;?>">
                       
                    </div>
                </div>
                
                 <div class="form-group">
                        <label for="weight" class="col-sm-3 control-label">Department </label>
                    <div class="col-sm-8">
                        <input type="text" id="department" class="form-control" name="department" readonly value="<?php echo $row['Department'] ;?>">
                    </div>
                </div>
				<div class="form-group">
                        <label for="weight" class="col-sm-3 control-label">ClinicAddress </label>
                    <div class="col-sm-8">
                        <input type="text" id="clinicaddress" class="form-control" name="clinicaddress" readonly value="<?php echo $row['ClinicAddress'] ;?>">
                    </div>
                </div>
				<div class="form-group">
                        <label  class="col-sm-3 control-label">Clinic Timing</label>
                    <div class="col-sm-8">
                        <input type="text" id="clinictiming" class="form-control" name="clinictiming" readonly value="<?php echo $row['ClinicTiming'] ;?>">
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