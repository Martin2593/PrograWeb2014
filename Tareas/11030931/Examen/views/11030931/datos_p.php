?php
	    include ('../../libs/adodb5/adodb-pager.inc.php');
	    include ('../../libs/adodb5/adodb.inc.php');
	    include ('../../models/Conexion.php');
	    include ('../../models/Modelo.php');
	    include ('../../models/Caracol.php');
	    include ('../layouts/header.php');
?>
<pre>
<?php
	echo "Aqui va el codigo del caracol";
	$caracol = new Caracol();
	if (isset($_POST["profundidad"])) {
		$caracol->set_profundidad($_POST["profundidad"]);
		$caracol->set_sube($_POST["sube"]);
		$caracol->set_baja($_POST["baja"]);
		$caracol->set_dias($_POST["dias"]);
		$caracol->inserta($caracol->get_atributos());
	}
	$rs = $caracol->consulta_datos();
	$caracol->show_grid('*', ' ','10');
	//print_r($rs->GetArray());
?>	

<div>
	<h2>Datos-Personales</h2>
</div>


<?php
  include ('../layouts/footer.php');
?>
