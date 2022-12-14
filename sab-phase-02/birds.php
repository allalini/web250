<?php require_once('private/initialize.php'); ?>

<?php $page_title = 'Inventory'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <div id="page">
    <div class="intro">
      <h2>Our Inventory of Birds</h2>
      <p>Choose the bird you love.</p>
      <p>We will deliver it to your door and let you try it before you buy it.</p>
    </div>

    <table id="inventory" border="1px solid #000">
      <tr>
        <th>Common Name</th>
        <th>Habitat</th>
        <th>Food</th>
        <th>Conservation Level</th>
        <th>Backyard Tips</th>
        <th>&nbsp;</th>
      </tr>

      <?php

      $birds = Bird::find_all();

      ?>
      <?php foreach ($birds as $bird) { ?>
        <tr>
          <td><?php echo h($bird->common_name); ?></td>
          <td><?php echo h($bird->habitat); ?></td>
          <td><?php echo h($bird->food); ?></td>
          <td><?php echo h($bird->conservation_id); ?></td>
          <td><?php echo h($bird->backyard_tips); ?></td>
          <td><a href="birds/detail.php?id=<?php echo $bird->id; ?>">View</a></td>
          <td><a href="birds/edit.php?id=<?php echo $bird->id; ?>">Edit</a></td>
          <td><a href="birds/delete.php?id=<?php echo $bird->id; ?>">Delete</a></td>
        </tr>
      <?php } ?>

    </table>

  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>