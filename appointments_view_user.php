<!---------------user views and/or cancel appointments------------------->
<!doctype html>
<html>
  <head>
      <title>index</title>
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
		<div class="container bg-light col-5 mt-5">
					<h2>Appointments</h2>
			<table class="table table-striped card-text bg-light">
			  <thead>
				<tr>
				  <th scope="col">ID</th>
				  <th scope="col">Dr.Name</th>
				  <th scope="col">Date of Appointment</th>
				  <th scope="col"> Time Slot</th>
				  <th scope="col">Status</th>
				  <th></th>
				</tr>
			  </thead>
			  <tbody>
					<?php
						
						include_once 'connection.php';
						session_start();
						$sql="select * from appoinment where
						Uname='".$_SESSION['user']."'";
						$result = mysqli_query($conn, $sql);
						while($row = mysqli_fetch_assoc($result)) 
						{
					?>
					<tr>
					<form action="action.php" method="post">
					    <td scope="row"><input type="text" id="id" name="id" class="form-control " value="<?php echo $row['id'] ;?>"></td>
						<td scope="row"><?php echo $row['Dname'] ;?></td>
						<td scope="row"> <?php echo $row['Date'] ;?> </td>
						<td scope="row"><?php echo $row['Slot'] ;?></td>
						<td scope="row"><?php echo $row['Status'] ;?></td>
						<td scope="row"><input type="submit"  name="cancel" class="form-control btn-danger" value="Cancel"></td>
					</form>
					<tr>
						<?php } ?>
				</tbody>
			</table>