<?php
	$con = mysqli_connect("localhost", "root", "univille", "locadora");
$stmt = "INSERT INTO filme(idfilme, nome, duracao) VALUES (?,?,?)";
$stmtprep = mysqli_prepare($con, $stmt);
mysqli_stmt_bind_param($stmtprep, "isi", $_POST["txtid"], $_POST["txtnome"], $_POST["txttempo"] );
mysqli_stmt_execute($stmtprep);
?>