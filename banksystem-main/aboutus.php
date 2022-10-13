	<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>About-Us</title>
		<link rel="stylesheet" type="text/css" href="css/navbar.css">
  </head>
  <body class="bg-dark">

<?php
include_once "navbar.php";
?>

	<section id="about" class="container" >
    <h2 class="heading text-center text-light" style="margin-top:6rem;" >About Us</h2>
		<hr style="border: 2px solid white; border-radius: 3px; text-align:center; background-color:white;"> <br><br>
    <div class="container">
      <div class="row my-5">
        <div class="col-md-6 col-12 mx-auto">
         <div class="contain"> <img class=" mt-3 " style="width:400px;" src="img\bank.png" class="img-responsive img-fluid" alt="E-Bank"></div>
        </div>
        <div class="col-md-6 col-12 mx-auto mt-4">
          <div>
            <span class="text-light pt-5 h3">E-Bank</span>
          </div>
          <div class="mt-2">
            <span class="sub-content text-light ">It is a Basic Banking System where transactions take place
              between different users.<br>You can create an account in the bank.It can transfer Money between multiple accounts.<br> You can also view all Customer's data 
              and view all the past transactions and you can contact us.</span>
          </div>
          <a href="index.php" class="btn btn-outline-light mt-3"><b>Learn More</b></a>
        </div>
      </div>
    </div>
  </section>
	<br><br><br><br>
	<footer class="text-center mt-5 py-2">
            <p class="text-light">&copy 2022. Made with &#128151; by <b>Aarti Verma</b> 
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>