<?php


$person = [ 'age '=> 24,
            'Hair Color ' => 'yellow',
            'Carear ' => 'Web Developer',

];
$person['name'] = ' Ahmad';
unset($person['age']);
require 'AssociativeArrayView.php';
?>