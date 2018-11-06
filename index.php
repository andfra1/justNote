<?php  
	if(isset($_SESSION['online']) && $_SESSION['online'] == true){
		header('Location: ./index.php');
		exit();
  }
  
  $default = "admin";
?>

<?php
  include_once ('./inc/head.php');
?>
<?php 
      if($_SERVER['QUERY_STRING'] == '') :
    ?>
      <?php
        include_once ('./inc/form.php');
      ?>
    <?php
      endif;
    ?>
  <div class="wrap">
    <?php 
      if($_SERVER['QUERY_STRING'] == 'login=ok') :
    ?>
     <?php
      include_once('./inc/header_html.php');
      include_once('./includes/notes.php');
      include_once('./includes/notes-menu.php');
      ?>
    <?php
      endif;
    ?>
  </div>
  <?php
    include_once ('./inc/footer.php');
  ?>