<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?> 
<?php
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Usuario.php');
      include ('../../libs/Er.php');
      include ('../layouts/header.php');



      $usuario = new Usuario();
      $muestra_errores = false;
      if (isset($_POST["email"])) {
        $usuario->set_email($_POST["email"]);
        $usuario->set_username($_POST["username"]);
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
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="exampleInputUsername">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="exampleInputFoto">Foto</label>
        <input type="text" class="form-control" id="foto" name="foto" placeholder="Foto">
      </div>
       <div class="form-group">
        <label for="exampleInputRfc">RFC</label>
        <input type="text" class="form-control" id="rfc" name="rfc" placeholder="Rfc">
      </div>
       <div class="form-group">
        <label for="exampleInputCurp">CURP</label>
        <input type="text" class="form-control" id="curp" name="curp" placeholder="Curp">
      </div>

      <button type="submit" class="btn btn-success">Aceptar</button>
    </form>
  </div>
<?php
  $usuario->show_grid('*', ' ','10');
?>

</div>
<?php include ('../layouts/footer.php'); ?>