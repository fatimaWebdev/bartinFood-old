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
	<a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../kahvalt??/indxe.php"> kahvalt??</a>
	</div>
<div class="card card-4">
	<a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../pizza/indxe.php"> Pizza </a>
	 </div>
<div class="card card-5">
	<a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../??i??k??fteci/indxe.php"> ??i??K??fte </a>
	</div>
<div class="card card-7">
	<a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../Cafe/page/1/indxe.php"> Cafe </a>
	</div>
<div class="card card-8">
	<a style="align-content: center; color: #FFFFFF; font-size: 60px;" href="../balik/indxe.php"> Bal??k </a>
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
			<a href="PAGE1/Amasra Bal??k Restaurant Bart??n/Amasra Bal??k Restaurant Bart??n.php">
	  <img src="PAGE1/Amasra Bal??k Restaurant Bart??n/img/Amasra-Bal??k-Restaurant-Bart??n2.png" alt="" width="100%" >
	  <div class="container">
		<h2>Amasra <br>Bal??k</h2> 
		<p>Bal??k </p>
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
	<a href="../../pages/2/type/lotis bal??k restaurant amasra bartin/lotis bal??k restaurant amasra bartin.php">
  <img src="../../pages/2/type/lotis bal??k restaurant amasra bartin/img/lotis-bal??k-restaurant-amasra-bartin.png" alt="" width="100%" >
  <div class="container">
    <h2>Lotis<br>Bal??k</h2> 
    <p>Bal??k</p>
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
		<a href="PAGE1/??appa Bal??k Restaurant bartin/??appa-Bal??k-Restaurant-bartin.php">
  <img src="PAGE1/??appa Bal??k Restaurant bartin/??appa-Bal??k-Restaurant-bartin.png" alt="" width="100%" >
  <div class="container">
    <h2>??appa <br>Bal??k </h2> 
    <p>Bal??k </p>
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
		<a href="PAGE1/Pehlivan Balik Evi bartin/Pehlivan-Balik-Evi-bartin.php">
  <img src="PAGE1/Pehlivan Balik Evi bartin/Pehlivan-Balik-Evi-bartin.png" alt="" width="100%" >
  <div class="container">
    <h2>Pehlivan  <br>BalikEvi</h2> 
    <p>Balik </p>
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
	<a href="PAGE1/B&M BALIK??ILIK bartin/B&M-BALIK??ILIK-bartin.php">
  <img src="PAGE1/B&M BALIK??ILIK bartin/B&M-BALIK??ILIK-bartin.png" alt="" width="100%" >
  <div class="container">
    <h2>B&M  <br> BALIK??ILIK</h2> 
    <p>Balik </p>
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
	<a href="PAGE1/Mustafa Amca'n??n Yeri - Canl?? Bal??k Restaurant/Mustafa-Amca'n??n-Yeri---Canl??-Bal??k-Restaurant1.php">
  <img src="PAGE1/Mustafa Amca'n??n Yeri - Canl?? Bal??k Restaurant/Mustafa-Amca'n??n-Yeri---Canl??-Bal??k-Restaurant1.png" alt="" width="100%" >
  <div class="container">
    <h2>Mustafa  <br>Amca'n??nYeri  </h2> 
    <p>Balik </p>
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
	<a href="PAGE1/Carlos Bal??k Evi/Carlos-Bal??k-Evi.php">
  <img src="PAGE1/Carlos Bal??k Evi/Carlos-Bal??k-Evi.png" alt="" width="100%" >
  <div class="container">
    <h2>Carlos  <br> Bal??k Evi</h2> 
    <p>Balik </p>
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
	<a href="../../pages/3/Dalyan Balik Evi Bart??n/Dalyan Balik Evi Bart??n.php">
  <img src="../../pages/3/Dalyan Balik Evi Bart??n/img/Dalyan-Balik-Evi-Bart??n2.png" alt="" width="100%" >
  <div class="container">
    <h2>Dalyan <br>Bal??k </h2> 
    <p>Balik </p>
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
	<a href="PAGE1/????nar Bal??k Restaurant/????nar-Bal??k-Restaurant.php">
  <img src="PAGE1/????nar Bal??k Restaurant/????nar-Bal??k-Restaurant2.png" alt="" width="100%" >
  <div class="container">
    <h2>????nar <br>Bal??k  </h2> 
    <p>Balik </p>
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
  <a href="indxe.html">&laquo;</a>
  <a href="indxe.html">1</a>
  <a href="../2/indxe.html">&raquo;</a>
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
