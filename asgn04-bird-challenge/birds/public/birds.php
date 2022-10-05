<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'Inventory'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <div id="page">
    <div class="intro">
      <h2>Small Sampling of WNC Birds</h2>
    </div>

    <table id="inventory">
      <tr>
        <th>Common Name</th>
        <th>Habitat</th>
        <th>Food</th>
        <th>Nest Placement</th>
        <th>Behavior</th>
        <th>Conservation Level</th>
        <th>Backyard Tips</th>
      </tr>

      <?php

      $parser = new ParseCSV(PRIVATE_PATH . '/wnc-birds.csv');
      $bird_array = $parser->parse();

      ?>

      <?php foreach ($bird_array as $args) { ?>
        <?php $bird = new Bird($args); ?>
        <tr>
          <td><?php echo h($bird->common_name); ?></td>
          <td><?php echo h($bird->habitat); ?></td>
          <td><?php echo h($bird->food); ?></td>
          <td><?php echo h($bird->nest_placement); ?></td>
          <td><?php echo h($bird->behavior); ?></td>
          <td><?php echo h($bird->conservation_id); ?></td>
          <td><?php echo h($bird->backyard_tips); ?></td>
        <tr>
        <?php } ?>
    </table>
  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>