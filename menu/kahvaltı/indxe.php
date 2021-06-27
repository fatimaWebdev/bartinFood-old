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
<form action="../../search.php" method="post"   >
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
		  <a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../Doner/indxe.php"> Doner </a>
		  </div>
<div class="card card-2">
	<a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../burger/indxe.php"> Burger </a>
	</div>
<div class="card card-3">
	<a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../kahvaltı/indxe.php"> kahvaltı</a>
	</div>
<div class="card card-4">
	<a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../pizza/indxe.php"> Pizza </a>
	 </div>
<div class="card card-5">
	<a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../çiğköfteci/indxe.php"> ÇiğKöfte </a>
	</div>
<div class="card card-7">
	<a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../Cafe/page/1/indxe.php"> Cafe </a>
	</div>
<div class="card card-8">
	<a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../balik/indxe.php"> Balık </a>
	</div>
<div class="card card-9">
	<a style="align-content: center; color: #FFFFFF; font-size: 40px;" href="../pide&lamacun/indxe.php">pide&lahmacun</a>
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
			<a href="../../type/EKİN BÖREK-bartın/EKİN BÖREK-bartın.php">
	  <img src="EKİN BÖREK-bartın/img/ekin-borek-bartin.png" alt="" width="100%" >
	  <div class="container">
		<h2>EKİN  <br> BÖREK</h2> 
		<p>kahvaltı </p>
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
		
		
 <div class="column" style="100%">
    <div class="card1" style="width: 100%;">
	<a href="../../type/Osmanlı Pide/Osmanlı Pide.php">
  <img src="Osmanlı Pide/img/bartın-osmanlı-pide00.png" alt="" width="100%" >
  <div class="container">
    <h2>Osmanli <br>Pide</h2> 
    <p>kahvaltı</p>
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
		<a href="../../pages/2/type/Café de Limon Bartın/Café de Limon Bartın.php">
  <img src="Café de Limon Bartın/img/Café-de-Limon-Bartın.png" alt="" width="100%" >
  <div class="container">
    <h2>Café de <br> Limon  </h2> 
    <p>kahvaltı</p>
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
	
 		
	<div class="column">
    <div class="card1" style="width: 100%;">
		<a href="../../pages/3/BOSSO CAFE bartın/BOSSO CAFE bartın.php">
  <img src="BOSSO CAFE bartın/img/BOSSO-CAFE-bartın1.png" alt="" width="100%" >
  <div class="container">
    <h2>BOSSO <br>CAFE</h2> 
    <p>kahvaltı</p>
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
  
		
	<div class="column" style="100%">
    <div class="card1" style="width: 100%;">
	<a href="moda pastanesi bartın/moda pastanesi bartın.php">
  <img src="moda pastanesi bartın/moda-pastanesi-bartın3.png" alt="" width="100%" >
  <div class="container">
    <h2>moda  <br>pastanesi </h2> 
    <p>kahvaltı</p>
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

		<!----------	
	<div class="column" style="100%">
    <div class="card1" style="width: 100%;">
	<a href="type/FACE FOOD bartın/FACE FOOD bartın.html">
  <img src="Sariyer Börekçisi/Sariyer Börekçisi.html" alt="" width="100%" >
  <div class="container">
    <h2> Sariyer 
<br>Börekçisi </h2> 
    <p>kahvaltı</p>
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
---------------->
	<!---------		
	<div class="column" style="100%">
    <div class="card1" style="width: 100%;">
	<a href="type/FACE FOOD bartın/FACE FOOD bartın.html">
  <img src="type/FACE FOOD bartın/FACE-FOOD-bartın.png" alt="" width="100%" >
  <div class="container">
    <h2>GÖÇMEN <br> BÖREKÇİSİ</h2> 
    <p>kahvaltı</p>
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
------------> 
		
		
	<!-----				
	<div class="column" style="100%">
    <div class="card1" style="width: 100%;">
	<a href="type/FACE FOOD bartın/FACE FOOD bartın.html">
  <img src="type/FACE FOOD bartın/FACE-FOOD-bartın.png" alt="" width="100%" >
  <div class="container">
    <h2> <br> </h2> 
    <p>kahvaltı</p>
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
	<a href="type/FACE FOOD bartın/FACE FOOD bartın.html">
  <img src="type/FACE FOOD bartın/FACE-FOOD-bartın.png" alt="" width="100%" >
  <div class="container">
    <h2> <br> </h2> 
    <p>kahvaltı</p>
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

	------>		
	
	
		
</div>
	
</div>

	<!-- pagination -->
	<section class="page">
	<div class="pagination"  >
  <a href="indxe.html">&laquo;</a>
  <a href="indxe.html">1</a>
  <a href="../2/indxe.html">&raquo;</a>
</div>
</section>	
<!--footer--------------->
	<footer>
	 <!--heading-->
  <p>Going-To Internet</p>
	 <!--paragraph-->
	 <p></p>
	
	 <!--copyright-->
	 <p class="copyright">Copyright by Goin-To Internet</p>
</footer>
	
</body>
</html>
