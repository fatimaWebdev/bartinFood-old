<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>Bartin Food</title>
<link rel="stylesheet" href="Yemen kahvaltı cafe bartın-style.css?version=<?= time()?>">
	<!-- header font-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Karla:wght@700&display=swap" rel="stylesheet">
	<!-- header responsive--->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--serch icon-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- 		<!--- for owl responsive ---> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<!-- cardi -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head> 
<body>
<!----header-------->
	<div class="header">
		<h1>Bartin <br>Food  </h1>
		<h3> Cok Lizatli</h3>
		<hr class="boder" style="margin:auto;width:40%">
	</div>
<!---  surch----------->	
<form action="../../../../../../search.php" method="post"   >
<div class="ss">
<div class="topnav">
    <div class="box">
  <div class="container-1">
      <input type="text" name="search" placeholder="Ara... " />
      <button type="submit" name="submit" class="ara"><i class="fa fa-search"></i> ara </button>    
        </div>
    </div>
</div>
</div>
</form>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<!--- surch----------->
<!--- for owl responsive ---> 
	<div class="body">
	<div class="wrapper">
      <div class="carousel owl-carousel">
        <div class="card card-1" >
          <a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../../../../../Doner/indxe.php"> Doner </a>
          </div>
<div class="card card-2">
    <a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../../../../../burger/indxe.php"> Burger </a>
    </div>
<div class="card card-3">
    <a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../../../../../kahvaltı/indxe.php"> kahvaltı</a>
    </div>
<div class="card card-4">
    <a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../../../../../pizza/indxe.php"> Pizza </a>
     </div>
<div class="card card-5">
    <a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../../../../../çiğköfteci/indxe.php"> ÇiğKöfte </a>
    </div>
<div class="card card-7">
    <a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../../../../../Cafe/page/1/indxe.php"> Cafe </a>
    </div>
<div class="card card-8">
    <a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../../../../../balik/indxe.php"> Balık </a>
    </div>

<div class="card card-9">
<a style="align-content: center; color: #FFFFFF; font-size: 40px;" href="../../../../../pide&lamacun/indxe.php">pide&lahmacun</a>
    </div>
>

</div>
</div>
</div>	
 	<script>
      $(".carousel").owlCarousel({
        margin: 20,
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsive: {
          0:{
            items:1,
            nav: false
          },
          600:{
            items:2,
            nav: false
          },
          1000:{
            items:3,
            nav: false
          }
        }
      });
    </script>
	
<!--- card ----->

	 <div class="main" >
   <div class="container">
	   
	   <!---- for shadow img---> 
      <div class="imag">
	   
		  <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="Yemen-kahvaltı-cafe-bartın2.png" style="width:100%" alt="">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="Yemen-kahvaltı-cafe-bartın3.png" style="width:100%" alt="" >
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="Yemen-kahvaltı-cafe-bartın4.png" style="width:100%" alt="">
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>


	   
	   </div>
	   
      <div class="text-container">
       
         <h5> Yemen kahvaltı Cafe </h5>
         <div class="icon">
			 <!---- Yer ---> 
			 
			  <button id="myBtn1"><i class="fa fa-location-arrow" aria-hidden="true" ></i> <a href="https://www.google.com/maps/place/Bart%C4%B1n+Yemen+Kahvesi/@41.6346252,32.3359617,17z/data=!4m8!1m2!2m1!1sYemen+kahvalt%C4%B1+cafe+bart%C4%B1n!3m4!1s0x409b734d5996cd4d:0x5c4d8318bbbcc04d!8m2!3d41.634746!4d32.336914" target="_blank" style="color: #FFFFFF">Yer</a> </button>  <br>
		<!--- ara ------> 
	
	<br>
			 
			 <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">+905327324990</a>

</div>

<div id="">
<span style="font-size:30px;cursor:pointer ;background-color: #F27405;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
	 text-decoration: none;" onclick="openNav()"> <i class="fa fa-phone" aria-hidden="true"></i>  Ara </span>
	   </div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
			 
		
			
			 <!--- menu ----> 
			  <br>
			  
			  <button id="myBtn1"><i class="fa fa-cutlery" aria-hidden="true" ></i> <a href="https://www.google.com/maps/place/Bart%C4%B1n+Yemen+Kahvesi/@41.6346252,32.3359617,17z/data=!4m8!1m2!2m1!1sYemen+kahvalt%C4%B1+cafe+bart%C4%B1n!3m4!1s0x409b734d5996cd4d:0x5c4d8318bbbcc04d!8m2!3d41.634746!4d32.336914" target="_blank" style="color: #FFFFFF">website</a> </button>  <br>
			 
		
					
			 </div>
			 
			 
			<!------Çalışma Saat-------->
			<br> <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn"><i class="fa fa-cutlery" aria-hidden="true"></i> Çalışma Saat </button>
  <div id="myDropdown" class="dropdown-content">
    <a href="#home">Pazartesi 10:00-22:00</a>
    <a href="#about">Sali 10:00-22:00</a>
    <a href="#contact">Carcampa 10:00-22:00</a>
     <a href="#contact">Persempe 10:00-22:00</a>
      <a href="#contact">Cuma 10:00-22:00</a>
       <a href="#contact">Cumartisi X</a>
        <a href="#contact">PazarX</a>
  </div>
</div>
			
		  </div>
		  
          
      </div>
   </div>
</div>

	
	<!--footer--------------->

	
	
	
	<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
	</script>
	
	<!-------- IMG ------->
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

	<script>
/* for Btn menu */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
	

	
	
<!--footer--------------->
	<footer>
	 <!--heading-->
  <p>Bartin Food</p>
	 <!--paragraph-->
	 <p></p>
	
	 <!--copyright-->
	 <p class="copyright">Copyright Bartin Food </p>
</footer>
</body>
</html>
