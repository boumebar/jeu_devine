<?php
require "Generator.php";

$nom = "sabrina";
$array = str_split($nom);


$letter = isset($_GET['jeu']) ? intval($_GET['jeu']) : 0;

require "views/table.html.php";
