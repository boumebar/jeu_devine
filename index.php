<?php
require "Generator.php";

$nom = "oui";
$array = str_split($nom);


$letter = isset($_GET['jeu']) ? intval($_GET['jeu']) : 0;

require "table.php";
