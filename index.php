<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" lang="ja">
    <title></title>
    <link rel="stylesheet" href="homepage.css">
    <?php
    //includes
    include "check.code.php";
    ?>
  </head>
  <body>
    <div class="content">
      <div class="title">
      <p>Create your own test</p>
    </div>
      <form method="post">
        <table>
          <tr>
            <td>
              <select name="exc_type">
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
            </td>
            <td><input name="exc_amt" type="number" min="1" max="15" placeholder="0"></input></td>
          </tr>
        </table>
        <button name="btn">Start</button>
        <a href="add_regular_verbs.php">Add regular verbs</a>
        <a href="add_irregular_verbs.php">Add irregular verbs</a>
        <a href="add_verb_sentences.php">Add verb senteces</a>
        <?php
          include "exc_convert.php";
        ?>
      </from>
    </div>
  </body>
</html>
