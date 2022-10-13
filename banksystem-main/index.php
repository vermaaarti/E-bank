<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">

    <title>E-Bank</title>
  </head>

  <body class="bg-dark" style="">
	
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid" style="">
      <!-- Introduction section -->
            <div class="row text-center mt-5" style="">
					
              <div class="col-sm-12 col-md img text-center">
                <!-- <img src="img\bankimg.png" class="img-fluid pt-2"> -->
								<img src="img\bank.jpg" class="img-fluid mt-5 pt-2 img-responsive">
								<h2 class="text-light m-2">Welcome to E-Bank</h2>
              </div>
            </div>

  

      <br/>
      <section class="container" id="services">
      <div><h2 class="heading text-light text-center mt-4" >Services We Provide</h2><hr style="border: 2px solid white;
  border-radius: 3px; text-align:center;"></div><br><br><br>
            <div class="row activity text-center"  >
                  <div class="col-md act">
                    <img src="img\members.png" class="img-fluid">
                      <br/>
                    <a href="viewcustomers.php"><button class="btn-light text-dark"><b>View Customers</b></button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img\transfer.png" class="img-fluid">
                      <br/>
                    <a href="transfermoney.php"><button class="btn-light text-dark"><b>Make a Transaction</b></button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img\history.png" style="width:250px;" class="img-fluid">
                      <br/>
                    <a href="transactionhistory.php"><button class="btn-light text-dark"><b>Transaction History</b></button></a>
                    <br><br><br><br><br>
                  </div>
            </div>
      </div>
  <br><br><br>


       
  <section class="mx-auto" id="contact" >
    <br><br>
    <h2 class="text-center text-light" >Contact Us</h2><hr style="border: 2px solid white;
  border-radius: 3px; text-align:center;"> <br><br>
    <form>
      <div class="row mb-3" >
        <div class="col">
          <input type="text" class="form-control" placeholder="First name" aria-label="First name">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
        </div>
      </div>
      <div class="mb-3">
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
          placeholder="Enter your E-Mail">
      </div>
      <div class="mb-3">
        <input type="text" class="form-control" placeholder="Enter Subject" aria-label="City">
      </div>
      <div class="mb-3">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
          placeholder="Leave your comments here...."></textarea>
      </div>
			<div class="mb-3">
      
      </div>
			<div class="mb-3">
			<button type="submit" class="btn btn-light form-control">Submit</button></div>
    </form>
  </section>
  <br><br><br><br>

  

  
      <footer class="text-center mt-5 py-2 bg-dark text-light" >
        <p>&copy 2022. Made with &#128151; by <b>Aarti Verma</b> 
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>