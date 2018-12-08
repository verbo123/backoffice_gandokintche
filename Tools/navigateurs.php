<?php
require 'database.php';
require 'fonction.php';
global  $bdd;

$result=array();
$req=$bdd->query("select distinct navigateur from stats_visites  where TIME_TO_SEC(TIMEDIFF(CURRENT_TIME(),TIME(date_updated)))/60 > 0 and TIME_TO_SEC(TIMEDIFF(CURRENT_TIME(),TIME(date_updated)))/60 <=30 ");
if($req->rowCount() > 0)
{
    while ($row=$req->fetch(PDO::FETCH_OBJ))
    {
        $result[]=$row;
    }

}else{
    $result=false;
}
echo json_encode($result);