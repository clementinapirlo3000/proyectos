<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-inverse">
 
</nav>

<div class="col-md-4"></div>
<div class="col-md-4 col-xs-12" >
	<form class="form-inline" method="post" action="grd_us.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label></br>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Apellido</label></br>
    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required="">
  </div></br></br>
    <div class="form-group">
  <label for="exampleInputEmail1">Nacionalidad</label></br>
    <select class="form-control" name="nac">
  <option>Venezolano</option>
  <option>Extranjero</option>
</select>
</div>
  <div class="form-group">
    <label for="exampleInputPassword1">Cedula</label></br>
    <input type="text" class="form-control" id="cedula" name="cedula" placeholder="XXXXXXXXX" required="">
  </div></br></br>
      <div class="form-group">
  <label for="exampleInputEmail1">Numero de telefono</label></br>
    <select class="form-control" name="ctelf">
  <option>0414</option>
  <option>0424</option>
  <option>0416</option>
  <option>0426</option>	
  <option>0412</option>
</select>

    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="0000000" required="">
  </div></br></br>
  <div class="form-group">
    <label for="exampleInputPassword1">Correo Electronico</label></br>
    <input type="text" class="form-control" id="correo" name="correo" placeholder="XXXXXXX@XXXX.XXX" required="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Fecha de Nacimiento</label></br>
    <input type="date" class="form-control" id="fechan" name="fechan" placeholder="DD/MM/AAAA" required="">
  </div></br></br>

   <div class="form-group">
    <label for="exampleInputEmail1">clave de cifrado</label></br>
    <input type="password" class="form-control" id="clavec" name="clavec" placeholder="********" required="">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Repita la clave de cifrado</label></br>
    <input type="password" class="form-control" id="clavec2" name="clavec2" placeholder="********" required="">
  </div></br></br>
   <div class="form-group">
    <label for="exampleInputEmail1">Nombre de usuario</label></br>
    <input type="text" class="form-control" id="users" name="users" placeholder="Nombre para ingreso" required="">
	  </div></br></br>
   <div class="form-group">
    <label for="exampleInputEmail1">Contraseña de acceso</label></br>
    <input type="password" class="form-control" id="pass" name="pass" placeholder="********" required="">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Confirme la contraseña de acceso</label></br>
    <input type="password" class="form-control" id="pass2" name="pass2" placeholder="********" required="">
  </div>
</br></br>
  <center><input  class="btn btn-primary btn-lg active" type="submit" name="boton" value="Guardar"/><br> </center>
</form></div>
<div class="col-md-4"></div>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>