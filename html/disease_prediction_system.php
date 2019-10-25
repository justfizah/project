<!DOCTYPE html>
<html lang="en-us">
<meta charset="utf-8" />
<head>
	<title>Get Started</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<script src="../js/jquery.js" type="text/javascript"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	<script src="../js/admin1.js" type="text/javascript"></script>
	<script src="../js/add_disease.js"  type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="../css/add_disease.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="style2.css">
	<style type="text/css">

			.patient, .doctor{
					height:300px;

			}
	</style>
</head>

<body>
	<header></header>
	<div class="navbar">
	
		<div class="dropdown">
			<button class="dropbtn"
				onclick= "myfunction()"><a href="index.php"> Home 
				<i class="fa fa-caret-down"></i></a>
			</button>
				
		</div>
		<div class="dropdown">
			<button class="dropbtn"
				onclick= "myfunction()"><a href="index.php"> Health
				<i class="fa fa-caret-down"></i></a>
			</button>
				
		</div>
		<div class="dropdown">
			<button class="dropbtn"
				onclick= "myfunction()"><a href="index.php"> Pneumonia
				<i class="fa fa-caret-down"></i></a>
			</button>
				
		</div>
		<div class="dropdown">
			<button class="dropbtn"
				onclick= "myfunction()"><a href="index.php"> Complications
				<i class="fa fa-caret-down"></i></a>
			</button>
				
		</div>
		<div class="dropdown">
			<button class="dropbtn"
				onclick= "myfunction()"><a href="index.php"> Hospital 
				<i class="fa fa-caret-down"></i></a>
			</button>
				
		</div>
		<div class="dropdown">
			<button class="dropbtn"
				onclick= "myfunction()"><a href="index.php"> Contact
				<i class="fa fa-caret-down"></i></a>
			</button>
				
		</div>
		<form role="search" method="get" action="https://google.com/">
                <input type="text" name="s" placeholder="Search Pneumcare..." required="">
                <i type="submit" value="Search" id="searchsubmit" class="submit"><i class="fa fa-search"></i></i>
        </form>

		
</div>
<div class="main">
<!-- <a class="bay" href="#"> -->
	<img src="../img/HAFIZAH.png">
		<a class="Hospital" href="disease_prediction_system.php">Sign in <i class="fa fa-caret-down"></i></a>
				<a class="Hospital" href="#">Services<i class="fa fa-caret-down"></i></a>
						<a class="Hospital" href="#">About<i class="fa fa-caret-down"></i></a>
								<a class="Hospital" href="#">Diagnosis<i class="fa fa-caret-down"></i></a>
								<a class="Personal details">MUHYIDEEN HAFIZAH</a>
								<a class="Personal details">U2015/5570066</a>


</div>

			<!-- <div class="container">
					<div class="jumbotron">
							<h1>Pneumonia Prediction System</h1>
					</div>
			</div> -->
<br>
<br>
<br>
<br>
			<div class="container">
				<div class="row">
						<div class="patient col-md-4 col-md-offset-1"><a href="patientlogin.php"><h3>I am a Patient!</h3><img src="../img/patient.png" class="rounded" alt="Patient" width="304" height="236"></a></div>
						<div class="doctor col-md-4 col-md-offset-2"><a href="doctorlogin.php"><h3>I am a Doctor!</h3><img src="../img/doctor.jpg" class="rounded" alt="doctor" width="304" height="236"></a></div>
				</div>
		 </div>

</body>
</html>
