<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>Bartin Food</title>
<link rel="stylesheet" href="style.css?version=<?= time()?>">
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
</head> 
<body>
<!----header-------->
	<div class="header">
		<h1>Bartin <br>Food  </h1>
		<h3> Cok Lizatli</h3>
		<hr class="boder" style="margin:auto;width:40%">
	</div>
<!---  surch----------->	
<form action="../../../../search.php" method="post"   >
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
          <a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../../../Doner/indxe.php"> Doner </a>
          </div>
<div class="card card-2">
    <a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../../../burger/indxe.php"> Burger </a>
    </div>
<div class="card card-3">
    <a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../../../kahvalt??/indxe.php"> kahvalt??</a>
    </div>
<div class="card card-4">
    <a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../../../pizza/indxe.php"> Pizza </a>
     </div>
<div class="card card-5">
    <a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../../../??i??k??fteci/indxe.php"> ??i??K??fte </a>
    </div>
<div class="card card-7">
    <a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../../../Cafe/page/1/indxe.php"> Cafe </a>
    </div>
<div class="card card-8">
    <a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../../../balik/indxe.php"> Bal??k </a>
    </div>

<div class="card card-9">
<a style="align-content: center; color: #FFFFFF; font-size: 40px;" href="../../../pide&lamacun/indxe.php">pide&lahmacun</a>
    </div>


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
	
<!-- card 1 --->
<div class="f">
	<div class="row">
	  <div class="column">
		<div class="card1" style="width: 100%;">
			<a href="type/One Love cafe bart??n/One Love cafe bart??n.php">
	  <img src="type/One Love cafe bart??n/One-Love-cafe-bart??n.png" alt="" width="100%" >
	  <div class="container">
		<h2>One Love<br> cafe  </h2> 
		<p>cafe</p>
	 <span class="heading">review</span>
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star"></span>
	<button class="btn"> Daha</button>
	  </div>
		</a>	
	</div>	
	  </div>
		
		<!---
		<div class="column">
    <div class="card1" style="width: 100%;">
		<a href="BOSSO CAFE bart??n/BOSSO CAFE bart??n.html">
  <img src="BOSSO CAFE bart??n/img/BOSSO-CAFE-bart??n-.png" alt="" width="100%" >
  <div class="container">
    <h2>Buraya Jr.<br>Cafe</h2> 
    <p>CAFE</p>
 <span class="heading">review</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<button class="btn"> Daha</button>
  </div>
	</a>	
</div>	
  </div> 
	------->
 		
				
	<div class="column" style="100%">
    <div class="card1" style="width: 100%;">
	<a href="type/Yemen kahvalt?? cafe bart??n/Yemen kahvalt?? cafe bart??n.php">
  <img src="type/Yemen kahvalt?? cafe bart??n/Yemen-kahvalt??-cafe-bart??n.png" alt="" width="100%" >
  <div class="container">
    <h2>Yemen<br>Kahvesi</h2> 
    <p>Cafe</p>
 <span class="heading">review</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<button class="btn"> Daha</button>
  </div></a>
</div>		
  </div>
			
	<div class="column" style="100%">
    <div class="card1" style="width: 100%;">
	<a href="type/Ede  cafe bart??n/Ede  cafe bart??n.php">
  <img src="type/Ede  cafe bart??n/Ede--cafe-bart??n.png" alt="" width="100%" >
  <div class="container">
    <h2>Ede<br>Cafe</h2> 
    <p>Cafe</p>
 <span class="heading">review</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<button class="btn"> Daha</button>
  </div></a>
</div>		
  </div>

		
		
	<div class="column">
    <div class="card1" style="width: 100%;">
		<a href="type/sofra cafe bart??n/sofra cafe bart??n.php">
  <img src="type/sofra cafe bart??n/sofra-cafe-bart??n.png" alt="" width="100%" >
  <div class="container">
    <h2>SOFRA  <br>KAHVEC??S??</h2> 
    <p>cafe</p>
 <span class="heading">review</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<button class="btn"> Daha</button>
  </div>
	</a>	
</div>	
  </div> 
  
	<!-----	
	<div class="column" style="100%">
    <div class="card1" style="width: 100%;">
	<a href="Kahve A??k??na Bart??n/Kahve A??k??na Bart??n.html">
  <img src="Kahve A??k??na Bart??n/img/Kahve-A??k??na-Bart??n.png" alt="" width="100%" >
  <div class="container">
    <h2>Bahhce Cafe<br>Bistro</h2> 
    <p>Cafe</p>
 <span class="heading">review</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<button class="btn"> Daha</button>
  </div></a>
</div>		
  </div>
----------->
			

			
	<div class="column" style="100%">
    <div class="card1" style="width: 100%;">
	<a href="type/Umut cafe bart??n/Umut cafe bart??n.php">
  <img src="type/Umut cafe bart??n/Umut-cafe-bart??n3.png" alt="" width="100%" >
  <div class="container">
    <h2>Umut<br>Cafe</h2> 
    <p>Cafe</p>
 <span class="heading">review</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<button class="btn"> Daha</button>
  </div></a>
</div>		
  </div>

			
	<div class="column" style="100%">
    <div class="card1" style="width: 100%;">
	<a href="type/Latin Night cafe bart??n/Latin Night cafe.php">
  <img src="type/Latin Night cafe bart??n/Latin-Night-cafe-bart??n.png" alt="" width="100%" >
  <div class="container">
    <h2>Latin<br>Night</h2> 
    <p>Cafe</p>
 <span class="heading">review</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<button class="btn"> Daha</button>
  </div></a>
</div>		
  </div>

	
			<div class="column" style="100%">
    <div class="card1" style="width: 100%;">
	<a href="type/??ad??r-cafe-bart??n/??ad??r-cafe-bart??n.php">
  <img src="type/??ad??r-cafe-bart??n/??ad??r-cafe-bart??n.png" alt="" width="100%" >
  <div class="container">
    <h2>??ad??r<br>Kafe</h2> 
    <p>Kafe</p>
 <span class="heading">review</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<button class="btn"> Daha</button>
  </div></a>
</div>		
  </div>

	
		
</div>
	
</div>

	<!-- pagination -->
	<section class="page">
	<div class="pagination"  >
  <a href="../1/indxe.php">&laquo;</a>
  <a href="../1/indxe.php">1</a>
  <a href="indxe.php">2</a>
  <a href="../3/indxe.php">3</a>
  <a href="../3/indxe.php">&raquo;</a>
</div>
</section>	
<!--footer--------------->
	<footer>
	 <!--heading-->
  <p>Bartin Food</p>
	 <!--paragraph-->
	 <p></p>
	
	 <!--copyright-->
	 <p class="copyright">Bartin Food Internet</p>
</footer>
	
</body>
</html>
