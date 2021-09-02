<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Panoramic Views',
    'description' => 'Pannellum integration for TYPO3, a viewer for 360 degree and panorama images.',
    'category' => 'fe',
    'author' => 'Thomas Scholze',
    'author_email' => 'info@waurisch.de',
    'state' => 'stable',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
          'typo3' => '9.5.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'clearCacheOnLoad' => true,
    'uploadfolder' => false
];

