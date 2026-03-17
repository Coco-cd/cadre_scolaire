<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-dlc-en.php');

echo $twig->render('dlc_accessory-en.twig', [
    'dlcaccessory' => $all_dlc_accessory,
]);

?>
