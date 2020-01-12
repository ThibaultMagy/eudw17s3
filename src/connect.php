<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
      $query = new MongoDB\Driver\Query([]);
      $rows = $mng->executeQuery("local.eudw17Users", $query);

      $userinfo = [];

      foreach ($rows as $row){
        $couple = [];
        array_push($couple, $row->_id);
        array_push($couple, $row->nickname);
        array_push($couple, $row->password);
        array_push($userinfo, $couple);
      }
    ?>

    <form class="" action="connect()" method="post">
      <input type="text" name="username" placeholder="Nickname" value="">
      <input type="password" name="password" placeholder="Password" value="">
      <input type="submit" name="" value="">
    </form>

    <?php
      function connect(){
        while ($b==False || $i<sizeof($userinfo)) {
          foreach ($userinfo as $user){
            if($_POST["username"]==$user[1] && $_POST["password"]==$user[2]){
              header("Location: dashboard.php");
              exit;
            }
          }
        }
      }
    ?>

  </body>
</html>
