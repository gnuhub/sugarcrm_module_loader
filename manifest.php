<?php

$manifest =array(
    'acceptable_sugar_flavors' => array('CE','PRO','CORP','ENT','ULT'),
    'author' => 'gnuhub',
    'acceptable_sugar_versions' => array(
        'exact_matches' => array(),
        'regex_matches' => array('[0-9]\\.[0-9]\\.[0-9]$'),
    ),
    'description' => 'module loader test',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'gnuhub test',
    'published_date' => '2014-04- 2012 20:45:04',
    'type' => 'module',
    'version' => '1391608631',
);
    $installdefs =array(
        'id' => 'package_1391608631',
        'copy' => array(
            0 => array(
                'from' => '<basepath>/Files/gnuhub_test.php',
                'to' => 'gnuhub_test.php',
            ),
        ),
    );

?>