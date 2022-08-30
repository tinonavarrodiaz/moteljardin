<?php 
$fp = fopen("../contador.txt","r");  
//Se abre el archivo contador.txt, la r de read 

$visitas = intval(fgets($fp));  
// Se lee las visitas y se indica con intval para que se devuela un valor entero 


fclose($fp);  
// Se cierra el archivo 

echo $visitas;  
// Se muestran las visitas 
?> 