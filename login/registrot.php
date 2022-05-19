<?php

if(!empty($_POST)){
	if(isset($_POST["inputNumero"]) &&isset($_POST["inputNombre"]) &&isset($_POST["mes"]) &&isset($_POST["year"]) &&isset($_POST["inputCCV"])){
		if($_POST["inputNumero"]!=""&&$_POST["inputNombre"]!=""&&$_POST["mes"]!=""&&$_POST["year"]!=""&&$_POST["inputCCV"]!=""){
			include "conexion.php";
			
			$found=false;
			$sql1= "select * from tarjeta where numero_tarj=\"$_POST[inputNumero]\" or nombre_tarj=\"$_POST[inputNombre]\"";
			$query = $conn->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"Esta tarjeta ya esta registrada.\");window.location='../tarjeta/tarjeta.php';</script>";
			}else{

				
				$user_id=null;
				$sql1= "select id_usuario from usuarios";
			$query = $conn->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["id_usuario"];
				break;
			}


			$sql = "insert into tarjeta (id_usuario,nombre_tarj,numero_tarj,cvc,f_venci,a_venci)values(\"$user_id\",\"$_POST[inputNombre]\",\"$_POST[inputNumero]\",\"$_POST[inputCCV]\",\"$_POST[mes]\",\"$_POST[year]\")";
			$query = $conn->query($sql);
			if($query!=null){
				print "<script>alert(\"Compra realizada, espera tu pedido pronto\");window.location='../carroT.php';</script>";
			}
			}

		}
	}else{
		print "<script>alert(\"no entro\");window.location='./carroT.php';</script>";
	}
}



?>