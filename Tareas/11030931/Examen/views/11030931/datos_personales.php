<?php
	    include ('../../libs/adodb5/adodb-pager.inc.php');
	    include ('../../libs/adodb5/adodb.inc.php');
	    include ('../../models/Conexion.php');
	    include ('../../models/Modelo.php');
	    include ('../../models/Datos_Personales.php');
	    include ('../layouts/header.php');
?>
<pre>
<?php
	
	$personal = new Datos_Personales();
	if (isset($_POST["nombre"])) {
		$personal->set_nombre($_POST["nombre"]);
		$personal->set_apellido($_POST["apellido"]);
		$personal->set_correo($_POST["correo"]);
		$personal->set_edad($_POST["edad"]);
		$personal->set_direccion($_POST["direccion"]);
		$personal->set_numero_exterior($_POST["numero_exterior"]);
		$personal->set_colonia($_POST["colonia"]); 
		$personal->set_telefono($_POST["telefono"]);
		$personal->set_codigo_postal($_POST["codigo_postal"]); 
		$personal->set_curp($_POST["curp"]);
		$personal->inserta($personal->get_atributos());
	}
	$rs = $personal->consulta_datos();
	$personal->show_grid('*', ' ','10');
	//print_r($rs->GetArray());
?>	


<table class="table"> 
<?php
	$array_rs = $rs->GetArray();
	foreach ($array_rs as $value) {
?>	<table class="table">
	<tr>
		<td><?php echo $value['0']; ?></td>
		<td><?php echo $value['1']; ?></td>
		<td><?php echo $value['2']; ?></td>
		<td><?php echo $value['3']; ?></td>
		<td><?php echo $value['4']; ?></td>
		<td><?php echo $value['5']; ?></td>
		<td><?php echo $value['6']; ?></td>
		<td><?php echo $value['7']; ?></td>
		<td><?php echo $value['8']; ?></td>
		<td><?php echo $value['9']; ?></td>
		<td><?php echo $value['10']; ?></td>
	</tr>

	</table>
<?php
	}
?>
</table>

<form  action="" method="POST" role="form"> 
	<div class="form-group">
	<label for="nombre">Nombre</label>
		<input type="text" name="nombre" id="nombre">
	<label for="apellido">Apellido</label>
		<input type="text" name="apellido" id="apellido">
	<label for="correo">Correo</label>
		<input type="text" name="correo" id="correo">
	<label for="edad">Edad</label>
		<input type="text" name="edad" id="edad">
	<label for="direccion">Direccion</label>
		<input type="text" name="direccion" id="direccion"> 
	<label for="numero-exterior">Numero-Exterior</label>
		<input type="text" name="numero_exterior" id="numero_exterior">
	<label for="colonia">Colonia</label>
		<input type="text" name="colonia" id="colonia">
	<label for="telefono">Telefono</label>
		<input type="text" name="telefono" id="telefono">
	<label for="codigo-postal">Codigo-Postal</label>
		<input type="text" name="codigo_postal" id="codigo_postal">
	<label for="curp">Curp</label>
		<input type="text" name="curp" id="curp">
	<input type="submit" value="insertar" >
	</div>
</form>


<!--
<form class="form-horizontal" role="form" method="POST">
  <div class="form-group">
    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-10">
      <input type="nombre" class="form-control" id="nombre" placeholder="nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="apellido" class="col-sm-2 control-label">Apellido</label>
    <div class="col-sm-10">
      <input type="apellido" class="form-control" id="apellido" placeholder="apellido">
    </div>
  </div>
  <div class="form-group">
    <label for="correo" class="col-sm-2 control-label">correo</label>
    <div class="col-sm-10">
      <input type="correo" class="form-control" id="correo" placeholder="correo">
    </div>
  </div>
  <div class="form-group">
    <label for="edad" class="col-sm-2 control-label">edad</label>
    <div class="col-sm-10">
      <input type="edad" class="form-control" id="edad" placeholder="edad">
    </div>
     </div>
    <div class="form-group">
    <label for="direccion" class="col-sm-2 control-label">direccion</label>
    <div class="col-sm-10">
      <input type="direccion" class="form-control" id="direccion" placeholder="direccion">
    </div>
   </div>
   <div class="form-group">
    <label for="numero_exterior" class="col-sm-2 control-label">numero_exterior</label>
    <div class="col-sm-10">
      <input type="numero_exterior" class="form-control" id="numero_exterior" placeholder="numero_exterior">
    </div>
   </div>

   <div class="form-group">
    <label for="colonia" class="col-sm-2 control-label">colonia</label>
    <div class="col-sm-10">
      <input type="colonia" class="form-control" id="colonia" placeholder="colonia">
    </div>
   </div>

   <div class="form-group">
    <label for="telefono" class="col-sm-2 control-label">telefono</label>
    <div class="col-sm-10">
      <input type="telefono" class="form-control" id="telefono" placeholder="telefono">
    </div>
   </div>

   <div class="form-group">
    <label for="codigo_postal" class="col-sm-2 control-label">codigo_postal</label>
    <div class="col-sm-10">
      <input type="codigo_postal" class="form-control" id="codigo_postal" placeholder="codigo_postal">
    </div>
   </div>


   <div class="form-group">
    <label for="curp" class="col-sm-2 control-label">curp</label>
    <div class="col-sm-10">
      <input type="curp" class="form-control" id="curp" placeholder="curp">
    </div>
   </div>


  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">insertar</button>
    </div>
  </div>
</form>


-->

<?php
  include ('../layouts/footer.php');
?>
