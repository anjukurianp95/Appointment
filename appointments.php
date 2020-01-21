<!------------------user takes appointments--------------->
<!doctype html>
<html>
  <head>
      <title>appointments</title>
	  <link rel ="stylesheet" href="css/bootstrap.min.css">
	  <link rel ="stylesheet" href="css/style.css">
	 
	  
  
  </head>
  <body > 
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
  <div class="card-body">
  <h2> Available Doctors </h2>
  <table class="table table-striped card-text bg-light">
  <thead>
    <tr>
      <th scope="col">Dr.ID</th>
      <th scope="col">Dr.Name</th>
	  <th scope="col">Specialised in</th>
      <th scope="col">Clinic Address</th>
	  <th scope="col">Clinic Time</th>
	  <th scope="col">Date</th>
	  <th scope="col">Slot</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
     <!----------------doctors' details---------------------->
			<?php
				
				include_once 'connection.php';
				
				$sql="select * from doctor where Status='Accepted' order by department";
				$result = mysqli_query($conn, $sql);
				while($row = mysqli_fetch_assoc($result)) 
				{
			?>
    <tr>
	<form action="action.php" method="post">
      <td scope="row"><input type="text" id="Did" name="Did" class="form-control " value="<?php echo $row['Did'] ;?>"></td>
      <td scope="row"><input type="text" id="Name" name="Name" class="form-control " value="<?php echo $row['Name'] ;?>"></td>
	  <td scope="row"><input type="text" id="Department" name="Department" class="form-control " value="<?php echo $row['Department'] ;?>"></td>
	  <td scope="row"><input type="text" id="cadd" name="Cadd" class="form-control " value="<?php echo $row['ClinicAddress'] ;?>"></td>
	  <td scope="row"><input type="text" id="ctime" name="Ctime" class="form-control " value="<?php echo $row['ClinicTiming'] ;?>"></td>
	  <td scope="row"><input type="date" id="date" name="date" ></td>
      <td scope="row">
	  <select name="slot">
			<option value="10 AM"> 10 AM</option>
			<option value="11 AM"> 11 AM</option>
			<option value="12 AM"> 12 PM</option>
			<option value="2 PM"> 2 PM</option>
			<option value="3 PM"> 3 PM</option>
			<option value="4 PM"> 4 PM</option>
	  </select>
		</td>
     <td scope="row"><input type="submit" name="appointment" value="Apply" class="btn-primary"></td>
	 </form>
     </tr>
				<?php } ?>
    
	</tbody>
	</table>
	</div>
  </body>
  </html>