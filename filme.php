<?php
	$con = mysqli_connect("localhost", "bob", "bob", "dacs2019php");
$stmt = "INSERT INTO filme(idfilme, nome, duracao) VALUES (?,?,?)";
$stmtprep = mysqli_prepare($con, $stmt);
mysqli_stmt_bind_param($stmtprep, "isi", $_POST["txtid"], $_POST["txtnome"], $_POST["txtduracao"] );
mysqli_stmt_execute($stmtprep);
?>