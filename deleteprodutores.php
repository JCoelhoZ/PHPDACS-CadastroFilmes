<?php
	$con = mysqli_connect("localhost","bob","bob","dacs2019php");

	$stmt = "DELETE FROM produtora WHERE idprodutora = ?";
	$stmtprep = mysqli_prepare($con, $stmt);
	mysqli_stmt_bind_param($stmtprep, "i", $_GET["id"]);
	mysqli_stmt_execute($stmtprep);

	$newURL = "listaprodutores.php";
	header('Location: '.$newURL);

?>