<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>Bartın Food </title>
<link rel="stylesheet" href="style.css?version=<?= time()?>">
	<!-- header font-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Karla:wght@700&display=swap" rel="stylesheet">
	<!-- header responsive--->
	<meta name="viewport" content="width=devicse-width, initial-scale=1.0">
	<!--serch icon-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- 		<!--- for owl responsive ---> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<!-- cardi -->
  <meta name="viewport">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</head>  
<body>
<!----header-------->
	<div class="header">
		<h1>Bartin <br>Food  </h1>
		<h3> Cok Lizatli</h3>
		<hr class="boder" style="margin:auto;width:40%">
	</div>
<!---  surch----------->
<form action="search.php" method="post"	>
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
<div class="warning">
<div class="alert alert-warning alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Warning!</strong> This alert box could indicate a warning that might need attention.
  </div>
  </div>
<!--- for owl responsive ---> 
	<div class="body">
	<div class="wrapper">
      <div class="carousel owl-carousel">
      <div class="card card-1" >
		  <a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="menu/Doner/indxe.php"> Doner </a>
		  </div>
<div class="card card-2">
	<a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="menu/burger/indxe.php"> Burger </a>
	</div>
<div class="card card-3">
	<a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="menu/kahvaltı/indxe.php"> kahvaltı</a>
	</div>
<div class="card card-4">
	<a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="menu/pizza/indxe.php"> Pizza </a>
	 </div>
<div class="card card-5">
	<a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="menu/çiğköfteci/indxe.php"> ÇiğKöfte </a>
	</div>
<div class="card card-7">
	<a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="menu/Cafe/page/1/indxe.php"> Cafe </a>
	</div>
<div class="card card-8">
	<a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="menu/balik/indxe.php"> Balık </a>
	</div>
<div class="card card-9">
	<a style="align-content: center; color: #FFFFFF; font-size: 40px;" href="menu/pide&lamacun/indxe.php">pide&lahmacun</a>
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
		<a href="type/Naddet Döner Burger/Naddet Döner Burger.php">
		
  <img src="img/naddet.png" alt="" width="100%" >
  <div class="container">
    <h2>Naddet <br>  Döner</h2> 
    <p>Döner</p>
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
	<a href="type/Burger King/Burger King.php">
  <img src="type/Burger King/img/Burger-King-bartin-.png" alt="" width="100%" >
  <div class="container">
    <h2>Burger <br> King</h2> 
    <p>Burger</p>
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
		<a href="type/Osmanlı Pide/Osmanlı Pide.php">
  <img src="type/Osmanlı Pide/img/bartın-osmanlı-pide---.png" alt="" width="100%" >
  <div class="container">
    <h2>Osmanlı <br> pide</h2> 
    <p>pide</p>
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
		<a href="type/EKİN BÖREK-bartın/EKİN BÖREK-bartın.php">
  <img src="type/EKİN BÖREK-bartın/img/ekin-borek-bartin.png" alt="" width="100%" >
  <div class="container">
    <h2>EKİN  <br> BÖREK</h2> 
    <p>Kahvaltı</p>
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
		<a href="type/Öncü Döner-bartin/Öncü Döner-bartın.php">
  <img src="type/Öncü Döner-bartin/img/öncü-döner-bartın.png" alt="" width="100%" >
  <div class="container">
    <h2>Öncü   <br> Döner </h2> 
    <p>Döner </p>
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
		<a href="type/Domino's Pizza Bartin/Domino's Pizza Bartin.php">
  <img src="type/Domino's Pizza Bartin/img/Domino's-Pizza-Bartin-0--.png" alt="" width="100%" >
  <div class="container">
    <h2>Domino's    <br> Pizza  </h2> 
    <p>Pizza  </p>
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
		<a href="type/pazzo cafe barin/pazzo cafe barin.php">
  <img src="type/pazzo cafe barin/img/pazzo-cafe-bartin.png" alt="" width="100%" >
  <div class="container">
    <h2>pazzo  <br> cafe  </h2> 
    <p>cafe & restaurant  </p>
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
		<a href="type/Resume Çiğköfte bartin/Resume Çiğköfte bartin.php">
  <img src="type/Resume Çiğköfte bartin/img/pazzo-cafe-bartin-1.png" alt="" width="100%" >
  <div class="container">
    <h2>Resume   <br> Çiğköfte  </h2> 
    <p>Çiğköfte </p>
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
		<a href="type/Katık Döner bartin/Katık Döner-bartın.php">
  <img src="type/Katık Döner bartin/img/Katık-Döner-bartin--.png" alt="" width="100%" >
  <div class="container">
    <h2>Katık    <br> Döner  </h2> 
    <p>Döner </p>
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
  <a href="">&laquo;</a>
  <a href="indxe.php">1</a>
  <a href="pages/2/indxe.php">2</a>
  <a href="pages/3/indxe3.php">3</a>
  <a href="pages/2/indxe.php">&raquo;</a>
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
