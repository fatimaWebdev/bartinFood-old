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
<form action="search.php" method="post"	>
<div class="topnav">
	<div class="box">
  <div class="container-1">
     <div  class="icon" >
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



<?php
$search_value = $_POST['search'];

$dbserver = "localhost";
$username = "root";
$password = "";
$dbname = "bartin food";

$conn = mysqli_connect($dbserver,$username,$password,$dbname);
//empty
if ($conn -> connect_error){
    echo 'connection Faild : '.$conn ->connect_error  ;
} else {
    $sql = "SELECT * from  food where a_type LIKE '%$search_value%'";
    //empty
    $res=$conn->query($sql);
} 
//doner
 if ($conn -> connect_error){
    echo 'connection Faild : '.$conn ->connect_error  ;
} else {
    $sql = "SELECT * from  food where a_doner LIKE '%$search_value%'";

    $res=$conn->query($sql);

        while($row=$res->fetch_assoc()){
            echo  '<a href="menu/Doner/indxe.php"><H5>  Doner </H5> </a> ';
            echo '<a href="menu/Doner/indxe.php"> <button class="btnphp"> Daha </button> </a> ';
          }  

} 
//burger
if ($conn -> connect_error){
  echo 'connection Faild : '.$conn ->connect_error  ;
} else {
  $sql = "SELECT * from  food where a_Burger LIKE '%$search_value%'";

  $res=$conn->query($sql);

      while($row=$res->fetch_assoc()){
          echo  '<a href="menu/Burger/indxe.php"><H5>  Burger </H5> </a> ';
          echo '<a href="menu/Burger/indxe.php"> <button class="btnphp"> Daha </button> </a> ';
        }  

} 
//a_Pizza
if ($conn -> connect_error){
  echo 'connection Faild : '.$conn ->connect_error  ;
} else {
  $sql = "SELECT * from  food where a_Pizza LIKE '%$search_value%'";

  $res=$conn->query($sql);

      while($row=$res->fetch_assoc()){
          echo  '<a href="menu/pizza/indxe.php"><H5>  Pizza </H5> </a> ';
          echo '<a href="menu/pizza/indxe.php"> <button class="btnphp"> Daha </button> </a> ';
        }  

}

//a_kahvaltı
if ($conn -> connect_error){
  echo 'connection Faild : '.$conn ->connect_error  ;
} else {
  $sql = "SELECT * from  food where a_kahvalti LIKE '%$search_value%'";

  $res=$conn->query($sql);

      while($row=$res->fetch_assoc()){
          echo  '<a href="menu/kahvaltı/indxe.php"><H5>  kahvaltı </H5> </a> ';
          echo '<a href="menu/kahvaltı/indxe.php"> <button class="btnphp"> Daha </button> </a> ';
        }  

}
//a_ÇiğKöfte
if ($conn -> connect_error){
  echo 'connection Faild : '.$conn ->connect_error  ;
} else {
  $sql = "SELECT * from  food where a_cigKofte LIKE '%$search_value%'";

  $res=$conn->query($sql);

      while($row=$res->fetch_assoc()){
          echo  '<a href="menu/çiğköfteci/indxe.php"><H5>  ÇiğKöfte </H5> </a> ';
          echo '<a href="menu/çiğköfteci/indxe.php"> <button class="btnphp"> Daha </button> </a> ';
        }  

}
//a_Cafe
if ($conn -> connect_error){
  echo 'connection Faild : '.$conn ->connect_error  ;
} else {
  $sql = "SELECT * from  food where a_Cafe LIKE '%$search_value%'";

  $res=$conn->query($sql);

      while($row=$res->fetch_assoc()){
          echo  '<a href=menu/Cafe/page/1/indxe.php"><H5>  Cafe </H5> </a> ';
          echo '<a href="menu/Cafe/page/1/indxe.php"> <button class="btnphp"> Daha </button> </a> ';
        }  

}
//a_Balık
if ($conn -> connect_error){
  echo 'connection Faild : '.$conn ->connect_error  ;
} else {
  $sql = "SELECT * from  food where a_Balik LIKE '%$search_value%'";

  $res=$conn->query($sql);

      while($row=$res->fetch_assoc()){
          echo  '<a href="menu/balik/indxe.php"><H5>  Balık </H5> </a> ';
          echo '<a href="menu/balik/indxe.php"> <button class="btnphp"> Daha </button> </a> ';
        }  

}
//a_pide
if ($conn -> connect_error){
  echo 'connection Faild : '.$conn ->connect_error  ;
} else {
  $sql = "SELECT * from  food where a_pide LIKE '%$search_value%'";

  $res=$conn->query($sql);

      while($row=$res->fetch_assoc()){
          echo  '<a href="menu/pide&lamacun/indxe.php"><H5>  pide </H5> </a> ';
          echo '<a href="menu/pide&lamacun/indxe.php"> <button class="btnphp"> Daha </button> </a> ';
        }  

}
//a_lahmacun
if ($conn -> connect_error){
  echo 'connection Faild : '.$conn ->connect_error  ;
} else {
  $sql = "SELECT * from  food where a_lahmacun LIKE '%$search_value%'";

  $res=$conn->query($sql);

      while($row=$res->fetch_assoc()){
          echo  '<a href="menu/pide&lamacun/indxe.php"><H5>  lahmacun </H5> </a> ';
          echo '<a href="menu/pide&lamacun/indxe.php"> <button class="btnphp"> Daha </button> </a> ';
        }  

}
?>

<!--footer--------------->
	<footer>
	 <!--heading-->
  <p>Bartin Food</p>
	 <!--paragraph-->
	 <p></p>
	
	 <!--copyright-->
	 <p class="copyright">Copyright Bartin Food Internet</p>
</footer>
	