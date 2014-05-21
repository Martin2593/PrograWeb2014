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
        $usuario->set_password($_POST["password"]);
        
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
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      </div>

      <button type="submit" class="btn btn-default">Aceptar</button>
    </form>
  </div>
<?php
  $usuario->show_grid('*', ' ','10');
?>

</div>
<?php include ('../layouts/footer.php'); ?>