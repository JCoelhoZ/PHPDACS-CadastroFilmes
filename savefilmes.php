<?php
	$con = mysqli_connect("localhost","bob","bob","dacs2019php");

	if ($_POST["txtcodigo"]=="0"){
		$stmt = "INSERT INTO cliente(codigo,nome,endereco) VALUES(?,?,?)";
	}else{
		$stmt = "UPDATE cliente SET nome = ?, endereco = ? where codigo=?";
	}

	$stmtprep = mysqli_prepare($con, $stmt);

	if ($_POST["txtcodigo"]=="0"){
		mysqli_stmt_bind_param($stmtprep, "iss", $_POST["txtcodigo"], $_POST["txtnome"], $_POST["txtendereco"] );
	}else{
		mysqli_stmt_bind_param($stmtprep, "ssi", $_POST["txtendereco"], $_POST["txtnome"], $_POST["txtcodigo"] );
	}	
	mysqli_stmt_execute($stmtprep);

	$newURL = "clientes.php";
	header('Location: '.$newURL);
?>