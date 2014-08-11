<?php
session_start();
//echo $_SESSION['username'].$_SESSION['usertype'];die();

if(isset($_SESSION['username']) && isset($_SESSION['usertype']) && ($_SESSION['usertype']=='student'))
{
}
else
{
	header('location:../index.html');
}

?>

<!DOCTYPE html>

<html lang="en">
<head>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Feedback System | MIS Project</title><!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css"><!-- Latest compiled and minified JavaScript -->
	<link rel="stylesheet" href="style.css" />
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js" type="text/javascript">
</script>
   <!--  <script src="../../assets/js/ie-emulation-modes-warning.js" type="text/javascript">
    </script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js" type="text/javascript">
    </script> -->

<style>
	body {
  padding-top: 70px;
  background-color: #4ac2aa;
  background-size: cover;
}
</style>

</head>
<body>
    <!-- Fixed navbar -->

    <div class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color: #32526e;">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span></button> <a class="navbar-brand" href="/" style="color:#4ac2aa">MIS Feedback</a>
            </div>

            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="../index.html" style="color:#4ac2aa"><i class="fa fa-home fa-lg"></i>&nbsp;Home</a></li>

                    <li><a href="#about" style="color:#4ac2aa"><i class="fa fa-pencil-square-o fa-lg"></i>&nbsp;Give Feedback</a></li>

                    <li><a href="#contact" style="color:#4ac2aa"><i class="fa fa-group"></i>&nbsp;Our Team</a></li>

                    <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                    
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                    
                            <li><a href="#">Another action</a></li>
                    
                            <li><a href="#">Something else here</a></li>
                    
                            <li class="dropdown-header">Nav header</li>
                    
                            <li><a href="#">Separated link</a></li>
                    
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                     -->                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../logout.php">Logout</a></li>

                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>

    <div class="container" style="background-color: #4ac2aa">
        <!-- Main component for a primary marketing message or call to action -->

        <div class="jumbotron" style="">
            <h2 style="text-align : center">Feedback Form</h2>
            
            <form role="form" action="index.php" method="post">
					  <div class="form-group">
					    <label for="facultyname">Faculty Name</label><br/>
					    			<select name="facultyname" id="facultyname" class="form-control">
									<?php
										include_once('../connect.php');
										$str2= "SELECT name FROM teachers";
										$res2 = mysqli_query($con, $str2);
										while($row = mysqli_fetch_array($res2))
										{
											$teachername = $row['name'];
											echo "<option value='$teachername'>$teachername</option>";
										}
									?>
							</select>		
					  </div>
					  <div class="form-group">
					  			<table class="table" >
					  				<tr>
					  					<td><label>#</label></td>
					  					<td align="center"><label>Query</label></td>
					  					<td><label>1</label></td>
					  					<td><label>2</label></td>
					  					<td><label>3</label></td>
					  					<td><label>4</label></td>
					  					<td><label>5</label></td>
					  				</tr>
					  				<tr>
					  					<td>
					  						1
					  					</td>
					  					<td>
					  						Course Outline provided to students
					  					</td>
					  					<td>
						  					<input type="radio" value="1" name="course"/>
					  					</td>
					  					<td>
						  					<input type="radio" value="2" name="course"/>
					  					</td>
					  					<td>
						  					<input type="radio" value="3" name="course"/>
					  					</td>
					  					<td>
						  					<input type="radio" value="4" name="course"/>
					  					</td>
					  					<td>
						  					<input type="radio" value="5" name="course"/>
					  					</td>
					  				</tr>
					  			</table>
					  </div>
					  <div class="form-group">
					    <label for="suggestions">Suggestions</label>
					    <textarea class="form-control" rows="3" placeholder="Enter your feedback" id="suggestions"></textarea>
					  </div>
					  <button type="submit" class="btn btn-default submit-btn">Submit</button>
</form>

           <form method="POST" action="login.php">
	            <div class="input-group group-1" >
							
							<p>
							
							</p>			
				</div>
				
				
								
            
        </div>
        </form>
    </div><!-- /container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js" type="text/javascript">
</script><script src="js/bootstrap.min.js" type="text/javascript">
</script>
</body>
</html>


