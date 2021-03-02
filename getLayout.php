<?php
include "classes/Panel.php";
if (!isset($_POST)) {
    $arr = array("error" => "Don't try to access this script seperatly!", "errorcode" => 0);
    echo "Steven";
}
$dimension = $_POST['dimension'];
$location = $_POST['location'];
$type = $_POST['type'];


$dimension = explode('x', $dimension);
$panel = New Panel();
$panel->setHeight($dimension[1]);
$panel->setWidth($dimension[0]);
$panel->setLocation($location);
$panel->setType($type);

echo $panel->getLayoutOptions();
?>