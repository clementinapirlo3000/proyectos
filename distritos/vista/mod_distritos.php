<?php 
/**
  * Nombre: mod_distritos.php
  * Autor: Ing: Fernando Paez Acero
  * Autor: Ing: Alex Castro
  * Autor: Ing: Carlos Chacon
  * Acces public
  * Copyleft: 2017
  * Formulario para el modificar distritos.php
  *
**/
require ("../../presentacion/vista/cabeza.php");
$id_del_nivel = $_GET['id'];
$nivel_objeto_conexion_BD  = new clase_conecta_postgresql;
$consulta_nivel_existente = "SELECT * FROM rrh_distr WHERE id_rrh_distr = $id_del_nivel";
$nivel_objeto_conexion_BD->ejecutar_sql($consulta_nivel_existente);
$registro_nivel_existente = $nivel_objeto_conexion_BD->obtener_arreglo_objeto();
$id_del_codcel_antes    = $registro_nivel_existente->id_rrh_distr;
$nombre_codcel_antes    = $registro_nivel_existente->dis_nombre;
$sector_antes           = $registro_nivel_existente->dis_sector;

$nivel_objeto_conexion_BD->liberar_resultado();
?>
    <title>DISTRITOS</title>
  </head>
<body>
<div class="">
 <form id="form" method="post" class="form-horizontal" action="../controlador/mod_distritos_registro.php">
  <input type="hidden" name="id_del_codcel" value="<?PHP echo $id_del_codcel_antes; ?>">
  <input type="hidden" name="nombre_codcel" value="<?PHP echo $nombre_codcel_antes; ?>">
  <input type="hidden" name="sector_antes" value="<?PHP echo $sector_antes; ?>">
  <div class=" panel-heading">
    <div class="margen-bajo panel-title text-center ">
      <h1 class="title">Distritos</h1>
        <hr />
    </div>
  </div>  
  <div class="row main-login main-center main">
    <div class="col-lg-12">                   
      <div class="form-group">                
          <div class="row"> 
            <div class="form-group validacionn">
              <label class="col-lg-4 control-label text-right">Nombre Distritos</label>
              <div class="col-lg-6">
                <div class="input-group">  
                  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-address-card-o" aria-hidden="true"></i></span>
                  <input type="text" class="form-control text-uppercase" name="empresacel" value="<?PHP echo $nombre_codcel_antes; ?>" placeholder="Nombre de la empresa celular" data-bv-trigger="keyup" required data-bv-notempty-message="El nombre de la empresa celular no puede estar vacio" />
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-10">                  
          <div class="form-group">               
            <div class="row"> 
              <div class="form-group validacionn">
                <label class="col-lg-6 control-label has-error">Sector</label>
                <div class="col-lg-6">
                  <div class="input-group">  
                    <span class="input-group-addon text-uppercase" id="basic-addon1"><i class="fa fa-address-card-o" aria-hidden="true"></i></span>
                    <textarea required class="form-control text-uppercase" name="descripcion" rows="5" data-bv-stringlength data-bv-stringlength-max="600" data-bv-stringlength-message="La descripci&oacute;,n debe tener menos de 600 caracteres"><?PHP echo $sector_antes; ?></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>                            
      </div>                                 

      <div class="col-lg-12">
        <div class="form-group">
          <div class="row">
            <div class="col-lg-12">
              <div class="col-lg-3 text-right"></div>
              <div class="col-lg-3 text-right">
                <button type="submit" class="btn btn-success btn-lg btn-block">Modificar</button>
              </div>
              <div class="col-lg-3 text-left">
                <button type="button" onClick="document.location.href='../controlador/consulta_distritos.php';" class="btn btn-warning btn-lg btn-block">Regresar</button>
              </div>
              <div class="col-lg-3 text-right"></div>
            </div>
          </div> 
        </div>
      </div>
    </div>         
  </form>  
</div> 
<?PHP require ("../../presentacion/vista/pie.php"); ?>
</body>
</html>
<?php 
////// Se registra en la bitacora la acción del usuario             //
  require ("../../bitacora/vista/bitacora.php");
  $descripcion_tabla = $datos_anteriores = ""; $datos_nuevos = "";            
  $descripcion_tabla = "rrh_distr";
  $descripcion_ejecucion = "mod_distritos.php";
  $movimiento_bitacora = $_SESSION['idusuarios$nom_proyec'].' '.$_SESSION['nombre1$nom_proyec'].' '.$_SESSION['apellido1$nom_proyec'].'...'."ENTRO MODIFICAR";
  $objeto_bitacora = "SOLICITAR DATOS DEL DISTRITOS";
  $datos_anteriores = "DISTRITOS A SER MODIFICADO: ".$id_del_codcel_antes;
  $datos_nuevos = "NO APLICA";
  movimiento($movimiento_bitacora,$objeto_bitacora,$datos_anteriores,$datos_nuevos);
/////-------------------------------------------------------------------------//
?>
