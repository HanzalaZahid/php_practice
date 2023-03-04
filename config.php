<?php

return [
    'routes'  => [
        '/' =>  'controllers/home.php',
        '/home' =>  'controllers/home.php',
        '/contact' =>  'controllers/contact.php',
        '/about' =>  'controllers/about.php',
        '/posts' =>  'controllers/posts.php',
        '/post' =>  'controllers/post.php',
        '/post-create' =>  'controllers/post-create.php',
        '/create-post' =>  'controllers/post-create.php',
    ],
    'database'  =>[
        'host'  => 'localhost',
        'dbname'  => 'practice',
        'user'  => 'root',
        'password'  => '',
    ]
]

?>