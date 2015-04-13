<?php
//session_start();
$con = mysql_connect("127.0.0.1", "root", "1234567890") or header("Location: index.php?warning=true");//die("Problemas a conectar al host");
$bd = mysql_select_db("tecnotropolisla", $con) or die("Error al conectar a la BD");

if(is_dir("Clases")){
	$dir = "";
}elseif(is_dir("../Clases")){
	$dir = "../";
}else{
	$dir = "";	
}

function cargarClases()
{
	/*if(is_dir("../Clases")){
		$dir = "../";
	}else{
		$dir = "";	
	}*/
	
	if(is_dir("Clases")){
		$dir = "";
	}elseif(is_dir("../Clases")){
		$dir = "../";
	}else{
		$dir = "";	
	}
	//class directories
	$directorys = array(
	$dir.'Clases/setget/',
	);
	//for each directory
	foreach($directorys as $directory)
	{
		//see if the file exsists
		if(is_dir($directory)){
			$clases_name = array();
			$manejador = opendir($directory);
            $i = "";
			while($element = readdir($manejador)){
				if(!is_dir($element) && $element != "." && $element != ".."){
					$clases_name[$i] = $element;
					$i++;
				}
			}
			foreach($clases_name as $clase){
				if(file_exists($directory.$clase)){
					 require_once($directory.$clase);
				}else{
					throw new Exception("La Clase $class_name no existe...");
				}
			}
		}else{
			$clases_name = array();
			$manejador = opendir($directory);
			$i=0;
			while($element = readdir($manejador)){
				if(!is_dir($element) && $element != "." && $element != ".."){
					$clases_name[$i] = $element;
					$i++;
				}
			}	
			foreach($clases_name as $clase){
				if(file_exists($directory.$clase))
				{
					require_once($directory.$clase);
					//only require the class once, so quit after to save effort (if you got more, then name them something else
				}else{
					throw new Exception("La Clase $class_name no existe...");
				}
			}
		}
		unset($clases_name);       
	}
}
cargarClases();

?>