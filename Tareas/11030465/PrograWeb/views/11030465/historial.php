
<?php
	    include ('../../libs/adodb5/adodb-pager.inc.php');
	    include ('../../libs/adodb5/adodb.inc.php');
	    include ('../../models/Conexion.php');
	    include ('../../models/Modelo.php');
	    include ('../../models/Historial.php');
	    include ('../../views/11030465/formato.css');
	    include ('../layouts/header.php');
?>
<pre>
/*<?php
	
	$paciente = new Historial();
	if (isset($_POST["nombre"])) {
		$paciente->set_nombre($_POST["nombre"]);
		$paciente->set_apellido($_POST["apellido"]);
		$paciente->set_sintomas($_POST["sintomas"]);
		$paciente->set_enfermedad($_POST["enfermedad"]);
		$paciente->set_medicamento($_POST["medicamento"]);
		$paciente->set_sangre($_POST["sangre"]);
		$paciente->set_dias($_POST["dias"]); 
		$paciente->set_antecedentes($_POST["antecedentes"]);
		$paciente->set_alergias($_POST["alergias"]); 
		$paciente->set_descripcion($_POST["descripcion"]);
		$paciente->inserta($paciente->get_atributos());
	}
	$rs = $paciente->consulta_datos();
	$paciente->show_grid('*', ' ','10');
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
	<div class="row ">
	<div class="col-md-4 color1">
	<label for="nombre">Nombre</label>
		<input type="text" name="nombre" id="nombre">
	<label for="apellido">Apellido</label>
		<input type="text" name="apellido" id="apellido">
	<label for="sintomas">Sintomas</label>
		<input type="text" name="sintomas" id="sintomas">
	<label for="enfermedad">Enfermedad</label>
		<input type="text" name="enfermedad" id="enfermedad">
	<label for="medicamento">Medicamento</label>
		<input type="text" name="medicamento" id="medicamento"> 
	</div>
	<div class="col-md-4 color1">	
	<label for="sangre">Sangre</label>
		<input type="text" name="sangre" id="sangre">
	<label for="dias">Dias de Tratamiento</label>
		<input type="text" name="dias" id="dias">
	<label for="antecedentes">Antecedentes</label>
		<input type="text" name="antecedentes" id="antecedentes">
	<label for="alergias">Alergias</label>
		<input type="text" name="alergias" id="alergias">
	<label for="descripcion">Descripcion</label>
	<input type="text" name="descripcion" id="descripcion">
	</div>
	</div>
	</div>
	<input type="submit" value="insertar" class="btn btn-success" >
	
</form>


<?php
  include ('../layouts/footer.php');
?>
