<?php
    echo "<h1>VIEW - ROLES -> GETALL</h1>";
    // print_r($data);
    foreach ($data as $role) {
        echo $role->getId()." ".$role->getNom()."</br>";
    }
?>