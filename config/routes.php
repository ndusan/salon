<?php

$routes = array(
            array('pattern' => '/^\/?$/',
                  'url'=>'/',
                  'folder' => 'home',
                  'file'=>'index.php',
                  'layout'=> 'default.php'),
    
            array('pattern' => '/^proizvodi\/?$/',
                  'url'=>'proizvodi',
                  'folder' => 'products',
                  'file'=>'index.php',
                  'layout'=> 'default.php'),
    
            array('pattern' => '/^usluge\/?$/',
                  'url'=>'usluge',
                  'folder' => 'service',
                  'file'=>'index.php',
                  'layout'=> 'default.php'),
    
            array('pattern' => '/^o-nama\/?$/',
                  'url'=>'o-nama',
                  'folder' => 'aboutus',
                  'file'=>'index.php',
                  'layout'=> 'default.php'),
    
            array('pattern' => '/^kontakt\/?$/',
                  'url'=>'kontakt',
                  'folder' => 'contact',
                  'file'=>'index.php',
                  'layout'=> 'default.php'),
);
