<?php
$menuNote = ['Check', 'Send', 'Lock', 'Reminder', 'Archive', 'Delete']
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