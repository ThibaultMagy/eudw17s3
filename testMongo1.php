<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
$mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$query = new MongoDB\Driver\Query([]);

$rows = $mng->executeQuery("BenoitCrespin.livres", $query);

foreach ($rows as $row) {

    echo $row->fields->titre_avec_lien_vers_le_catalogue . " (";
    echo $row->fields->auteur .") -- ";
    echo $row->fields->type_de_document ."<br>";
}
?>
</body>
</html>
