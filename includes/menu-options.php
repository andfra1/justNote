<?php
$menuOptions = [
'color',
'sort',
'view',
'search',
'sync',
'settings'
]
?>

<button class="btn burger-options" id="jsBurgerOptions"value="off"></button>
  <nav class="menu menu-options">
    <ul>
      <?php foreach($menuOptions as $key) : ?>
      <li>
        <a href="#">
          <span class="icon-<?= $key; ?> icon--space-right"></span><?= $key; ?>
        </a>
      </li>
      <?php endforeach; ?>
    </ul>
  </nav>