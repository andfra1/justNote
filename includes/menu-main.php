<?php
$avatar = './img/avatar.jpg';
$name = 'David Haselhoff';
$menuMain = ['notes','calendar','archive','trash','search','theme','settings']
?>

<button class="btn burger" id="jsBurger" value="off"></button>
<nav class="menu menu-main">
      <div class="menu-main__profile">
        <div class="menu-main__profile__avatar">
          <img src="<?= $avatar; ?>" alt="avatar">
        </div>
        <div class="menu-main__profile__name">
        <?= $name; ?>
        </div>
        <button class="menu-main__profile__sync btn btn--square" id="jsSync">
          <span class="icon-sync"></span>
        </button>
      </div>
      <ul>
        <?php foreach($menuMain as $key) : ?>
        <li>
          <a href="#">
            <span class="icon-<?= $key; ?> icon--space-right"></span>
            <?= $key; ?>
          </a>
        </li>
        <?php endforeach; ?>
      </ul>
    </nav>