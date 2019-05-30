<?php
  include($_SERVER['DOCUMENT_ROOT']."/jtc/db/db.inc.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/add_verbs.style.css">
  </head>
  <body>
    <div class="content">
      <form action="db/insert_verbs_db.php" method="post">
        <p>english word for sentence</p>
        <input type="text" name="" value="" placeholder="e.g. go"></input>
        <select name="type">
          <option>Non-past</option>
          <option>Past</option>
          <option>Non-past + past</option>
        </select>
        <p>fill in sentence <small>Without the verb.</small></p>
        <input type="text" name="" value="" placeholder="e.g. 今日は東京に"></input>
      </form>
        <a class="btn" id="left" href="index.php"><p>back</p></a>
    </div>
  </body>
</html>
