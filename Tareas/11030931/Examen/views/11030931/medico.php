<?php
	    include ('../../libs/adodb5/adodb-pager.inc.php');
	    include ('../../libs/adodb5/adodb.inc.php');
	    include ('../../models/Conexion.php');
	    include ('../../models/Modelo.php');
	    include ('../../models/Medico.php');
	    include ('../layouts/header.php');
?>
<pre>
<?php
	
	$medico = new Medico();
	if (isset($_POST["nombre"])) {
		$medico->set_nombre($_POST["nombre"]);
		$medico->set_apellido($_POST["apellido"]);
		$medico->set_edad($_POST["edad"]);
		$medico->set_tipo_sangre($_POST["tipo_sangre"]);
		$medico->set_direccion($_POST["direccion"]);
		$medico->set_color_ojos($_POST["color_ojos"]);
		$medico->set_enfermedades_respiratorias($_POST["enfermedades_respiratorias"]); 
		$medico->set_estatura($_POST["estatura"]);
		$medico->set_peso($_POST["peso"]); 
		$medico->set_curp($_POST["curp"]);
		$medico->inserta($medico->get_atributos());
	}
	$rs = $medico->consulta_datos();
	$medico->show_grid('*', ' ','10');
	//print_r($rs->GetArray());
?>	


<table class="table"> 
<?php
	$array_rs = $rs->GetArray();
	foreach ($array_rs as $value) {
?>	
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

<?php
	}
?>
</table>

<form action="" method="POST">
	<label for="nombre">NOMBRE</label>
		<input type="text" name="nombre" id="nombre">
	<label for="apellido">APELLIDO</label>
		<input type="text" name="apellido" id="apellido">
	<label for="edad">EDAD</label>
		<input type="text" name="edad" id="edad">
	<label for="tipo_sangre">TIPO_DE_SANGRE</label>
		<input type="text" name="tipo_sangre" id="tipo_sangre">
	<label for="direccion">DIRECCION</label>
		<input type="text" name="direccion" id="direccion"> 
	<label for="color_ojos">COLOR_DE_OJOS</label>
		<input type="text" name="color_ojos" id="color_ojos">
	<label for="enfermedades_respiratorias">ENFERMEDADES_RESPIRATORIAS</label>
		<input type="text" name="enfermedades_respiratorias" id="enfermedades_respiratorias">
	<label for="estatura">ESTATURA</label>
		<input type="text" name="estatura" id="estatura">
	<label for="peso">PESO</label>
		<input type="text" name="peso" id="peso">
	<label for="curp">CURP</label>
		<input type="text" name="curp" id="curp">
	<input type="submit" value="insertar" >
</form>





<?php
  include ('../layouts/footer.php');
?>
