<?php
    try
    {
        $bdd = PDO('mysql:host=localhost;dbname=phpmyadmin;charset=utf8', 'rootr' , '');
    }catch(Exception $e)
    {
        die('Erreur'.$e->getMessage());
    }