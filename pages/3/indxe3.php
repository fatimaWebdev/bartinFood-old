<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>Bartin Food </title>
<link rel="stylesheet" href="style3.css?version=<?= time()?>">
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
	<a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../../menu/kahvalt??/indxe.php"> kahvalt??</a>
	</div>
<div class="card card-4">
	<a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../../menu/pizza/indxe.php"> Pizza </a>
	 </div>
<div class="card card-5">
	<a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../../menu/??i??k??fteci/indxe.php"> ??i??K??fte </a>
	</div>
<div class="card card-7">
	<a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../../menu/Cafe/page/1/indxe.php"> Cafe </a>
	</div>
<div class="card card-8">
	<a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../../menu/balik/indxe.php"> Bal??k </a>
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
		<a href="Mercan ??skender Pide Kebap bart??n/Mercan ??skender Pide Kebap bart??n.php">
		
  <img src="Mercan ??skender Pide Kebap bart??n/img/Mercan-??skender-Pide-Kebap-bart??n01.png" alt="" width="100%" >
  <div class="container">
    <h2>Mercan<br>??skender</h2> 
    <p>Pide Kebap </p>
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
	<a href="Kahve A??k??na Bart??n/Kahve A??k??na Bart??n.php">
  <img src="Kahve A??k??na Bart??n/img/Kahve-A??k??na-Bart??n.png" alt="" width="100%" >
  <div class="container">
    <h2>Kahve  <br> A??k??na </h2> 
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
		<a href="Bart??n Sezgin Pide/Bart??n Sezgin Pide.php">
  <img src="Bart??n Sezgin Pide/img/Sezgin-Pide-Bart??n.png" alt="" width="100%" >
  <div class="container">
    <h2>Sezgin  <br> pide</h2> 
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
		<a href="Merdane Lokantasi Bart??n/Merdane Lokantasi Bart??n.php">
  <img src="Merdane Lokantasi Bart??n/img/Merdane-Lokantasi-Bart??n.png" alt="" width="100%" >
  <div class="container">
    <h2>Merdane   <br> Lokantasi</h2> 
    <p>Lokantasi</p>
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
		<a href="Dalyan Balik Evi Bart??n/Dalyan Balik Evi Bart??n.php">
  <img src="Dalyan Balik Evi Bart??n/img/Dalyan-Balik-Evi-Bart??n2.png" alt="" width="100%" >
  <div class="container">
    <h2>Dalyan<br>evi</h2> 
    <p>Bal??k</p>
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
		<a href="Bon Marche Cafe Restaurant bart??n/Bon Marche Cafe Restaurant bart??n.php">
  <img src="Bon Marche Cafe Restaurant bart??n/img/Bon-Marche-Cafe-Restaurant-bart??n.png" alt="" width="100%" >
  <div class="container">
    <h2>Bon<br>Marche</h2> 
    <p>Cafe   </p>
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
		<a href="Ta??han Ihlamur Cafe Bart??n/Ta??han Ihlamur Cafe Bart??n.php">
  <img src="Ta??han Ihlamur Cafe Bart??n/img/Ta??han-Ihlamur-Cafe-Bart??n.png" alt="" width="100%" >
  <div class="container">
    <h2>Ta??han<br>Ihlamur</h2> 
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
		
			
	<div class="column">
    <div class="card1" style="width: 100%;">
		<a href="Emiro??lu FastFood & K??r Pidesi bart??n/Emiro??lu FastFood & K??r Pidesi bart??n.php">
  <img src="Emiro??lu FastFood & K??r Pidesi bart??n/img/Emiro??lu-FastFood-&-K??r-Pidesi-bart??n1.png" alt="" width="100%" >
  <div class="container">
    <h2>Emiro??lu<br>FastFood </h2> 
    <p>Pide & Doner </p>
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
		<a href="BOSSO CAFE bart??n/BOSSO CAFE bart??n.php">
  <img src="BOSSO CAFE bart??n/img/BOSSO-CAFE-bart??n-.png" alt="" width="100%" >
  <div class="container">
    <h2>BOSSO<br>COFFEE</h2> 
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
		
	
		
		
</div>
	
</div>

	<!-- pagination -->
	<section class="page">
	<div class="pagination"  >
  <a href="../2/indxe.php">&laquo;</a>
  <a href="../../indxe.php">1</a>
  <a href="../2/indxe.php">2</a>
  <a href="indxe3.php">3</a>
  <!---------<a href="#">&raquo;</a>---------->
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
