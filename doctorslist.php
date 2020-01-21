<!------------------admin sees list of registred doctors and approve/reject them------->
<!doctype html>
<html>
  <head>
      <title>doctorlist</title>
	  <link rel ="stylesheet" href="css/bootstrap.min.css">
	  <link rel ="stylesheet" href="css/style.css">
	 
	  
  
  </head>
  <body> 
		<div class="navbar">
			<ul>
				<li><a href ="adminhome.php">Home</a></li>
				<li><a href ="doctorslist.php">Doctors</a></li>
				<li><a href ="userslist.php">Users</a></li>
					
					
				
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
		<div>
				</div>
  <div class="card-body">
  <h2> Doctor Requests </h2>
  <table class="table table-striped card-text bg-light">
  <thead>
    <tr>
      <th scope="col">Dr.ID</th>
      <th scope="col">Dr.Name</th>
	  <th scope="col">Mobile</th>
	  <th scope="col">Email</th>
	  <th scope="col">Nationalid</th>
	  <th scope="col">Specialised in</th>
      <th scope="col">Clinic Address</th>
	  <th scope="col">Clinic Time</th>
	  <th scope="col">Status</th>
	  
      <th></th>
    </tr>
  </thead>
  <tbody>
			<?php
				
				include_once 'connection.php';
				
				$sql="select * from doctor";
				$result = mysqli_query($conn, $sql);
				while($row = mysqli_fetch_assoc($result)) 
				{
			?>
    <tr>
	<form action="action.php" method="post">
      <td scope="row"><input type="text" id="Did" name="Did" class="form-control " value="<?php echo $row['Did'] ;?>"></td>
      <td scope="row"><input type="text" id="Name" name="Name" class="form-control " value="<?php echo $row['Name'] ;?>"></td>
	  <td scope="row"><input type="text" id="mobile" name="Mobile" class="form-control " value="<?php echo $row['MobileNo'] ;?>"></td>
	  <td scope="row"><input type="text" id="email" name="Email" class="form-control " value="<?php echo $row['Emailid'] ;?>"></td>
	  <td scope="row"><input type="text" id="nid" name="Nationalid" class="form-control " value="<?php echo $row['Nationalid'] ;?>"></td>
	  <td scope="row"><input type="text" id="Department" name="Department" class="form-control " value="<?php echo $row['Department'] ;?>"></td>
	  <td scope="row"><input type="text" id="cadd" name="Cadd" class="form-control " value="<?php echo $row['ClinicAddress'] ;?>"></td>
	  <td scope="row"><input type="text" id="ctime" name="Ctime" class="form-control " value="<?php echo $row['ClinicTiming'] ;?>"></td>
	  <td scope="row"><input type="text" id="status" name="status" class="form-control " value="<?php echo $row['Status'] ;?>"></td>
	  
     <td scope="row"><input type="submit" name="Accept" value="Accept" class="btn-primary form-control"></td>
	 <td scope="row"><input type="submit" name="RejectD" value="Reject" class="btn-danger form-control"></td>
	 </form>
     </tr>
				<?php } ?>
    
	</tbody>
	</table>
	</div>
			
		</div>
		
  </body>
  </html>