<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style2.css">
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<meta name="viewport" content="width=device-width, intial-scale=1">
	<link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Pneumcare</title>
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

<div class="slideshow-container">
<a class="bottom-right" href="disease_prediction_system.php">GET STARTED</a>
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="../img/ex.jpg" style="width:100%" >
  <div class="text">Pneumcare: Ensuring Accurate Diagnosis and Health Information</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="../img/ex.jpg" style="width:100%">
  <div class="text">Pneumcare: Ensuring Accurate Diagnosis and Health Information<</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="../img/ex.jpg" style="width:100%">
  <div class="text">Pneumcare: Ensuring Accurate Diagnosis and Health Information</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<table border="0" bgcolor="#ccc" >
 		<tr>
 			<th>Pneumonia or Bronchitis?</th>
 			<th>Physical examination of pneumonia</th>
 		</tr>
 		<tr>
 			<td><p>Pnemonia is a lung infection that can be mild or so severe that you haveto go to the hospital.
	It happens if an infection causes the air sacs of the lungs (doctors call these "alveoli") to fill up with fluild or pus.
		That can make it hard for you to breathe in enough oxygen to reach your bloodsteam.

	<p>Anyone can get this lung infection.
		But infacts younger than age 2 and people over age 65 have the highest odds. That's because their immune systems might not be strong enough to fight it.
	You can get pnemonia i one or both lungs. You can also have it and not know it. Doctors call this "Walking Pnemonia"</p>

	If your pnemonia is caused by a bacteria or virus, you can spread it to someone else.
	lifestyle habits, like smoking cigarettes and drinking too much alcohol, can also raise your chances of getting pnemonia.</p>
	<h2>Causes of pneumonia</h2>
	<a href="#" class="previous">&laquo; Previous</a>
<a href="causes.html" class="next">Next &raquo;</a></td>
 			<td><img src="../img/images.jpg" width="100%"/>
 			Physical examination may sometimes reveal low blood pressure, high heart rate, or low oxygen saturation. The respiratory rate may be faster than normal, and this may 
occur a day or two before other signs. Examination of the chest may be normal, but it may show decreased chest expansion on the affected side. Harsh breath sounds from the larger airways that are transmitted through the inflamed lung are termed bronchial breathing and are heard on auscultation with a stethoscope. Crackles (rales) may be heard over the affected area during respiration. Percussion may be dulled over the affected lung, and increased, rather than decreased, vocal resonance distinguishes pneumonia from a pleural effusion.
</td>
</tr>
</table>
</body>
</html>












