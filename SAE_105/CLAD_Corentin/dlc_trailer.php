<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();


include('include/data-dlc.php');

echo $twig->render('dlc_trailer.twig', [
    'dlctrailer' => $all_dlc_trailer,
]);

?>