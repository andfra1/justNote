<?php
$selection = ['archive', 'delete', 'color', 'reminder', 'lock'];
?>
<div class="selection" id="jsSelection">
  <?php foreach($selection as $item) : ?>
  <button class="btn selection__item" id="js<?= ucfirst($item); ?>">
  <span class="icon-<?= $item?>"></span><?= ucfirst($item); ?>
  </button>
<?php endforeach; ?>
</div>