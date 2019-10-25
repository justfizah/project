<!DOCTYPE html>
<html lang="en-us">
<meta charset="utf-8" />
<head>
    <title>User Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../js/jquery.js" type="text/javascript"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/user_form.js"  type="text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="../css/add_disease.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style2.css">
	<meta name="viewport" content="width=device-width, intial-scale=1">
	<link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Pneumcare</title>

</head>
		<style rel="stylesheet">

				.vertical-gap{
						margin-top: 40px;
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
		<a class="Hospital" href="#">Dashboard<i class="fa fa-caret-down"></i></a>
				<a class="Hospital" href="disease_prediction_system.php">Run Symptoms Check<i class="fa fa-caret-down"></i></a>
						<a class="Hospital" href="xray.php">Chest X-ray <i class="fa fa-caret-down"></i></a>
								<a class="Hospital" href="#">Diagnosis <i class="fa fa-caret-down"></i></a>
								<a class="Personal details">MUHYIDEEN HAFIZAH</a>
								<a class="Personal details">U2015/5570066</a>


</div>

		<div class="container">
				<div class="alert alert-info">
						<?php session_start(); ?>
						<?php echo "Hello, ".$_SESSION['pemail']; ?>
						<?php if(!isset($_SESSION['pemail'])) header('location:disease_prediction_system.php'); ?>
						<a class=" btn btn-primary col-md-offset-10" href="../php/logout.php" >Logout</a>
            <h1>Run Symptoms Check!</h1>
            <h3>Please select your symptoms</h3>
				</div>
		</div>

		<div class="container ">
	    <div id="add_here">
	    </div>
	</div>

	<div class="container">
		<div class="vertical-gap">
				<button class="btn btn-default btn-primary col-sm-offset-5" onclick="make_string()">Evaluate Symptoms!</button>
				
		</div>
	</div>
</body>

</html>
