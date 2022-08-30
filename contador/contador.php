<?php 
$fp = fopen("http://www.moteljardin.com.mx/contador/contador.txt","r");  
//Se abre el archivo contador.txt, la r de read 

$visitas = intval(fgets($fp));  
// Se lee las visitas y se indica con intval para que se devuela un valor entero 

$visitas++;  
//Se agregan las visitas 

fclose($fp);  
// Se cierra el archivo 

$fp = fopen("http://www.moteljardin.com.mx/contador/contador.txt","w");  
// Se abre en modo de escritura 

fputs($fp,$visitas);  
// Se escriben las visitas  

echo $visitas;  
// Se muestran las visitas 
?> 