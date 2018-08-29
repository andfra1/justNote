<?php
$menuNote = ['Archive', 'Send', 'Reminder', 'Delete']
?>

  <nav class="menu menu-note">
    <ul>
      <?php foreach($menuNote as $key) : ?>
      <li>
        <a href="#">
          <?= $key; ?>
        </a>
      </li>
      <?php endforeach; ?>
    </ul>
  </nav>