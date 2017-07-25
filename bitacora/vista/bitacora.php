<?php
//date_default_timezone_set('UTC');
function movimiento($movimientos,$objeto,$antes,$ahora, $idusuario)
{
	$bitacora_objeto_conexion_BD = new clase_conecta_postgresql;

	$consulta_bitacora_existente= "
	INSERT INTO proyectos.pro_bitac (bit_fecha, bit_hora, bit_movim, bit_objet, bit_antes, bit_ahora, bit_descr, id_pro_usuar_pro_usuar)
	VALUES ('NOW()', 'NOW()', '$movimientos', '$objeto', '$antes', '$ahora', 1, $idusuario) ";
	$bitacora_objeto_conexion_BD->ejecutar_sql($consulta_bitacora_existente);
	if (!($consulta_bitacora_existente)) echo "Error en la insercion";	

}


?>
