<?php 
	include_once("connection.php");
	session_start();
	#------------------- for doctor registraion-------------#
	if(isset($_POST['docregister']))
	{
		$name=$_POST['name'];
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];
		$nid=$_POST['nationalid'];
		$qua=$_POST['qualification'];
		$dept=$_POST['department'];
		$exp=$_POST['experience'];
		$caddress=$_POST['clinicaddress'];
		$ctime=$_POST['clinictiming'];
		$username=$_POST['username'];
		$password=$_POST['cpassword'];
		
		$sq="select * from doctor";
		$r=mysqli_query($conn,$sq);
		$flag=0;
		while($row1=mysqli_fetch_assoc($r))
		{
			if($r['Username']==$username)
			{
				$flag=1;
			}
		}
		if($flag==1)
		{
			echo "Already existing username";
			mysqli_close($conn);
		}
		else
		{	
			$sql="INSERT INTO doctor(Name,MobileNo,Emailid,Nationalid,Qualification,Experience,Department,ClinicAddress,ClinicTiming,Username,Password) VALUES('".$name."','".$mobile."','".$email."','".$nid."','".$qua."','".$exp."','".$dept."','".$caddress."','".$ctime."','".$username."','".$password."')";
			if(mysqli_query($conn,$sql))
			
			{
				
					require_once "index.php";
				
			}
			mysqli_close($conn);
		}
		
	}
	
	
	#--------------------------------for user(patient) registation---------------------------#
	else if(isset($_POST['userregister']))
	{
		$name=$_POST['name'];
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];
		$nid=$_POST['nationalid'];
		$age=$_POST['age'];
		$gender=$_POST['gender'];
		$username=$_POST['username'];
		$password=$_POST['cpassword'];
		$sq="select * from user";
		$r=mysqli_query($conn,$sq);
		$flag=0;
		while($row1=mysqli_fetch_assoc($r))
		{
			if($row1['Username']==$username)
			{
				$flag=1;
			}
		}
		if($flag==1)
		{
			echo "Already existing username";
			mysqli_close($conn);
		}
		else
		{	
			$sql="INSERT INTO user(Name,Mobile,Emailid,Nationalid,Age,Gender,Username,Password) VALUES('".$name."','".$mobile."','".$email."','".$nid."','".$age."','".$gender."','".$username."','".$password."')";
			if(mysqli_query($conn,$sql))
			
			{
				
					require_once "index.php";
				
			}
			mysqli_close($conn);
		}
	}
	
	
	
	#-------------login page link--------------#
	else if(isset($_POST['login']))
	{
		require_once "login.php";
	}
	
	
	
	#-------------------login authentication for doctor,user and admin--------------------#
	else if(isset($_POST['logcheck']))
	{
		$user=$_POST['username'];
		$pass=$_POST['password'];
		$sql="select * from doctor where Username='".$user."' and Password='".$pass."'";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result)>0)
		{
			
			
				$row = mysqli_fetch_assoc($result);
								
					if($row['Status']!='Accepted')
					{
						echo "Application yet to be accepted";
					}
					else
					{
						$_SESSION['user']=$row['Name'];
						require_once "doctorhome.php";
					}
			
		}
		else
		{
			$sql="select * from user where Username='".$user."' and Password='".$pass."'";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0)
			{
				while($row = mysqli_fetch_assoc($result)) 
				{
					$_SESSION['user']=$row['Name'];
					$_SESSION['id']=$row['Uid'];
					require_once "userhome.php";
				}
			}
			else
			{
				$sql="select * from admin where username='".$user."' and password='".$pass."'";
				$result = mysqli_query($conn, $sql);
				if(mysqli_num_rows($result)>0)
				{
					while($row = mysqli_fetch_assoc($result)) 
					{
						require_once "adminhome.php";
					}
				}
					else
					{
						echo "username or password incorrect";
					}
			}
		}
	}
	
	#---------------------submit an appointment by patient(user)-----------------------#
	else if(isset($_POST['appointment']))
	{
		$Did=$_POST['Did'];
		$Dname=$_POST['Name'];
		$date=$_POST['date'];
		$slot=$_POST['slot'];
		$uname=$_SESSION['user'];
		$ud=$_SESSION['id'];
		$status="Pending";
		
		$sql="INSERT INTO appoinment(Did,Dname,Uname,Date,Slot,Status) VALUES('".$Did."','".$Dname."','".$uname."','".$date."','".$slot."','".$status."')";
		if(mysqli_query($conn,$sql))
		
		{
			
				require_once "appointments.php";
			
		}
		
	}
	
	
	#----------------------------------- doctor approves appointments--------------------#
	else if(isset($_POST['approveapp']))
	{
		$id=$_POST['id'];
		$sql="UPDATE appoinment SET status='Approved' where id='".$id."'";
		if(mysqli_query($conn,$sql))
		{
			require_once "doctorhome.php";
		}
	}
	
	
	#-----------------------------------doctor rejects appointments from user---------------#
	else if(isset($_POST['rejectapp']))
	{
		$id=$_POST['id'];
		$sql="UPDATE appoinment SET status='Rejected' where id='".$id."'";
		if(mysqli_query($conn,$sql))
		{
			require_once "doctorhome.php";
		}
	}
	
	#-----------------------user cancels an appointment ----------------------#
	else if(isset($_POST['cancel']))
	{
		$id=$_POST['id'];
		$sql="delete from appoinment where id=$id ";
		if(mysqli_query($conn,$sql))
		{
			require_once "userhome.php";
		}
	}
	
	#-------------------------------admin Approves a Doctor registration------------------#
	else if(isset($_POST['Accept']))
	{
		$id=$_POST['Did'];
		$sql="UPDATE doctor SET status='Accepted' where Did='".$id."'";
		if(mysqli_query($conn,$sql))
		{
			require_once "doctorslist.php";
		}
	}
	#------------------------------admin rejetcs doctor----------------------------#
	else if(isset($_POST['RejectD']))
	{
		$id=$_POST['Did'];
		$sql="UPDATE doctor SET status='Rejected' where Did='".$id."'";
		if(mysqli_query($conn,$sql))
		{
			require_once "doctorslist.php";
		}
	}
	
	
	#------------------------------------------admin deletes a user(patient)----------------------#
	else if(isset($_POST['Delete']))
	{
		$Uid=$_POST['Uid'];
		$sql="delete from user where Uid=$Uid ";
		if(mysqli_query($conn,$sql))
		{
			require_once "userslist.php";
		}
	}
	
	#-----------------------------change password for doctor and patient(user)-----------------------#
	else if(isset($_POST['Change']))
	{
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sq="select * from doctor where Username='".$username."' and Emailid='".$email."'";
		$r=mysqli_query($conn,$sq);
		if(mysqli_num_rows($r)>0)
		{
			while($row1=mysqli_fetch_assoc($r))
			{
				
					$sql="UPDATE doctor SET Password='".$password."' where Username='".$username."'";
					if(mysqli_query($conn,$sql))
					{
						require_once "login.php";
					}
				
			}
		}
		else{
			$sq="select * from user where Username='".$username."' and Emailid='".$email."'";
			$r=mysqli_query($conn,$sq);
			if(mysqli_num_rows($r)>0)
			{
				while($row1=mysqli_fetch_assoc($r))
				{
					
						$sql="UPDATE user SET Password='".$password."' where Username='".$username."'";
						if(mysqli_query($conn,$sql))
						{
							require_once "login.php";
						}
						
					
				}
			}
			else
			{
				echo "username and email don't match";
			}
			mysqli_close($conn);
		}
	}
		
?>
