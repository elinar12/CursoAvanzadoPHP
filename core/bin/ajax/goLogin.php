<?php

if(!empty($_POST['user']) and !empty($_POST['pass'])) {
//  NOTA DE CODIGO goLogin.php if(!empty($_POST['user']) and !empty($_POST['pass']))   (1)
  $db = new Conexion();
  $data = $db->real_escape_string($_POST['user']);
  //  NOTA DE CODIGO goLogin.php $pass = Encrypt($_POST['pass']);                       (2)
  $pass = Encrypt($_POST['pass']);
  //  NOTA DE CODIGO goLogin.php $pass = Encrypt($_POST['pass']);                       (3)
  $sql = $db->query("SELECT id FROM users WHERE (user='$data' OR email='$data') AND pass='$pass' LIMIT 1;");
  if($db->rows($sql) > 0) {
    //  NOTA DE CODIGO goLogin.php $sql = $db->query("SELECT id FROM users WHERE..      (4)
    if($_POST['sesion']) { ini_set('session.cookie_lifetime', time() + (60*60*24));
    }
    //  NOTA DE CODIGO goLogin.php  if($_POST['sesion'])  ini_set...                    (5)
    $_SESSION['app_id'] = $db->recorrer($sql)[0];
    //  NOTA DE CODIGO goLogin.php _SESSION['app_id'] = $db->recorrer($sql)[0];         (6)
    echo 1;
  } else {
    echo '<div class="alert alert-dismissible alert-danger">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>ERROR:</strong> Las credenciales son incorrectas.
    </div>';
    }
  $db->liberar($sql);
  // Libera la memoria asociada al resultado de ($sql)
  $db->close();
  //Cierra una conexión previamente abierta a una base de datos
  } else {
  echo '<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <strong>ERROR:</strong> Todos los datos deben estar llenos.
  </div>';
  }

?>
