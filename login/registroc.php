<?php

if(!empty($_POST)){
	if(isset($_POST["name"]) &&isset($_POST["lastname"]) &&isset($_POST["lastname2"]) &&isset($_POST["email"]) &&isset($_POST["direccion"])&&isset($_POST["password"]) &&isset($_POST["cpassword"])){
		if($_POST["name"]!=""&&$_POST["lastname"]!=""&&$_POST["lastname2"]!=""&&$_POST["email"]!=""&&$_POST["direccion"]!=""&&$_POST["password"]!=""&&$_POST["password"]==$_POST["cpassword"]){
			include "conexion.php";
			
			$found=false;
			$sql1= "select * from usuarios where nombre=\"$_POST[name]\" or email=\"$_POST[email]\"";
			$query = $conn->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"Nombre de usuario o email ya estan registrados.\");window.location='registro.php';</script>";
			}else{
			$sql = "insert into usuarios (nombre,apellido_p,apellido_m,email,direccion,password)values(\"$_POST[name]\",\"$_POST[lastname]\",\"$_POST[lastname2]\",\"$_POST[email]\",\"$_POST[direccion]\",\"$_POST[password]\")";
			$query = $conn->query($sql);
			if($query!=null){
				print "<script>alert(\"Registro exitoso. Proceda a logearse\");window.location='login.php';</script>";
			}
			}

		}if($_POST["password"]!==$_POST["cpassword"]){
			print "<script>alert(\"La contraseña no coincide\");window.location='registro.php';</script>";
		}
	}
}



?>