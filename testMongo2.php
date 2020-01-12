<?php
/**
 * Created by PhpStorm.
 * User: benoit
 * Date: 16/12/19
 * Time: 20:29
 */

//connexion
    $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");

// insertion données
    $bulk = new MongoDB\Driver\BulkWrite;
    $obj = array('name' => 'Poke', 'level' => 1);
    $bulk->insert($obj);
    $obj2 = array('name' => 'Zap', 'level' => 1);
    $bulk->insert($obj2);
    $obj3 = array('name' => 'Blast', 'level' => 2);
    $bulk->insert($obj3);
    $mng->executeBulkWrite('BenoitCrespin.Spells', $bulk);

//recherche et affichage
    $filter = array('level' => 1);
    $query = new MongoDB\Driver\Query($filter);
    $rows = $mng->executeQuery('BenoitCrespin.Spells', $query);
    echo'Level 1 spell list:<br/>';
    foreach ($rows as $row) {
        echo 'Spell name: ' . $row->name . "<br>";
    }

//mise à jour
    $bulk = new MongoDB\Driver\BulkWrite;
    $bulk->update(array('name' => 'Poke'), array('$set' => array('flavor' => 'Snick snick!')));
    $bulk->update(array('name' => 'Zap'), array('$set' => array('flavor' => 'Bzazt!')));
    $bulk->update(array('name' => 'Blast'), array('$set' => array('flavor' => 'FWOOM!')));
    $mng->executeBulkWrite('BenoitCrespin.Spells', $bulk);

//recherche et affichage après mise à jour
    $filter = array('level' => 1);
    $query = new MongoDB\Driver\Query($filter);
    $rows = $mng->executeQuery('BenoitCrespin.Spells', $query);
    echo'Level 1 spell list:<br/>';
    foreach ($rows as $row) {
        echo 'Spell name: ' . $row->name;
        echo " (Flavor: " . $row->flavor . ")<br>";
    }
?>