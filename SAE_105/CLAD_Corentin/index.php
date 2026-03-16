<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

echo $twig->render('home.twig', [
]);

?>
