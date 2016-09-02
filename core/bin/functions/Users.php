<?php

function Users() {
  $db = new Conexion();
  // Creo una nueva instancia Conexion y se la asigno a db$
  $sql = $db->query("SELECT * FROM users;");
  // Aqui consultamos todos los campos de la tabla users
  if($db->rows($sql) > 0) {
    // NOTA DE CODIGO Users.php if($db->rows($sql) > 0) {                     (1)
    while($d = $db->recorrer($sql)) {
      $users[$d['id']] = array(
        'id' => $d['id'],
        'user' => $d['user'],
        'pass' => $d['pass'],
        'email' => $d['email'],
        'permisos' => $d['permisos']
      );
    // NOTA DE CODIGO Users.php while($d = $db->recorrer($sql)) {             (2)
    }
  } else {
    $users = false;
    // se asigna el valor Falso a la variable global $users
  }

  $db->liberar($sql);
  // Libera la memoria asociada al resultado de ($sql)
  $db->close();
  //Cierra una conexión previamente abierta a una base de datos
  return $users;
  // Devuelve la informacion $user
}

?>
