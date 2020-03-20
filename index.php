<?php
session_start();
?>
<!DOCTYPE html>
<html lang="eng">
    
    <head>
            
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
	
        <meta charset="utf-8">
        <title>Travel A</title>
      
	<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	
	<link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

	<link href="css/main.css" rel="stylesheet" media="all">
 
    <body>
	
	 <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
				<h2 class="title">Create you next travel:</h2>
        <?php
        ?>
        <form method="POST" action="logic.php">
		
		<div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
		
            <label>Name: </label>
            <input class="input--style-4" type="text" name="name"><br><br>
            
            <label>Phone: </label>
            <input class="input--style-4" type="text" name="phone"><br><br>

            <label>Origin: </label>
            <input class="input--style-4" type="text" name="origin"><br><br>
            
            <label>Destination: </label>
            <input class="input--style-4" type="text" name="destination"><br><br>
            
            <label>Date from: </label>
            <input class="input--style-4" type="date" name="datefrom"><br><br>
            
            <label>Dato to: </label>
            <input class="input--style-4" type="date" name="dateto"><br><br>
            
            <label>Travelers number: </label>
            <input class="input--style-4" type="number" name="travelers"><br><br>
			
			</div>
                            </div>
                        </div>

     
            <input class="btn btn--radius-2 btn--blue" type="submit" value="Submit">
  
        </form>
		
		
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>