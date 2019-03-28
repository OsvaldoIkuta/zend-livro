<?php
return	
[				
    'doctrine' =>	
    [								
        'connection' =>	
        [												
            'orm' =>	
            [																
                'auto_generate_proxy_classes'	=>	true,																
                'proxy_dir'		                =>	'data/cache/Proxy',																
                'proxy_namespace'				=>	'Proxy',																
                'underscore_naming_strategy'	=>	true,												
            ],												
            'orm_default' =>
                [
                    'driverClass'	=>	Doctrine\DBAL\Driver\PDOMySql\Driver::class,
                    'host'	=>	'db',
                    'port'	=>	3306,
                    'user'	=>	'dbuser',
                    'password'	=>	'654321',
                    'dbname'	=>	'dbname',
                    'driverOptions'	=>
                        [
                            \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"
                        ]
                ],
            /*[
                'driverClass'	=>	Doctrine\DBAL\Driver\PDOMySql\Driver::class,																
                'host'	=>	'127.0.0.1',
                'port'	=>	6603,
                'user'	=>	'dbuser',																
                'password'	=>	'654321',																
                'dbname'	=>	'dbname',																
                'driverOptions'	=>	
                [																				
                    \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"																
                ]												
            ],*/
        ],				
    ]
];
