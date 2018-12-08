<?php
require 'database.php';
require 'fonction.php';
global  $bdd;

$result=array();
$sql=$bdd->query("select distinct country_code from stats_visites where TIME_TO_SEC(TIMEDIFF(CURRENT_TIME(),TIME(date_updated)))/3600 > 0 and TIME_TO_SEC(TIMEDIFF(CURRENT_TIME(),TIME(date_updated)))/3600 <=24");
if($sql)
{
    while ($row=$sql->fetch(PDO::FETCH_OBJ))
    {
        $result[]=$row;
    }
}

echo json_encode($result);