<!--------------admin sees users list--------------->
<!doctype html>
<html>
  <head>
      <title>userlist</title>
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
  <h2> Users </h2>
  <table class="table table-striped card-text bg-light">
  <thead>
    <tr>
      <th scope="col">User ID</th>
      <th scope="col">Name</th>
	  <th scope="col">Mobile</th>
	  <th scope="col">Email</th>
	  <th scope="col">Nationalid</th>
	  <th scope="col">Gender</th>
	  <th scope="col">Age</th>
	  <th scope="col"></th>
	  
	  
      <th></th>
    </tr>
  </thead>
  <tbody>
			<?php
				
				include_once 'connection.php';
				
				$sql="select * from user";
				$result = mysqli_query($conn, $sql);
				while($row = mysqli_fetch_assoc($result)) 
				{
			?>
    <tr>
	<form action="action.php" method="post">
      <td scope="row"><input type="text" id="Uid" name="Uid" class="form-control " value="<?php echo $row['Uid'] ;?>"></td>
      <td scope="row"><input type="text" id="Name" name="Name" class="form-control " value="<?php echo $row['Name'] ;?>"></td>
	  <td scope="row"><input type="text" id="mobile" name="Mobile" class="form-control " value="<?php echo $row['Mobile'] ;?>"></td>
	  <td scope="row"><input type="text" id="email" name="Email" class="form-control " value="<?php echo $row['Emailid'] ;?>"></td>
	  <td scope="row"><input type="text" id="nid" name="Nationalid" class="form-control " value="<?php echo $row['Nationalid'] ;?>"></td>
	  <td scope="row"><input type="text" id="gender" name="Gender" class="form-control " value="<?php echo $row['Gender']  ;?>"></td>
	  <td scope="row"><input type="text" id="age" name="Age" class="form-control " value="<?php echo $row['Age'] ;?>"></td>
	  
	  <td scope="row"><input type="submit" name="Delete" value="Delete" class="btn-danger form-control"></td>
	  
     
	 </form>
     </tr>
				<?php } ?>
    
	</tbody>
	</table>
	</div>
			
		</div>
		
  </body>
  </html>