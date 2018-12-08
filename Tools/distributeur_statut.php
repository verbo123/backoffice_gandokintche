<?php
require 'database.php';
require 'fonction.php';
global  $bdd;
if(isset($_POST["user"]) && isset($_POST["val"]))
{
    extract($_POST);
    $result=array();
    if(verify('recharge_autorisation','utilisateur',$user) == true)
    {
        $sql=$bdd->prepare("update recharge_autorisation set valide=? where utilisateur=?");
        $sql->execute(array($val,$user));
        if($sql)
        {
            $result = true;
        }else{
            $result = false;
        }
        echo json_encode($result);

    }
}