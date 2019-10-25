
 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="style2.css">
	<meta name="viewport" content="width=device-width, intial-scale=1">
	<link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 	<title>Xray check</title>
 </head>
 <body>
 	<header></header><div class="navbar">
	
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
		<a class="Hospital" href="#">Services <i class="fa fa-caret-down"></i></a>
				<a class="Hospital" href="disease_prediction_system.php">Run Symptoms Check <i class="fa fa-caret-down"></i></a>
						<a class="Hospital" href="xray.php">Chest X-ray <i class="fa fa-caret-down"></i></a>
								<a class="Hospital" href="#">Diagnosis <i class="fa fa-caret-down"></i></a>
								<a class="Personal details">MUHYIDEEN HAFIZAH</a>
								<a class="Personal details">U2015/5570066</a>


</div>
<br>
<br>
<br>
<br>
 <?php
$img1 = "../img/n.jpeg";
$img2 = "../img/p.jpeg" ;
$md5img1 = md5(file_get_contents($img1));
$md5img2 = md5(file_get_contents($img2));


 ?>
 <center>
  <form action="upload.php" method="POST" enctype="multipart/form-data">
 	Upload Chest X-ray:
 	<input type="file" name="fileToUpload" id="fileToUpload">
 	<input type="submit" name="Submit" value="Upload Image">
 	
 </form>
</center>
 <center>
 	<h2></h2>
 	<table border="1">
 		<tr>
 			<th>Normal chest X-ray</th>
 			<th>Your X-ray</th>
 			<th>Result</th>
 		</tr>
 		<tr>
 			<td><img src="<?php echo $img1; ?>" width="300em"/></td>
 			<td><img src="<?php echo $img2; ?>" width="300em"/></td>
 			<?php
 			if ($md5img1 == $md5img2) {
 				echo "<td>Chest X-ray Free from Pnuemonia</td>";
 			}
 			else{
 				echo "<td>Pneumonia Trace detected</td>";
 			}
 			?>

 		</tr>

 	</table>
 	<a href="#" style="text-decoration: none; background-color: black; color: white;" >Click here to start your medications</a>
 </center>

 </body>
 </html>
 <!-- <?php
 $target_dir = "uploads/";
 $target_file = $target_dir . basename($_FILES["FileToUpload"] ["name"]);
 $uploadOk = 1;
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 if(isset($_POST["submit"])){
 $check = getimagesize($_FILES["fileToUpload"] ["tmp_name"]);
 if($check !== false) {
 echo "File is an image - ".$check["mime"] . ".";
 $uploadOk = 1;
}
else{
	echo "File is not an image.";
	$uploadOk = 0;
}
}

 ?>
 -->










