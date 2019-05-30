<?php
  session_start();
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
      <form method="get" action="regular_verb_conjugator.php">
        <table>
          <tr>
            <td class="heading"><h2>English</h2></td>
          </tr>
          <tr>
            <td class="qtn"><p>Non-past</p></td>
            <td><input type="text" class="tbx" name="eng_form" value="" placeholder="e.g.  go"></input></td>
          </tr>
          <tr>
            <td class="heading"><h2>Japanese</h2></td>
          </tr>
          <tr>
            <td class="qtn"><p>Dictionary form</p></td>
            <td><input type="text" class="tbx" name="dictionary_form" value="" placeholder="e.g.  行く"></input></td>
          </tr>
          <tr>
            <td class="heading"><h2>Exceptions</h2></td>
          </tr>
          <tr>
            <td class="qtn">iru/eru verb</td>
            <td>
              <input type="checkbox" class="tbx" name="iru_eru_exc" value="on"></input>

            </td>
          </tr>
          <tr>
            <td class="qtn"><p>ku-form exception</br> <small>[ った instead of いた in informal past. ]</small></p></td>
            <td><input type="checkbox" class="tbx" name="ku_exc" value="on"></td>
          </tr>
        </table>
          <button name="add_btn" id="right" class="btn"><p>Add<p></button>
      </form>
          <a class="btn" id="left" href="index.php"><p>back</p></a>
    </div>
  </body>
</html>
