<?php
/*
 * Define custom routes. File gets included in the router service definition.
 */
$router = new Phalcon\Mvc\Router();

$router->add('/login', array(
    'controller' => 'session',
    'action' => 'login'
));

$router->add('/', array(
    'controller' => 'rrhh',
    'action' => 'index'
));

$router->add('/logout', array(
    'controller' => 'session',
    'action' => 'logout'
));

$router->add('/reset-password/{code}/{email}', array(
    'controller' => 'user_control',
    'action' => 'resetPassword'
));

$router->add('/vacaciones/consulta', array(
	'controller' => 'rrhh',
	'action' => 'vacacionesConsulta'
	));

$router->add('/vacaciones/gestion', array(
    'controller' => 'rrhh',
    'action' => 'vacacionesGestion'
    ));

$router->add('/vacaciones/estado', array(
    'controller' => 'rrhh',
    'action' => 'vacacionesPersonal'
    ));

$router->add('/vacaciones/solicitudes', array(
    'controller' => 'rrhh',
    'action' => 'vacacionesAprobacion'
    ));


return $router;
