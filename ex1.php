<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php
        $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $query = new MongoDB\Driver\Query([]);

        $rows = $mng->executeQuery("thibault_magy.documents", $query);
    ?>

    <a href="req1.php">Tous les titres</a>
    <br>
    <hr>
    <br>
    <a href="req2.php">Les titres des documents ayant les rangs 1 à 10</a>
    <br>
    <hr>
    <br>
    <a href="req3.php">Les auteurs de tous les documents dont le titre commence par la lettre N</a>
    <br>
    <hr>
    <br>
    <a href="req4.php">Toutes les informations vers les documents n'ayant pas de champ "type_de_document</a>
    <br>
    <hr>
    <br>
    <a href="req5">Les différents types de document qui apparaissent dans cette base</a>

    <!-- <?php
        foreach ($rows as $row) {

            echo $row->fields->titre_avec_lien_vers_le_catalogue . " (";
            echo $row->fields->auteur .") -- ";
            echo $row->fields->type_de_document ."<br>";
        }
    ?> -->
    </body>
</html>
