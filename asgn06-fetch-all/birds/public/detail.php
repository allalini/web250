<?php require_once('../private/initialize.php'); ?>

<?php

// Get requested ID
$id = $_GET['id'] ?? false;

if (!$id) {
  redirect_to('birds.php');
}
// Find bicycle using ID
$bird = Bird::find_by_id($id);
?>

<?php $page_title = 'Detail ' . $bird->name(); ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <a href="birds.php">Back to Birds</a>

  <div id="page">

    <div class="detail">
      <dl>
        <dt>Brand</dt>
        <dd><?php echo h($bird->common_name); ?></dd>
      </dl>
      <dl>
        <dt>Model</dt>
        <dd><?php echo h($bird->habitat); ?></dd>
      </dl>
      <dl>
        <dt>Year</dt>
        <dd><?php echo h($bird->food); ?></dd>
      </dl>
      <dl>
        <dt>Category</dt>
        <dd><?php echo h($bird->nest_placement); ?></dd>
      </dl>
      <dl>
        <dt>Gender</dt>
        <dd><?php echo h($bird->behavior); ?></dd>
      </dl>
      <dl>
        <dt>Color</dt>
        <dd><?php echo h($bird->backyard_tips); ?></dd>
      </dl>
      <dl>
        <dt>Description</dt>
        <dd><?php echo h($bird->conservation_id); ?></dd>
      </dl>
    </div>

  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>