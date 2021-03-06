<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Slick Carousel',
    'description' => 'Slick Carousel (Slider) - Responsive, Multiple Items, Center Mode, Lazy Loading, Autoplay, Slider Syncing (Gallery)',
    'category' => 'templates',
    'version' => '2.0.0',
    'state' => 'stable',
    'clearcacheonload' => 1,
    'author' => 'Boris Schauer, Oliver Oertel',
    'author_email' => 'me@bschauer.de, oertel@analog.de',
    'author_company' => 'bschauer, analog',
    'constraints' => array(
        'depends' => array(
            'typo3' => '8.6.0-8.7.99',
            'vhs' => '*',
        ),
        'conflicts' => array(),
    ),
);