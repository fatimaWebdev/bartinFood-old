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
<form action="../../search.php" method="post" >
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
	</div>>

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
			<a href="Domino's Pizza Bartin/Domino's Pizza Bartin.php">
	  <img src="Domino's Pizza Bartin/img/Domino's-Pizza-Bartin-0--.png" alt="" width="100%" >
	  <div class="container">
		<h2>Domino's<br> Pizza </h2> 
		<p>Pizza</p>
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
	<a href="Pasaport Pizza -bartın/Pasaport-Pizza--bartın.php">
  <img src="Pasaport Pizza -bartın/Pasaport-Pizza--bartın.png" alt="" width="100%" >
  <div class="container">
    <h2>Pasaport<br>Pizza</h2> 
    <p>Pizza</p>
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
		<a href="Pizza Fetta  bartın/Pizza Fetta  bartın.php">
  <img src="Pizza Fetta  bartın/Pizza-Fetta--bartın.png" alt="" width="100%" >
  <div class="container">
    <h2>Pizza<br>Fetta</h2> 
    <p>Pizza</p>
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
  <a href="1/indxe.html">&laquo;</a>
		<a href="indxe.html">1</a>
  <a href="pages/2/indxe2.html">&raquo;</a>
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
