<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();


include('include/data-dlc.php');

echo $twig->render('dlc_accessory.twig', [
    'dlcaccessory' => $all_dlc_accessory,
]);

?>