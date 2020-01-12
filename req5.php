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
                  $types = [];

                  foreach ($rows as $row) {
                        if(isset($row->fields->type_de_document) && !in_array($row->fields->type_de_document, $types)){
                              array_push($types, $row->fields->type_de_document);
                        }
                  }

                  foreach ($types as $type) {
                        echo $type; ?> <br> <?php
                  }
            ?>
      </body>
</html>
