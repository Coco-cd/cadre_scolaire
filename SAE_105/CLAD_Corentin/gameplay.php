<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-gameplay.php');

echo $twig->render('gameplay.twig', [
    'gameplay' => $all_game,
]);

?>