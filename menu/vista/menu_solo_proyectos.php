<div class="bs-example">
	<nav class="navbar navbar-default" role="navigation">
	  <div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target=".navbar-ex1-collapse">
		  <span class="sr-only">Desplegar navegación</span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="http://www.corposaludtachira.gob.ve">SINAPRO_<?PHP echo $_SESSION['nombre_proyecto']; ?></a>
	  </div>
	  <div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
		  <li class="dropdown">
			<a href="#cargas" class="dropdown-toggle" data-toggle="dropdown">
			  En Construccion <b class="caret"></b>
			</a>
			<ul class="dropdown-menu">
			  <li><a href="<?PHP echo $_SESSION['ruta$nom_proyec']; ?>niveles/controlador/consulta_niveles.php">Niveles de Acceso</a></li>
					<li><a href="<?PHP echo $_SESSION['ruta$nom_proyec']; ?>usuarios/controlador/consulta_usuario.php">Usuarios Sistema</a></li>
					<li><a href="<?PHP echo $_SESSION['ruta$nom_proyec']; ?>empleados/controlador/consulta_empleados.php">Empleados</a></li>
					<li><a href="<?PHP echo $_SESSION['ruta$nom_proyec']; ?>/modulos/controlador/consulta_modulos.php">Modulos</a></li>
					<li><a href="#Reporte3">Asigna Modulos</a></li>
					<!--<li><a href="#Reporte3">Zona Postal</a></li>-->
					<li><a href="<?PHP echo $_SESSION['ruta$nom_proyec']; ?>codcel/controlador/consulta_codcel.php">Cod.Celular</a></li>
					<li><a href="<?PHP echo $_SESSION['ruta$nom_proyec']; ?>estatus/controlador/consulta_estatus.php">Estatus</a></li>
					<!--<li><a href="#Reporte3">Cod.Ciudad</a></li>-->
					<li role="separator" class="divider"></li>
					<li><a href="<?PHP echo $_SESSION['ruta$nom_proyec']; ?>tipoprofesion/controlador/consulta_tprofes.php">Tipo Profesi&#243;n</a></li>
					<li><a href="<?PHP echo $_SESSION['ruta$nom_proyec']; ?>profesion/controlador/consulta_profes.php">Profesi&#243;n</a></li>
					<li><a href="<?PHP echo $_SESSION['ruta$nom_proyec']; ?>parentesco/controlador/consulta_parentesco.php">Parentesco</a></li>
					<!-- <li><a href="#Reporte3">N.Educaci&oacute;n</a></li> -->
					<!--<li><a href="#Reporte3">Nacionalidad</a></li>-->
					<!-- <li><a href="#Reporte3">Gestaci&oacute;n</a></li> -->
					<li role="separator" class="divider"></li>
					<li><a href="<?PHP echo $_SESSION['ruta$nom_proyec']; ?>establecimientos/controlador/consulta_establecimientos.php">Establecimientos</a></li>
					<li><a href="<?PHP echo $_SESSION['ruta$nom_proyec']; ?>distritos/controlador/consulta_distritos.php">Distritos</a></li>
					<li><a href="<?PHP echo $_SESSION['ruta$nom_proyec']; ?>distritos/controlador/consulta_distritos.php">Ambulatorios</a></li>
					<li><a href="<?PHP echo $_SESSION['ruta$nom_proyec']; ?>distritos/controlador/consulta_distritos.php">Tipos Ambulato</a></li>
					<li><a href="<?PHP echo $_SESSION['ruta$nom_proyec']; ?>distritos/controlador/consulta_distritos.php">Tipo Hospital</a></li>
					<!-- <li role="separator" class="divider"></li> -->
					<!-- <li><a href="#Reporte3">Bioanalista</a></li> -->
					<!-- <li><a href="#Reporte3">Lab.Internos</a></li> -->
					<!-- <li><a href="#Reporte3">Lab.Externo</a></li> -->
					<!-- <li><a href="#Reporte3">Examenes</a></li> -->
					<li role="separator" class="divider"></li>
					<li><a href="#Reporte3">Pa&iacute;s</a></li>
					<li><a href="#Reporte3">Provincia</a></li>
					<li><a href="#Reporte3">Ciudad</a></li>
					<li><a href="#Reporte3">Regi&oacute;n</a></li>
					<li><a href="#Reporte3">Estado</a></li>
					<li><a href="#Reporte3">Municipio</a></li>
					<li><a href="#Reporte3">Parroquia</a></li> 
			</ul>
		  </li>
		  <li class="dropdown">
			<a href="#reportes" class="dropdown-toggle" data-toggle="dropdown">
			  En Construccion <b class="caret"></b>
			</a>
			<ul class="dropdown-menu">
			  <li><a href="#Reporte1">Niveles de Acceso</a></li>
					<li><a href="#Reporte1">Reporte1</a></li>
					<li><a href="#Reporte2">Reporte2</a></li>
					<li><a href="#Reporte3">Reporte3</a></li>
					<li role="separator" class="divider"></li>
					<li class="dropdown-header">Separador1</li>
					<li><a href="#Separador1">Separador1</a></li>
					<li><a href="#Separador2">Separador2</a></li>
			</ul>
		  </li>
		<!-- Inicio de menu proyectos -->
		  
		<?php require ("menu_seccion_proyectos.php"); ?>  
		
		<!-- FIN de menu proyectos -->


		  <li><a href="#">Enlace #2</a></li>
		</ul>	 
		<form class="navbar-form navbar-left" role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Buscar">
			</div>
			<button type="submit" class="btn btn-default">Enviar</button>
		</form>
	  </div>
	</nav>
</div>
