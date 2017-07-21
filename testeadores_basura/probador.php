<?php


echo "<br>fecha: ".$fecha= date("H:i:s");
echo "<br>hora: ".$hora = date("H:i",time()); //Hora del sistema en este momento
echo "<br>diahoy: ".$diahoy=date("d"); 	//Dia de hoy numerico
echo "<br>mes: ".$mes=date("m"); 	//Mes Numerico
echo "<br>ano: ".$ano=date("Y");		//Año
echo "<br>fecha: ".$fecha.=$ano."-".$mes."-".$diahoy;

$hoy = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
$hoy = date("m.d.y");                         // 03.10.01
$hoy = date("j, n, Y");                       // 10, 3, 2001
$hoy = date("Ymd");                           // 20010310
$hoy = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
$hoy = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
$hoy = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
$hoy = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
$hoy = date("H:i:s");                         // 17:16:18
$hoy = date("Y-m-d H:i:s");                   // 2001-03-10 17:16:18 (el formato DATETIME de MySQL)
											  // 2017-07-19 13:30:00.098922


?>