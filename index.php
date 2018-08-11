<?php
if(isset($_GET['view'])) {
  include_once ('inc/header.php');
}
else {
  include_once ('inc/header-html.php');
}
?>

  <section>
    <div class="wrapper" id="main-window">
      <?php
      include_once('includes/notes.php');
      ?>
    </div>
  </section>

  <?php
  if(isset($_GET['view'])) {
    include_once ('inc/footer-html.php');
  }
  else {
    include_once ('inc/footer.php');
  }
  ?>