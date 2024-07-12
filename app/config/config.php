<?php 

return [
    'database' => [
        'host' => 'localhost',
        'dbname' => getenv('MYSQL_DATABASE'),
        'username' => 'root',
        'pass' => getenv('MYSQL_ROOT_PASSWORD'),
    ]
];