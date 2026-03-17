<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-trucks.php');

echo $twig->render('truck_MB.twig', [
    'truck' => $MB
]);

?>