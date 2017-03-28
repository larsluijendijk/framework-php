<div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="#">About</a></li>
            <li role="presentation"><a href="#">Contact</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Dieren Lijst</h3>
      </div>

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