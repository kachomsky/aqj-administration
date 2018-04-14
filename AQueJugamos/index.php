<?php
/*Cargamos los ficheros init.php y config.php para tener los modelos y las variables constantes cargadas. */

include __DIR__.'/init.php';
include __DIR__.'/config.php';
session_start();
/*En este fichero pondremos las diferentes acciones que recibiremos a través de la URL (a traves de GET)
  y redirigiremos al controlador que se encargue de realizar esa accion.*/
  $action = '';
  if(isset($_GET['action'])){
      $action = $_GET['action'];
  }

  switch ($action) {
    case 'login':
      include __CONTROLLERS_ABS_PATH__.'login.php';
      break;

    case 'logout':
      include __CONTROLLERS_ABS_PATH__.'logout.php';
      break;

    case 'sign-up':
      include __CONTROLLERS_ABS_PATH__.'signUp.php';
      break;

    case 'gestion-juego':
      include __CONTROLLERS_ABS_PATH__.'juegoManagement.php';
      break;

    case 'anadir-juego':
      include __CONTROLLERS_ABS_PATH__.'anadirJuego.php';
      break;

    case 'eliminar-juego':
      include __CONTROLLERS_ABS_PATH__.'eliminarJuego.php';
      break;

    case 'modificar-juego':
      include __CONTROLLERS_ABS_PATH__.'modificarJuego.php';
      break;

    default:
      include __CONTROLLERS_ABS_PATH__.'login.php';
      break;
  }
 

 ?>
