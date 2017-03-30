<?php
include_once ("file:///C:/wamp/www/frameworkhospital/view/templates/header.php");
?>
        <h3 class="text-muted">Update <?= $dier['naam']; ?></h3>

<div class="row marketing">
<div class="container">
  <form action="<?= URL ?>dier/createUpdate" method="POST">
  <table border="1">
      <input type="hidden" name="id" value="<?=$dier['id']?>">
      <input type="text" value="<?= $dier['naam']; ?>" id="naam" name="naam">
      <input type="text" value="<?= $dier['ras']; ?>" id="ras" name="ras">
      <input type="date" value="<?= $dier['geboren']; ?>" id="geboren" name="geboren">
      <input type="submit" name="submit" value="Update">
      </form>
</div>
</table>
  <a href="<?= URL ?>dier/index">List</a>
</div>