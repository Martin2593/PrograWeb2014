<?php
	    include ('../../libs/adodb5/adodb-pager.inc.php');
	    include ('../../libs/adodb5/adodb.inc.php');
	    include ('../../models/Conexion.php');
	    include ('../../models/Modelo.php');
	    include ('../../models/Usuario.php');
	    include ('../layouts/header.php');
	    include ('../../libs/ER.php');
     	

 $usuario = new Usuario();
      $muestra_errores = false;
      if (isset($_POST["email"])) {
        $usuario->set_email($_POST["email"]);
        $usuario->set_user_name($_POST["user_name"]);
        $usuario->set_password($_POST["password"]);
        $usuario->set_foto($_POST["foto"]);
        $usuario->set_rfc($_POST["rfc"]);
        $usuario->set_curp($_POST["curp"]);
        
        if(count($usuario->errores) > 0){
          $muestra_errores = true;
        }else{
          $usuario->inserta($usuario->get_atributos());
        }
      }
      
?>
<div class="row">

  <div class="col-md-6 col-md-offset-3">
    <div class="<?php echo ($muestra_errores)?'alert alert-danger':''; ?> ">
      <?php 
        if ($muestra_errores) {
          foreach ($usuario->errores as $key => $value) {
            echo $value."<br>";
          }
        }
      ?>
    </div>
    <form role="form" method="POST" >
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="<?php echo $usuario->get_email(); ?>">
      </div>


      <div class="form-group">
        <label for="user_name">Usuario</label>
        <input type="user_name" class="form-control" id="user_name" name="user_name" placeholder="Usuario" value="<?php echo $usuario->get_user_name(); ?>" >
      </div>


      <div class="form-group">
        <label for="foto">Foto</label>
        <input type="foto" class="form-control" id="foto" name="foto" placeholder="Foto">
      </div>


      <div class="form-group">
        <label for="rfc">RFC</label>
        <input type="rfc" class="form-control" id="rfc" name="rfc" placeholder="RFC" value="<?php echo $usuario->get_rfc(); ?>" >
      </div>


      <div class="form-group">
        <label for="curp">Curp</label>
        <input type="curp" class="form-control" id="curp" name="curp" placeholder="Curp" value="<?php echo $usuario->get_curp(); ?>">
      </div>




      <div class="form-group">
        <label for="codigo_postal">Codigo-Postal</label>
        <input type="codigo_postal" class="form-control" id="codigo_postal" name="curp" placeholder="codigo_postal" value="<?php echo $usuario->get_codigo_postal(); ?>" >
      </div>







      <div class="form-group">
        <label for="Password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo $usuario->get_password(); ?>">
      </div>




      <button type="submit" class="btn btn-default">Aceptar</button>
    </form>
  </div>
<?php
  $usuario->show_grid('*', ' ','10');
?>

</div>
<?php include ('../layouts/footer.php'); ?>