<?php
/**
 * Created by PhpStorm.
 * User: triquier
 * Date: 07/01/2019
 * Time: 10:12
 */

// paramètres de connexion -----------------------------------------------------------------------------------
global $PARAM_HOTE, $PARAM_PORT, $PARAM_BDD, $PARAM_USER, $PARAM_PWD;
$PARAM_HOTE = "localhost";		// si le sgbd est sur la même machine que le serveur php
$PARAM_PORT = "3306";			// le port utilisé par le serveur MySql
$PARAM_BDD = "";		// nom de la base de données
$PARAM_USER = "";		// nom de l'utilisateur
$PARAM_PWD = "";		// son mot de passe