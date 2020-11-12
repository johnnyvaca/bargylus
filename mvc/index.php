<?php
/*
require "model/category.php";
$c = new Category();
$c->SetId(2);
print_r($c->read());
*/
require 'model/Test.php';
$test = new Test();
$recup =$test->read();
?>
<!DOCTYPE html >
<html lang="fr">

<body>
<table>

    <?php foreach ($recup as $value) { ?>
        <tr>
      <td>
          <?=$value['id']?>
      </td>
            <td>
                <?=$value['name']?>
            </td>
            <td>
                <?=$value['position']?>
            </td>
        </tr >
  <?php } ?>

</table>
</body>
</html>
