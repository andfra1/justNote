<?php
include_once ('head.php');

if(!isset($_SESSION['signinname'])) {
  header("Location: ./../index.php");
  exit();
}
?>

<header class="header">
  <div class="container">
    <div class="wrapper">
      <div class="header_top">
        <button class="burger" id="js-burger" value="off">
          <span class="burger_stripe"></span>
        </button>
        <div>
          Logged as
          <?= $_SESSION['signinname'];?>
        </div>
        <?php include_once './includes/main-menu.php'; ?>
        <div class="header_options ho">
          <div class="ho_sort js-ho_sort icon-sort-alpha-asc">
              <?php include_once './includes/header-options-sort.php'; ?>
          </div>
          <div class="ho_view js-ho_view icon-view_module"></div>
        </div>
      </div>
      <div class="header_bottom header_bottom-hide">
        <?php include_once './includes/notes-menu.php'; ?>
      </div>
    </div>
  </div>
</header>