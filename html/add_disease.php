<!DOCTYPE html>
<html lang="en-us">
<meta charset="utf-8" />
<head>
	<title>Doctor dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<script src="../js/jquery.js" type="text/javascript"></script>
	<script src="../js/add_disease.js" type="text/javascript"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style2.css">

	<style type="text/css">
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
		<a class="Hospital" href="">Admin<i class="fa fa-caret-down"></i></a>
				<a class="Hospital" href="add_disease.php">Add symptoms <i class="fa fa-caret-down"></i></a>
						<a class="Hospital" href="xray.php">Prescriptions <i class="fa fa-caret-down"></i></a>
								<a class="Hospital" href="">Diagnosis results<i class="fa fa-caret-down"></i></a>
								<a class="Personal details">MUHYIDEEN HAFIZAH</a>
								<a class="Personal details">U2015/5570066</a>


</div>


			<div class="container">
					<div class="alert alert-info">
							<?php session_start(); ?>
							<?php echo "Hello Doctor, ".$_SESSION['demail']."!" ;?>
							<?php if(!isset($_SESSION['demail'])) header('location:disease_prediction_system.php'); ?>
							<a class=" btn btn-primary col-md-offset-10" href="../php/logout.php" >Logout</a>
							
							<h2>Add symptoms/New disease</h2>
					</div>
			</div>


		<div class="container vertical-gap" >
			<div class="row container">
				<h4>Disease Details</h4>
			</div>
			<div class="row">
				<div class="dname col-md-2 "> <!-- col-md-offset-2 -->
					<input type="text" name="dname" placeholder="Enter Disease Name" class="form-control input-group-lg " id="dname" autofocus>
				</div>
				<div class="specialist col-md-2 "> <!-- col-md-offset-2 -->
					<input type="text" name="specialist" placeholder="Enter Specialist" class="form-control input-group-lg " id="specialist">
				</div>
				<div class="form-group col-md-6">
				  <textarea placeholder="Enter Precautions" name="precaution" class="form-control" rows="5" id="precaution"></textarea>
				</div>
			</div>
		</div>



		<div class="container main_sym vertical-gap">
			<div class=" row container">
				<h4>Symptom Details</h4>
			</div>

			<div class=" add_sym">
				<div class="row">
					<div class="col-md-2 ">
						<input type="text" placeholder="Enter Symptom Name" class="form-control input-group-lg" id="sname">
					</div>
					<div class="checkbox col-md-2">
							<label><input id="mycheck" type="checkbox"  value="">Range Input</label>
				 </div>
					<div class="col-md-2 ">
						<input type="number"  placeholder="No." class="form-control input-group-lg" id="no">
					</div>
					<div class="col-md-2 col-sm-offset-1">
						<input type="number"  placeholder="Weight" class="form-control input input-group-lg" id="weight">
					</div>
					<div class="col-md-2 col-sm-offset-1">
						<button type="submit" name="submit" class="btn btn-default btn-primary button" onclick="f2()">ADD SYMPTOM</button>
					</div>
				</div>
			</div>
		</div>

		<div id="add_here" class="container">

		</div>

		<div class="container vertical-gap">
			<div class="row">
				<div class="col-md-2 col-md-offset-5">
						<button type="submit" id="save" name="submit" class="btn btn-default btn-primary button" onclick="send_data()">SAVE</button>
				</div>
			</div>
		</div>

  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" id="modal_button" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">RESULTS</h4>
        </div>
        <div class="modal-body">
          <p>Add new symptom/disease</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 
</body>
</html>
