<!--doctor views the appointments sent by user and rejects or approve them-->
<!doctype html>
<html>
  <head>
      <title>Appointments</title>
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
		
			<div class="container bg-light col-6 mt-5">
					<h2>Appointments</h2>
			
			<table class="table table-striped card-text bg-light">
			  
			  <thead>
				<tr>
				  <th scope="col">ApId</th>
				  <th scope="col">Name</th>
				  <th scope="col">Date of Appointment</th>
				  <th scope="col"> Time Slot</th>
				  <th scope="col">Status</th>
				  <th></th>
				  <th></th>
				</tr>
			  </thead>
			  <tbody>
					<?php
						
						include_once 'connection.php';
						session_start();
						$sql="select * from appoinment where
						dname='".$_SESSION['user']."'";
						$result = mysqli_query($conn, $sql);
						while($row = mysqli_fetch_assoc($result)) 
						{
					?>
					<tr>
					<form action="action.php" method="post">
					    <td scope="row"><input class="form-control" type="text" id="id" name="id"   value="<?php echo $row['id']?>"></td>
						<td scope="row"><?php echo $row['Uname'] ;?></td>
						<td scope="row"> <?php echo $row['Date'] ;?> </td>
						<td scope="row"><?php echo $row['Slot'] ;?></td>
						<td scope="row"><?php echo $row['Status'] ;?></td>
						<td scope="row"><input type="submit"  name="approveapp" class="form-control btn-primary " value="Approve"></td>
						<td scope="row"><input type="submit"  name="rejectapp" class="form-control btn-danger " value="Reject"></td>
						</form>	
					<tr>
						<?php } ?>
				</tbody>
			  
			</table>
			
			</div>
	</body>
</html>