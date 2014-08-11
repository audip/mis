<?php
		session_start();
		ob_start();
		include('connect.php');
		if($_POST)
		{
			if(isset($_POST['username']) &&isset($_POST['password']) &&isset($_POST['usertype']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['usertype']))
			{
				$username = mysqli_real_escape_string($con, $_POST['username']);
				$password = mysqli_real_escape_string($con,$_POST['password']);
				$usertype = mysqli_real_escape_string($con,$_POST['usertype']);
				
				echo $username.$password.$usertype;
				
				$str1 = "SELECT * FROM login WHERE username='$username'";
				$res1 = mysqli_query($con, $str1);
				while($row = mysqli_fetch_array($res1))
				{
					if($username == $row['username'] && $password ==$row['password'] && $usertype== $row['usertype'])
					{
						echo 'Login Successful. Redirecting you!';
						$_SESSION['username'] = $username;
						$_SESSION['usertype'] = $usertype;
						if($usertype == "student")
						{
							header("location:student/");
						}
						else if($usertype == "faculty")
						{
							header("location:faculty/");
						}
						else if($usertype == "administrator")
						{
							header("location:admin/");
						}
					}
					else
					{
						echo 'Login Failed. Please try again!';
					}
				}
			}
		}

ob_flush();
?>