<?php
  require ("../../menu/vista/session.php");
  $nivel = $_SESSION['nivelesacceso$nom_proyec'];
  $login          = $_SESSION['login$nom_proyec'];
  $usuario_carga  = $_SESSION['idusuarios$nom_proyec'];
  $cedula_carga   = $_SESSION['cedula$nom_proyec'];
  require ("../../conexion/controlador/clase_bd_conexion_postgres.php");
  $usuarios_objeto_conexion_BD  = new clase_conecta_postgresql;
  
  $consulta_usuario_existente= "
  SELECT * 
  FROM rrh_usuar AS u, rrh_gusua AS g, rrh_codci AS c, rrh_codce AS e
  WHERE 
  fk_id_rrh_codci = id_rrh_codci AND 
  fk_id_rrh_codce = id_rrh_codce AND 
  id_rrh_usuar = $usuario_carga";

  /*
  SELECT o.OrderID, o.OrderDate, c.CustomerName
  FROM Customers AS c, Orders AS o
  WHERE c.CustomerName="Around the Horn" AND c.CustomerID=o.CustomerID;
  */

  $usuarios_objeto_conexion_BD->ejecutar_sql($consulta_usuario_existente);
  $registro_usuario_existente = $usuarios_objeto_conexion_BD->obtener_arreglo_objeto();
  $id_del_usuario       = $registro_usuario_existente->id_rrh_usuar;
  $fk_nivel_del_usuario = $registro_usuario_existente->fk_id_rrh_gusua;
  $cedula_usuario       = $registro_usuario_existente->usu_cedul;
  $nombre_del_usuario   = $registro_usuario_existente->usu_nomb1;
  $nombre2_del_usuario  = $registro_usuario_existente->usu_nomb2;
  $apellido_del_usuario = $registro_usuario_existente->usu_apel1;
  $apellido2_del_usuario= $registro_usuario_existente->usu_apel2;
  $usu_fenac_del_usuario= $registro_usuario_existente->usu_fenac;
  $id_codci_usuario     = $registro_usuario_existente->fk_id_rrh_codci;
  $id_codce_usuario     = $registro_usuario_existente->fk_id_rrh_codce;
  $usu_tehab_usuario    = $registro_usuario_existente->usu_tehab;
  $usu_tecel_usuario    = $registro_usuario_existente->usu_tecel;
  $login_usuario        = $registro_usuario_existente->usu_login;
  $email_usuario        = $registro_usuario_existente->usu_email;
  $liter_usuario        = $registro_usuario_existente->usu_liter;
  $direc_usuario        = $registro_usuario_existente->usu_direc;
  $clave_usuario        = $registro_usuario_existente->usu_clave;
  $sexo_usuario         = $registro_usuario_existente->usu_sexo;
  $zopos_usuario        = $registro_usuario_existente->fk_id_rrh_zopos;
  $codnumer_usuario     = $registro_usuario_existente->cod_numer;
  $niv_descr            = $registro_usuario_existente->id_rrh_gusua;
  $nombre_descr         = $registro_usuario_existente->gus_descr;
  $profesiones          = $registro_usuario_existente->fk_id_rrh_profe;

  $usuario_actuante = 'ID: '.$usuario_carga.' '.$cedula_usuario.' '.$nombre_del_usuario.' '.$apellido_del_usuario;
  $usuarios_objeto_conexion_BD->liberar_resultado();


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="description" content="Sistema desarrollado por el Departamento de Sistemas e Informática de la Corporación de Salud del Estado Táchira"/>
    <meta name="keywords" content="desarrollos de sistemas informaticos a medida"/>
    <meta name="author" content="Ing. Fernando Paez Acero, Ing. Alex Castro, Ing. Carlos E. Chacón" />
    <link href="<?PHP echo $_SESSION['ruta$nom_proyec']; ?>imagenes/corposaludlogo.ico" rel="icon">
    <link href="<?PHP echo $_SESSION['ruta$nom_proyec']; ?>bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?PHP echo $_SESSION['ruta$nom_proyec']; ?>bootstrap-3.3.7/dist/css/jquery-ui.css" rel="stylesheet" media="screen">
    <link href="<?PHP echo $_SESSION['ruta$nom_proyec']; ?>bootstrap-3.3.7/dist/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?PHP echo $_SESSION['ruta$nom_proyec']; ?>bootstrap-3.3.7/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?PHP echo $_SESSION['ruta$nom_proyec']; ?>bootstrap-3.3.7/dist/css/bootstrapValidator.css" rel="stylesheet"/>
    <link href="<?PHP echo $_SESSION['ruta$nom_proyec']; ?>bootstrap-3.3.7/dist/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <link href="<?PHP echo $_SESSION['ruta$nom_proyec']; ?>bootstrap-3.3.7/dist/css/formulario.css" rel="stylesheet" type="text/css">
    <link href="<?PHP echo $_SESSION['ruta$nom_proyec']; ?>bootstrap-3.3.7/dist/iconos/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='<?PHP echo $_SESSION['ruta$nom_proyec']; ?>bootstrap-3.3.7/dist/css/family-Passion-One.css' rel='stylesheet' type='text/css'>
    <link href='<?PHP echo $_SESSION['ruta$nom_proyec']; ?>bootstrap-3.3.7/dist/css/family-Oxygen.css' rel='stylesheet' type='text/css'>
