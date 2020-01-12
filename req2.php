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
                        if($row->fields->rang>0.0 && $row->fields->rang<=10.0){
                              echo $row->fields->titre_avec_lien_vers_le_catalogue;
                              ?><br><?php
                        }
                  }
            ?>
      </body>
</html>
