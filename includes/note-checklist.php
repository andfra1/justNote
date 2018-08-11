<?php
include ('note-header.php');
$list = ['Some list item', 'Another item', 'Xadfsd'];
?>
  <div class="note__content">
    <ul class="note__content__list">
      <?php foreach($list as $key => $item) : ?>
      <li>
        <input type="checkbox" name="" id="item-0<?= $key; ?>">
        <label for="item-0<?= $key; ?>">
          <?= $item; ?>
        </label>
        <button class="btn btn--square note__content__options"></button>
      </li>
      <?php endforeach; 
      ?>
    </ul>
  </div>