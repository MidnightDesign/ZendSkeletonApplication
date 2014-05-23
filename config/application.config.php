<?php
return array(
    'modules' => array(
        'Application',
        'Midnight\Wysiwyg',
        'ZfcAdmin',
        'AssetManager',
        'Midnight\AdminModule',
        'DoctrineModule',
        'DoctrineORMModule',
        'Midnight\UserModule',
        'ZfcRbac',
        'Midnight\CmsModule',
    ),
    'module_listener_options' => array(
        'module_paths' => array(
            './module',
            './vendor',
        ),
        'config_glob_paths' => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
        'config_cache_enabled' => false,
        'config_cache_key' => 'config_cache',
        'module_map_cache_enabled' => false,
        'module_map_cache_key' => 'module_classmap',
        'cache_dir' => 'data/cache',
    ),
);
