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
        <table>
          <tr>
            <td class="heading"><h2>English</h2></td>
          </tr>
          <tr>
            <td class="qtn"><p>Non-past</p></td>
            <td><input type="text" class="tbx" name="eng_form" value="" placeholder="e.g.  go"></input></td>
          </tr>
          <tr>
            <td class="qtn"><p>Past</p></td>
            <td><input type="text" class="tbx" name="eng_neg_form" value="" placeholder="e.g.  not go"></input></td>
          </tr>
          <tr>
            <td class="heading"><h2>Formal</h2></td>
          </tr>
          <tr>
            <td class="qtn"><p>non-past</p></td>
            <td><input type="text" class="tbx" name="np_for_form" value="" placeholder="e.g.  行きます"></input></td>
          </tr>
          <tr>
            <td class="qtn"><p>Non-past negative</p></td>
            <td><input type="text" class="tbx" name="np_neg_for_form" value="" placeholder="e.g.  行きません"></input></td>
          </tr>
          <tr>
            <td class="qtn"><p>Past</p></td>
            <td><input type="text" class="tbx" name="p_for_form" value="" placeholder="e.g.  行きました"></input></td>
          <tr>
          <tr>
              <td class="qtn"><p>Past-negative</p></td>
              <td><input type="text" class="tbx" name="p_neg_for_form" value="" placeholder="e.g.  行きませんでした"></input></td>
          </tr>
          <tr>
            <td class="heading"><h2>Informal</h2></td>
          </tr>
          <tr>
            <td class="qtn"><p>Dictionary form</p></td>
            <td><input type="text" class="tbx" name="dictionary_form" value="" placeholder="e.g.  行く"></input></td>
          </tr>
          <tr>
            <td class="qtn"><p>Non-past negative</p></td>
            <td><input type="text" class="tbx" name="np_neg_inf_form" value="" placeholder="e.g.  行かない"></input></td>
          </tr>
          <tr>
            <td class="qtn"><p>Past</p></td>
            <td><input type="text" class="tbx" name="p_inf_form" value="" placeholder="e.g.  行った"></input></td>
          </tr>
          <tr>
            <td class="qtn"><p>Past-negative</p></td>
            <td><input type="text" class="tbx" name="p_neg_inf_form" value="" placeholder="e.g.  行かなかった"></input></td>
          </tr>
        </table>
          <button name="add_btn" id="right" class="btn"><p>Add<p></button>
      </form>
        <a class="btn" id="left" href="index.php"><p>back</p></a>
    </div>
  </body>
</html>
