<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-dlc-en.php');

echo $twig->render('dlc_cargo-en.twig', [
    'dlccargo' => $all_dlc_cargo,
]);
?>
