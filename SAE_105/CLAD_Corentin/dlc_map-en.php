<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-dlc-en.php');

echo $twig->render('dlc_map-en.twig', [
    'dlcmap' => $all_dlc_map,
]);

?>
