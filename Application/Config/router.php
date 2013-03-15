<?php

/* TODO: example below */

return array(
	'routes' => array
	(
		/* http://<domain>/ -> http://<domain>/main */
		'action' => array
		(
			'type' => 'redirect',
			'uri' => 'main',
		),

		'subroutes' => array
		(
			/* http://<domain>/main */
			'main' => array
			(
				'action' => array
				(
					'type' => 'controller',
					'controller' => 'Project\Controller\MainController',
				),
			),
			'error' => array
			(
				'action' => array
				(
					'type' => 'controller',
					'controller' => 'Project\Controller\ErrorController',
				),
			),
			/* below does not exist */
			'api' => array
			(
				'subroutes' => array
				(
					/* http://<domain>/api/microhorario */
					'microhorario' => array
					(
						'action' => array
						(
							'type' => 'controller',
							'controller' => 'Project\Controller\Resource\MicroHorarioController',
						),
					),
					'log' => array
					(
						'action' => array
						(
							'type' => 'controller',
							'controller' => 'Project\Controller\Resource\LogController',
						),
					),
				),
			),
		),
	),
	'errorRoute' => 'error',
	'baseUri' => '/restfram/Public/',
);
