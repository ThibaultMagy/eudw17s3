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
                        if(!isset($row->fields->type_de_document)){
                              echo $row->fields->nombre_de_reservations; ?><br><?php
                              echo $row->fields->rang; ?><br><?php
                              echo $row->fields->titre_avec_lien_vers_le_catalogue; ?><br><?php
                              if(isset($row->fields->auteur)){
                                    echo $row->fields->auteur; ?><br><?php
                              }
                               ?><br><?php
                        }
                  }
            ?>
      </body>
</html>
