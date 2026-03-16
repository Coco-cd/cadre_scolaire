<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-trucks-en.php');

echo $twig->render('truck_MAN-en.twig', [
    'truck' => $MAN
]);

?>
