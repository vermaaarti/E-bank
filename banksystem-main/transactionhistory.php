<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
</head>

<body class="bg-dark">

<?php
  include 'navbar.php';
?>

	<div class="container">
        <h2 class="text-center pt-5 text-light mt-5" >Transaction History</h2>
				<hr style="border: 2px solid white;
  border-radius: 3px; text-align:center;">
        
       <br><br><br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center text-light">S.No.</th>
                <th class="text-center text-light">Sender</th>
                <th class="text-center  text-light">Receiver</th>
                <th class="text-center text-light">Amount</th>
                <th class="text-center text-light">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color : black;">
            <td class="py-2 text-light"><?php echo $rows['sno']; ?></td>
            <td class="py-2 text-light"><?php echo $rows['sender']; ?></td>
            <td class="py-2 text-light"><?php echo $rows['receiver']; ?></td>
            <td class="py-2 text-light"><?php echo $rows['balance']; ?> </td>
            <td class="py-2 text-light"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>


<footer class="text-center mt-5 py-2 text-light" >
        <p>&copy 2022. Made with &#128151; by <b>Aarti Verma</b> 
      </footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>