<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-dlc-en.php');

echo $twig->render('dlc_paint-en.twig', [
    'dlcpaint' => $all_dlc_paint,
]);

?>
