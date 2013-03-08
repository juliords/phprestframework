<?php

/* TODO: example below */

return array(
	'routes' => array
	(
		/* http://<domain>/ -> http://<domain>/main */
		'action' => array
		(
			'type' => 'redirect',
			'uri' => '/main',
		),

		'subroutes' => array
		(
			/* http://<domain>/login */
			'main' => array
			(
				'action' => array
				(
					'type' => 'controller',
					'controller' => 'Prisma\Controller\MainController',
				),
			),
			'error' => array
			(
				'action' => array
				(
					'type' => 'controller',
					'controller' => 'Prisma\Controller\ErrorController',
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
							'controller' => 'Prisma\Controller\Resource\MicroHorarioController',
						),
					),
					'log' => array
					(
						'action' => array
						(
							'type' => 'controller',
							'controller' => 'Prisma\Controller\Resource\LogController',
						),
					),
				),
			),
		),
	),
	'errorRoute' => '/error'
);
