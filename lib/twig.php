<?php

$loader = new Twig_Loader_Filesystem(ROOTPATH . '/templates');
$twig = new Twig_Environment($loader, array(
    //'cache' => ROOTPATH . '/cache',
));
$twig->addGlobal('session', $_SESSION);
$twig->addGlobal('config', $config);
$twig->addFilter(new Twig_Filter('sum', 'array_sum'));