<?php

if(!empty($_POST)){
	if(isset($_POST["name"]) &&isset($_POST["password"])){
		if($_POST["name"]!=""&&$_POST["password"]!=""){
			include "conexion.php";
			
			$user_id=null;
			$sql1= "select * from usuarios where (nombre=\"$_POST[name]\" or email=\"$_POST[name]\") and password=\"$_POST[password]\" ";
			$query = $conn->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["id_usuario"];
				break;
			}
			if($user_id==null){
				print "<script>alert(\"Acceso invalido.\");window.location='./login.php';</script>";
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
				print "<script>window.location='../index.php';</script>";				
			}
		}
	}
}



?>