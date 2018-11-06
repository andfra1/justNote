<?php
$menuNote = [
  'edit' => [
    'icon' => 'icon-pencil',
    'options' => []
  ], 
  'move to archives' => [
    'icon' => 'icon-books',
    'options' => ['icon-check1', 'icon-close']
  ], 
  'change color' => [
    'icon' => 'icon-droplet',
    'options' => ['red', 'green', 'blue', 'yellow', 'cyan', 'magenta']
  ], 
  'reminder' => [
    'icon' => 'icon-alarm',
    'options' => ['morre stuff here']
  ],
  'important' => [
    'icon' => 'icon-star-full',
    'options' => ['icon-check1', 'icon-close']
  ],
  'categories' => [
    'icon' => 'icon-hashtag',
    'options' => []
  ],
  'delete' => [
    'icon' => 'icon-bin',
    'options' => ['icon-check1', 'icon-close']
  ]
  ]
?>
<ul class="notes_menu_options nmo js-nmo">
  <?php foreach($menuNote as $key => $val) : ?>
  <li class="nmo_item">
    <span class="<?= $val['icon']?>"></span>
    <?//= $key; ?>
    <ul>
    <?php foreach($val['options'] as $k => $v) : 
      if (($v) !== '') :?>
      <li>
        <span class="<?= $v?>"></span>
      </li>
    <?php 
  endif;
  endforeach; ?>
    </ul>
  </li>
  <?php endforeach; ?>
</ul>