<?php
include_once ('head.php');

if(!isset($_SESSION['signinname'])) {
  header("Location: ./../index.php");
  exit();
}

$menu = ['notes' => [
          'icon' => 'icon-notes',
          'link' => './index.php?login=ok'
        ],
        'archive' => [
          'icon' => 'icon-archive',
          'link' => '#'
        ],
        'important' => [
          'icon' => 'icon-archive',
          'link' => '#'
        ],
        'categories' => [
          'icon' => 'icon-archive',
          'link' => '#'
        ],
        'settings' => [
          'icon' => 'icon-settings',
          'link' => '#'
        ],
        'synchro' => [
          'icon' => 'icon-sync',
          'link' => '#'
        ],
        'logout' => [
          'icon' => 'icon-back',
          'link' => './inc/logout.php'
        ]
        ]
?>

<header class="header">
  <div class="container">
    <div class="wrapper">
      <button class="burger" id="js-burger" value="off">
        <span class="burger_stripe"></span>
      </button>
      <div>
        Logged as
        <?= $_SESSION['signinname'];?>
      </div>
      <ul class="header_menu header_menu-hidden" id="js-header_menu">
        <?php foreach($menu as $key => $val) : ?>
        <li><a href=<?= $val['link']; ?>>
            <span class="<?= $val['icon']; ?>"></span>
            <?= $key; ?>
          </a></li>
        <?php endforeach; ?>
      </ul>

    </div>
  </div>
</header>