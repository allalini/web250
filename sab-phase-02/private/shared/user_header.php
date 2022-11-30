<?php
  if(!isset($page_title)) { $page_title = 'Bird Area'; }
?>

<!doctype html>

<html lang="en">
  <head>
    <title>SA Birds - <?php echo h($page_title); ?></title>
    <meta charset="utf-8">
    <!-- <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/staff.css'); ?>" /> -->
  </head>

  <body>
    <header>
      <h1>SA Birds Admin Area</h1>
    </header>

    <nav>
      <ul>
      <?php if($session->is_logged_in())  { ?>
      <li>User: <?php echo $_SESSION['username']; ?></li>
      <li><a href="<?php echo url_for('../sab-phase-02/users/index.php'); ?>">Menu</a></li>
      <li><a href="<?php echo url_for('../sab-phase-02/logout.php');?>">Logout</li>
      <?php } ?>
      </ul>
    </nav>


    <?php echo display_session_message(); ?>
