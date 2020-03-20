<?php

include_once("connection.php");

$name = filter_input(INPUT_POST, 'name');
$phone = filter_input(INPUT_POST, 'phone');
$origin = filter_input(INPUT_POST, 'origin');
$destination = filter_input(INPUT_POST, 'destination');
$datefrom = filter_input(INPUT_POST, 'datefrom');
$dateto = filter_input(INPUT_POST, 'dateto');
$travelers = filter_input(INPUT_POST, 'travelers');

$result_db = "INSERT INTO informations (name, phone, origin, destination, datefrom, dateto, travelers) VALUES ('$name', '$phone', '$origin', '$destination', '$datefrom', '$dateto', '$travelers')";

$result_reg = mysqli_query($conn, $result_db);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
}

else{
$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";}

	