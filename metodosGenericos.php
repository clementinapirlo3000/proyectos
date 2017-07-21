<?php
function escupe($matriz)
{
	foreach ($matriz as $nombreCampo => $valor )
	{
		echo $nombreCampo.="=";
		echo $valor.="<BR>";
	}
}

function escupe2($matriz){ foreach ($matriz as $nombreCampo => $valor )	{ echo $nombreCampo.="=";  echo $valor.="<BR>";	} }
?>