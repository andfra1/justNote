<?php
$list = ['Some list item', 'Another item', 'Xadfsd'];
?>
<div class="note_content nc">
  <div class="nc_box">
    <ul class="nc_box_list">
      <?php foreach($list as $key => $item) : ?>
      <li class="nc_box_list_item">
        <div class="nc_box_list_item_content">
          <?= $item; ?>
        </div>
        <button class="btn"></button>
      </li>
      <?php endforeach; 
      ?>
    </ul>
  </div>
  <div class="nc_date">
    <div class="nc_date_added">
      Added: <span>2018.10.11</span>
    </div>
    <div class="nc_date_updated">
      Updated: <span>2018.10.22</span>
    </div>
  </div>
</div>