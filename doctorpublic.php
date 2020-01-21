<!----------------doctors' list without logging in----------------->
<!doctype html>
<html>
  <head>
      <title>doctors</title>
	  <link rel ="stylesheet" href="css/bootstrap.min.css">
	  <link rel ="stylesheet" href="css/style.css">
	 
	  
  
  </head>
  <body class="dback"> 
	<div class="navbar">
			<ul>
				<li><a href ="index.php">Home</a></li>
				<li><a href ="login.php">Login</a></li>
	
					
					
				
				
			</ul>
		</div>
		
  <div class="card-body">
  <h2> Doctors</h2>
  <table class="table table-striped card-text bg-light">
  <thead>
    <tr>
      
      <th scope="col">Dr.Name</th>
	  <th scope="col">Mobile</th>
	  <th scope="col">Email</th>
	  
	  <th scope="col">Specialised in</th>
      <th scope="col">Clinic Address</th>
	  <th scope="col">Clinic Time</th>
	  
	  
      <th></th>
    </tr>
  </thead>
  <tbody>
			<?php
				
				include_once 'connection.php';
				
				$sql="select * from doctor where Status='Accepted' order by department";
				$result = mysqli_query($conn, $sql);
				while($row = mysqli_fetch_assoc($result)) 
				{
			?>
    <tr>
	<form action="login.php" method="post">
    
      <td scope="row"><input type="text" id="Name" name="Name" class="form-control " value="<?php echo $row['Name'] ;?>"></td>
	  <td scope="row"><input type="text" id="mobile" name="Mobile" class="form-control " value="<?php echo $row['MobileNo'] ;?>"></td>
	  <td scope="row"><input type="text" id="email" name="Email" class="form-control " value="<?php echo $row['Emailid'] ;?>"></td>
	  
	  <td scope="row"><input type="text" id="Department" name="Department" class="form-control " value="<?php echo $row['Department'] ;?>"></td>
	  <td scope="row"><input type="text" id="cadd" name="Cadd" class="form-control " value="<?php echo $row['ClinicAddress'] ;?>"></td>
	  <td scope="row"><input type="text" id="ctime" name="Ctime" class="form-control " value="<?php echo $row['ClinicTiming'] ;?>"></td>
	  
	  
     <td scope="row"><input type="button" name="book" value="Book" class="btn-info"></a></td>
	 </form>
     </tr>
				<?php } ?>
    
	</tbody>
	</table>
	</div>
			
		</div>
		
  </body>
  </html>