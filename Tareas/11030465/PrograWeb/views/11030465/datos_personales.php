
<?php
	    include ('../../libs/adodb5/adodb-pager.inc.php');
	    include ('../../libs/adodb5/adodb.inc.php');
	    include ('../../models/Conexion.php');
	    include ('../../models/Modelo.php');
	    include ('../../models/Datos_Personales.php');
	    include ('../layouts/header.php');
?>
<pre>
/*<?php
	
	$personal = new Datos_Personales();
	if (isset($_POST["nombre"])) {
		$personal->set_nombre($_POST["nombre"]);
		$personal->set_apellido($_POST["apellido"]);
		$personal->set_correo($_POST["correo"]);
		$personal->set_direccion($_POST["direccion"]);
		$personal->set_codigo($_POST["codigo"]);
		$personal->set_ciudad($_POST["ciudad"]);
		$personal->set_estado($_POST["estado"]); 
		$personal->set_pais($_POST["pais"]);
		$personal->set_telefono($_POST["telefono"]); 
		$personal->set_nacionalidad($_POST["nacionalidad"]);
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
	<div class="row">
	<div class="col-md-4">
	<label for="nombre">Nombre</label>
		<input type="text" name="nombre" id="nombre">
	<label for="apellido">Apellido</label>
		<input type="text" name="apellido" id="apellido">
	<label for="correo">Correo</label>
		<input type="text" name="correo" id="correo">
	<label for="direccion">Direccion</label>
		<input type="text" name="direccion" id="direccion">
	<label for="codigo">Codigo Postal</label>
		<input type="text" name="codigo" id="codigo"> 
	</div>
	<div class="col-md-4">	
	<label for="ciudad">Ciudad</label>
		<input type="text" name="ciudad" id="ciudad">
	<label for="estado">Estado</label>
		<input type="text" name="estado" id="estado">
	<label for="pais">Pais</label>
		<input type="text" name="pais" id="pais">
	<label for="telefono">Telefono</label>
		<input type="text" name="telefono" id="telefono">
	<label for="nacionalidad">Nacionalidad</label>
	<input type="text" name="nacionalidad" id="nacionalidad">
	</div>
	</div>
	</div>
	<input type="submit" value="insertar" class="btn btn-success" >
	
</form>


<?php
  include ('../layouts/footer.php');
?>
