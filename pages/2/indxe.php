<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>Bartin Food</title>
<link rel="stylesheet" href="style2.css?version=<?= time()?>">
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
		  <a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../../menu/Doner/indxe.php"> Doner </a>
		  </div>
<div class="card card-2">
	<a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../../menu/burger/indxe.php"> Burger </a>
	</div>
<div class="card card-3">
	<a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../../menu/kahvaltı/indxe.php"> kahvaltı</a>
	</div>
<div class="card card-4">
	<a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../../menu/pizza/indxe.php"> Pizza </a>
	 </div>
<div class="card card-5">
	<a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../../menu/çiğköfteci/indxe.php"> ÇiğKöfte </a>
	</div>
<div class="card card-7">
	<a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../../menu/Cafe/page/1/indxe.php"> Cafe </a>
	</div>
<div class="card card-8">
	<a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../../menu/balik/indxe.php"> Balık </a>
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
 
  
	<div class="column" style="100%">
    <div class="card1" style="width: 100%;">
		<a href="type/Bartın komagene pazaryeri/Bartın komagene pazaryeri.html">
		
  <img src="type/Bartın komagene pazaryeri/img/Bartın-komagene-pazaryeri.png" alt="" width="100%" >
  <div class="container">
    <h2>komagene  <br>çiğköfte</h2> 
    <p>çiğköfte</p>
 <span class="heading">review</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<button class="btn" type="button" >Daha</button>
  </div>
	</a>
</div>
  </div>
		
		
		<div class="column" style="100%">
    <div class="card1" style="width: 100%;">
	<a href="type/bartın çatı cafe/bartın çatı cafe.php">
  <img src="img/Bartın-Çatı-Cafe-.png" alt="" width="100%" >
  <div class="container">
    <h2>Çatı  <br> Cafe</h2> 
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
		<a href="type/BartınPasa Döner/Bartın Pasa Döner.php">
  <img src="type/BartınPasa Döner/img/paşa-döner-bartin.png" alt="" width="100%" >
  <div class="container">
    <h2>Pasa  <br> Döner </h2> 
    <p>Döner </p>
 <span class="heading">review</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<button class="btn"> Daha </button>
  </div>
	</a>	
</div>	
  </div> 
		
	<div class="column">
    <div class="card1" style="width: 100%;">
		<a href="type/Oba Restaurant Bartın/Oba Restaurant Bartın.php">
  <img src="type/Oba Restaurant Bartın/img/Oba-Restaurant-Bartın--.png" alt="" width="100%" >
  <div class="container">
    <h2>Oba    <br>Restaurant  </h2> 
    <p>Restaurant </p>
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
		<a href="type/lotis balık restaurant amasra bartin/lotis balık restaurant amasra bartin.php">
  <img src="type/lotis balık restaurant amasra bartin/img/lotis-balık-restaurant-amasra-bartin.png" alt="" width="100%" >
  <div class="container">
    <h2>Lotis   <br> Restoran  </h2> 
    <p>Balık  </p>
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
		<a href="type/Kırımlıhan Bartın/Kırımlıhan Bartın.php">
  <img src="type/Kırımlıhan Bartın/img/Kırımlıhan-Bartın2.png" alt="" width="100%" >
  <div class="container">
    <h2>Kırımlı  <br> Han  </h2> 
    <p>Restaurant  </p>
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
		<a href="type/Café de Limon Bartın/Café de Limon Bartın.php">
  <img src="type/Café de Limon Bartın/img/Café-de-Limon-Bartın.png" alt="" width="100%" >
  <div class="container">
    <h2>Café de <br> Limon  </h2> 
    <p>cafe </p>
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
		<a href="type/bahcenTantuni  Bartın/bahcenTantuni  Bartın.php">
  <img src="type/bahcenTantuni  Bartın/img/bahçen-Tantuni2.png" alt="" width="100%" >
  <div class="container">
    <h2>Bahcen   <br> Tantuni  </h2> 
    <p>Restaurant </p>
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
		<a href="type/Amasra Balık Restaurant Bartın/Amasra Balık Restaurant Bartın.php">
  <img src="type/Amasra Balık Restaurant Bartın/img/Amasra-Balık-Restaurant-Bartın.png" alt="" width="100%" >
  <div class="container">
    <h2>Amasra <br> Balık </h2> 
    <p>Balık  </p>
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
		
	
		
		
</div>
	
</div>

	<!-- pagination -->
	<section class="page">
	<div class="pagination"  >
  <a href="../../indxe.php">&laquo;</a>
  <a href="../../indxe.php">1</a>
  <a href="indxe.php">2</a>
		<a href="../3/indxe3.php">3</a>
  <a href="../3/indxe3.php">&raquo;</a>
</div>
</section>	
<!--footer--------------->
	<footer>
	 <!--heading-->
  <p>Bartin Food</p>
	 <!--paragraph-->
	 <p></p>
	
	 <!--copyright-->
	 <p class="copyright">Copyright Bartin Food Internet</p>
</footer>
	
</body>
</html>
