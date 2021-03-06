<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="assets/style_rooms.css">

    <!--OWL-->
    
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css">

        <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <title>BOOK</title>
    <link rel="shortcut icon" href="Logo.ico" type="image/x-icon">
  </head>


  <body style="background-color: #2b2b2b">
 <nav class="navbar sticky-top navbar-expand-lg navbar-dark fonts" style="background-color: #000000">
    <div class="container ">
        <a class="navbar-brand" href="#">
          <img src="Logo.png" width="50" height="30" alt="" loading="lazy">
        </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false"> 
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse  "  id="navbarContent">
        <ul class="navbar-nav mr-auto mt-1 ">
          <li class="nav-item">
            <li class="nav-item">
                  <a href="Main.html" class="nav-link text-white">Offers</a>
                </li>
            <a href="restaurants.html" class="nav-link text-white">Restaurants</a>
          </li>
          <li class="nav-item">
            <a href="room.html" class="nav-link text-white">Rooms & Suites</a>
          </li>
          <li class="nav-item">
            <a href="4.html" class="nav-link text-white">Wellnes</a>
          </li>
          <li class="nav-item">
            <a href="5.html" class="nav-link text-white">Experience</a>
          </li>
          <li class="nav-item">
            <a href="6.html" class="nav-link text-white">events</a>
          </li>
        </ul>
          <button type="button" class="btn text-white fonts" style="background-color: #8c6239; "> book now</button>
      </div>
    </div>
  </nav>

<div class="container carousel-font text-center text-white my-5">
<h1>Room reservation</h1>
</div>

<div class="container text-white mb-5 " style="background-color: #15171b">
	<div class="row">
		<div class="col-lg-2"></div>
		<div class="col-lg-4 mt-5">
      <h4>Check-in date</h4>
      <form action='pdo/pdo.php' method="POST">
        <input type="date" class="form-control date-style" id="date" name="dateIn" placeholder="Дата" required >
 
	
	</div>
	<div class="col-lg-4 mt-5">
      <h4>Check-out date</h4>
     
  <input type="date" class="form-control date-style" id="date" name="dateOut" placeholder="Дата" required>
      
	</div>
	<div class="col-lg-2"></div>
	</div>


	<div class="row ">
		<div class="col-lg-2"></div>
		<div class="col-lg-4 mt-4">
			<h4>Guest per room</h4>
	<div class="input-group ">
  <select name = "selectGuest[]" class="form-control w-100 date-style" id="inputGroupSelect04" aria-label="Example select with button addon">
    <option selected>Choose...</option>
    <option value="1" name="0">One</option>
    <option value="2" name="1">Two</option>
    <option value="3" name="2">Three</option>
  </select>
</div>
	</div>
	<div class="col-lg-4 mt-4">
			<h4>If you have children</h4>
	<div class="input-group ">
  <select name = "selectChild[]"class="form-control w-100 date-style" id="inputGroupSelect04" aria-label="Example select with button addon">
    <option selected>Add child</option>
    <option value="1"  name = 'one'>One</option>
    <option value="2"  name = 'two'>Two</option>
    <option value="3"  name = 'three'>Three</option>
  </select>
</div>
	</div>
	<div class="col-lg-2"></div>
	</div>

	<div class="row mt-5">
		<div class="col-lg-2"></div>
		<div class="col-lg-8 text-center mb-5">
    
      <input type="submit" class="text-white w-100 btn btn-lg" style="background-color: #8c6239; " value="CHECK AVAILABILITY" name ="reqbook">
      </form>
		</div>
		<div class="col-lg-2"></div>
	</div>
</div>
<!--Davlat ends containers and starts footer-->
<!----------------------------------------------------------->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/app.js"></script>

    <script src="OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
    <script src="OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
  </body>


  <footer class="text-left " style = "background-color: #d0d0d0;">
    <div class="container p-4  mr-auto">
        <div class="row">
            <div class="col-lg-3 pt-4">
               
                <p class="text-uppercase"> <a href="#"></a>OFFERS</p>
               <p class="text-uppercase"> <a href="#"></a>Restaurants</p>
                <p class="text-uppercase"><a href="#"></a>WELLNESS</p>
               <p class="text-uppercase"><a href="#"></a>ROOMS & SUITES</p>
              <p class="text-uppercase"><a href="#"></a>Experiences events</p>
            </div>

            <div class="col-lg-3 pt-4 ">
              <p class="text-uppercase">Contact us</p>
              <p class="text-uppercase"><a href="#"></a>TERMS & CONDITIONS</p>
              <p class="text-uppercase"><a href="#"></a>PRIVACY POLICY</p>
              <p class="text-uppercase"><a href="#"></a>ABOUT US</p>
              <a class ="pr-2"href="#"><img src="assets/img/logos/wpp2.png" width="50" height="50" alt=""></a>
              <a class ="pr-2" href="#"><img src="assets/img/logos/inst2.png" width="50" height="50"alt=""></a>
              <a class ="pr-2" href="#"><img src="assets/img/logos/twit2.png" width="50" height="50"alt=""></a>
            </div>

            <div class="col-lg-6 ">
              <img src="Logo2.png"  width="75%" height="100%" alt="" >
            </div>
        </div>
    </div>
</footer>

</html>