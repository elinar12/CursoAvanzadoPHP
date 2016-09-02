<?php
/*
  EL NÚCLEO DE LA APLICACIÓN!
*/

session_start();

#Constantes de conexión
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','ocrendbb');

#Constantes de la APP
define('HTML_DIR','html/');
// NOTA DE CODIGO core.php define('HTML_DIR','html/');                                                       (1)
define('APP_TITLE','OcrendBB');
// NOTA DE CODIGO core.php define('APP_TITLE','OcrendBB');                                                   (2)
define('APP_COPY','Copyright &copy; ' . date('Y',time()) . ' Ocrend Software.');
// NOTA DE CODIGO core.php define('APP_COPY','Copyright &copy; ' . date('Y',time()) . ' Ocrend Software.');  (3)
define('APP_URL','http://localhost/GitHub/CursoAvanzadoPHP/');
// NOTA DE CODIGO core.php define('APP_URL','http://localhost/GitHub/OcrendBB/');                            (4)

#Estructura
require('vendor/autoload.php');
// NOTA DE CODIGO core.php require('vendor/autoload.php');                                                   (5)
require('core/models/class.Conexion.php');
// NOTA DE CODIGO core.php require('core/models/class.Conexion.php');                                        (6)
require('core/bin/functions/Encrypt.php');
// NOTA DE CODIGO core.php require('core/bin/functions/Encrypt.php');                                        (7)
require('core/bin/functions/Users.php');
// NOTA DE CODIGO core.php require('core/bin/functions/Users.php');                                          (8)
$users = Users();
// NOTA DE CODIGO core.php $users = Users();                                                                 (9)
?>
