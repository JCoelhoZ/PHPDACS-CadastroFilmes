<?php
	$con = mysqli_connect("localhost","bob","bob","dacs2019php");

	if ($_POST["txtid"]=="0"){
		$stmt = "INSERT INTO produtora(idprodutora,nomeProdutora,presidente) VALUES(?,?,?)";
	}else{
		$stmt = "UPDATE cliente SET nomeProdutora = ?, presidente= ? where idprodutora=?";
	}

	$stmtprep = mysqli_prepare($con, $stmt);

	if ($_POST["txtid"]=="0"){
		mysqli_stmt_bind_param($stmtprep, "iss", $_POST["txtid"], $_POST["txtprodutora"], $_POST["txtpresidente"] );
	}else{
		mysqli_stmt_bind_param($stmtprep, "ssi", $_POST["txtpresidente"], $_POST["txtprodutora"], $_POST["txtid"] );
	}	
	mysqli_stmt_execute($stmtprep);

	$newURL = "listaprodutores.php";
	header('Location: '.$newURL);
?>