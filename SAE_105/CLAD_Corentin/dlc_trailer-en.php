<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-dlc-en.php');

echo $twig->render('dlc_trailer-en.twig', [
    'dlctrailer' => $all_dlc_trailer,
]);

?>
