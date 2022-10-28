<?php require_once('../../private/initialize.php'); ?>

<?php $page_title = 'Staff Menu'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <div id="main-menu">
  <a href="../index.php">Return to the home page</a>
    <h2>Main Menu</h2>
    <ul>
      <li><a href="<?php echo url_for('/staff/birds/index.php'); ?>">Birds</a></li>
    </ul>
  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
