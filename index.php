<?php

require('core/core.php');
//OnlineUsers();

if(isset($_GET['view'])) {
# Si esta definida una variable [$_GET] que tenga el parametro ['view'] su valor es TRUE.
  if(file_exists('core/controllers/' . strtolower($_GET['view']) . 'Controller.php')) {
  # Devuelve TRUE si el archvo o directorio especificado por nombre existe;  FALSE si no.
    include('core/controllers/' . strtolower($_GET['view']) . 'Controller.php');
    # Incluye al controlador con la informacion del campo ['view'] con el contenido final
    # del archivo: [Controller.php]
  } else {
    include('core/controllers/errorController.php');
    #Se incluye el controlador de Error.
    }
} else {
  include('core/controllers/indexController.php');
  #Se incluye el controlador de Inicio.
  }

?>
