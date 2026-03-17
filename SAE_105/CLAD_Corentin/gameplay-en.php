<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-gameplay-en.php');

echo $twig->render('gameplay-en.twig', [
    'gameplay' => $all_game,
]);

?>
