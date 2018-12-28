<?php
session_start();
if(isset($_SESSION['id']))
{																						?>
<html>
	<head>
		<title>HOME</title>
		<link rel="stylesheet" type="text/css" href="css/index.css"/>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
		<script type="text/javascript" language="javascript" src="js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>

		<nav class="navbar navbar-inverse navbar-fixed-top">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="#">WebSiteName</a>
			</div>
		  </div>
		</nav>
	
		<br/><br/><br/><br/>
	
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,900" rel="stylesheet">
		<div class="container">
		  <div class="row">
			<div class="col-md-4">
			  <div class="card card-1" onclick="location.href='course1/introduction.html';">
				<h3>Patient Identification</h3>
				<p>Enter description here.Enter description here.Enter description here</p>
				<div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%">
					20%
				  </div>
				</div>				
			  </div>
			</div>
			<div class="col-md-4">
			  <div class="card card-2">
				<h3>Course 2</h3>
				<p>Enter description here.Enter description here.Enter description here</p>
				<div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
					Not Started
				  </div>
				</div>								  
			  </div>
			</div>
			<div class="col-md-4">
			  <div class="card card-3">
				<h3>Course 3</h3>
				<p>Enter description here.Enter description here.Enter description here</p>
				<div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
					50%
				  </div>
				</div>				  
			  </div>
			</div>
		  </div>
		</div>
	</body>
</html>
<?php
}
else
	header("Location:loginPage.php");
?>