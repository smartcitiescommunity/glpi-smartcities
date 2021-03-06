<?php
//============================================================================//
//==    Plugin pour GLPI - Dévelloppeur: Viduc (Fleury Tristan) - ©2013     ==//
//==            http://viduc.sugarbox.fr - viduc@sugarbox.fr                ==//
//============================================================================//
/**
 * Gestion du formulaire de réforme
 * Reçoit les informations depuis un formulaire de réforme et les traites
 * Renvoi sur la page de l'item traité
 */

// récupération des chemins absolus
define('GLPI_ROOT', getAbsolutePath());
include (GLPI_ROOT."inc/includes.php");

if (isset($_POST["Reformer"]))
    {
    $arrayItem[0] = $_POST["id"];
    $arrayItem[1] = $_POST["typeItem"];
    $arrayItem[2] = $_SESSION["glpiname"];
    
    // Réforme de la machine via la class de base
    $reforme = new PluginReformeReforme(); 
    $reforme->reformeItem($arrayItem);

    // Retour à la page d'appel
    Html::back();
    }
 
if (isset($_POST["Restaurer"]))
    {
    $arrayItem[0] = $_POST["id"];
    $arrayItem[1] = $_POST["typeItem"];
    $arrayItem[2] = $_SESSION["glpiname"];
    
    // Réforme de la machine via la class de base
    $reforme = new PluginReformeReforme(); 
    $reforme->restaurerItem($arrayItem);
   
    // Retour à la page d'appel
    Html::back();
    
    }    
//========================================================================//
/**
 * Récupère le chemin absolue de l'instance glpi
 * @return String : le chemin absolue (racine principale)
 */
function getAbsolutePath()
    {return str_replace("plugins/reforme/front/reforme.form.php", "", $_SERVER['SCRIPT_FILENAME']);}   
?>
