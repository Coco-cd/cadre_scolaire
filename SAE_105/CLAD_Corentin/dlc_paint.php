<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();


include('include/data-dlc.php');

echo $twig->render('dlc_paint.twig', [
    'dlcpaint' => $all_dlc_paint,
]);

?> 