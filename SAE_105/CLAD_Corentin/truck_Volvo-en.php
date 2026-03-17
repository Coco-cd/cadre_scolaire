<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-trucks-en.php');

echo $twig->render('truck_Volvo-en.twig', [
    'truck' => $Volvo
]);

?>
