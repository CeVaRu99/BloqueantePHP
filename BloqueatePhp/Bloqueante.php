<?php
printf("Abriendo archivo ");
$archivo url = fopen("archivo.txt","r");
$texto ="";
while ($fragmeto = fgets($archivo_url)){
    $texto.=$fragmento;
}
printf($texto);
printf("<br>Haciendo otra cosa")
?>