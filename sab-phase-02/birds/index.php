<?php require_once('../private/initialize.php'); ?>
<?php 
// require_login();
?>
<?php include(SHARED_PATH . '/user_header.php'); ?>

<div id="main">

  <ul id="menu">
    <li><a href="<?php echo url_for('/birds.php'); ?>">View Birds</a></li>
    <li><a href="<?php echo url_for('/about.php'); ?>">About Us</a></li>
    <li><a href="<?php echo url_for('/users/index.php'); ?>">Users Portal</a></li>

  </ul>
    
</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
