<?php
include_once ("file:///C:/wamp/www/frameworkhospital/view/templates/header.php");
?>
<div class="row marketing">
<div class="container">
  <table border="1">
    <tr>
      <th>Naam</th>
      <th>Dier</th>
      <th>Geboren</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
    
    <?php foreach ($dieren as $dier) { ?>
    <tr>
      <input type="hidden" value="<?= $dier['id']; ?>">
      <td><?= $dier['naam']; ?></td>
      <td><?= $dier['ras']; ?></td>
      <td><?= $dier['geboren']; ?></td>
      <td><a href="<?= URL ?>dier/edit/<?= $dier['id'] ?>">Edit</a></td>
      <td><a href="<?= URL ?>dier/delete/<?= $dier['id'] ?>" onclick="return confirm('Are you sure you want to delete this item?');"">Delete</a></td>
    </tr>
    <?php } ?>
</div>
  </table>
  <a href="<?= URL ?>dier/create">Toevoegen</a>
</div>