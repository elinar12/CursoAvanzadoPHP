<?php

class Conexion extends mysqli {
//la clase Conexion hereda todas las propiedades y metodos de la clase mysqli.
  public function __construct() {
    parent::__construct(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    // NOTA DE CODIGO class.Conexion.php parent::__construct(DB_HOST,..); (1)
    $this->connect_errno ? die('Error en la conexión a la base de datos') : null;
    // NOTA DE CODIGO class.Conexion.php $this->connect_errno ? die..     (2)
    $this->set_charset("utf8");
    // NOTA DE CODIGO class.Conexion.php $this->set_charset("utf8");      (3)
  }
  public function rows($query) {
    return mysqli_num_rows($query);
    // NOTA DE CODIGO class.Conexion.php mysqli_num_rows($query);         (4)
  }

  public function liberar($query) {
    return mysqli_free_result($query);
    // Libera la memoria asociada al resultado de $query
  }

  public function recorrer($query) {
    return mysqli_fetch_array($query);
    // NOTA DE CODIGO class.Conexion.php mysqli_fetch_array($query);      (5)
  }

}

?>
