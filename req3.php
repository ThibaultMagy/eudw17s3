<html>
      <head>
            <meta charset="utf-8">
            <title></title>
      </head>
      <body>
            <?php
                  $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
                  $query = new MongoDB\Driver\Query([]);

                  $rows = $mng->executeQuery("thibault_magy.documents", $query);

                  foreach ($rows as $row) {
                        if(isset($row->fields->auteur) && $row->fields->titre_avec_lien_vers_le_catalogue[0] == 'N'){
                              echo $row->fields->auteur." | ".$row->fields->titre_avec_lien_vers_le_catalogue;
                              ?><br><?php
                        }
                  }
            ?>
      </body>
</html>
