<?php
include_once ('head.php');

if(!isset($_SESSION['signinname'])) {
  header("Location: ./../index.php");
  exit();
}

$menu = ['notes' => [
          'icon' => 'icon-pencil',
          'link' => './index.php?login=ok'
        ],
        'archive' => [
          'icon' => 'icon-books',
          'link' => '#'
        ],
        'important' => [
          'icon' => 'icon-star-full',
          'link' => '#'
        ],
        'categories' => [
          'icon' => 'icon-hashtag',
          'link' => '#'
        ],
        'settings' => [
          'icon' => 'icon-cog',
          'link' => '#'
        ],
        'synchro' => [
          'icon' => 'icon-loop2',
          'link' => '#'
        ],
        'logout' => [
          'icon' => 'icon-exit',
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
      <div class="header_options ho">
        <div class="ho_sort js-ho_sort icon-sort-alpha-asc">
        <ul class="ho_sort_options ho_sort_options-hide">
          <li class="ho_sort_options_item js-ho_sort_options_item" data-note-sort="alph-asc">A - Z</li>
          <li class="ho_sort_options_item js-ho_sort_options_item" data-note-sort="aplh-desc">Z - A</li>
          <li class="ho_sort_options_item js-ho_sort_options_item" data-note-sort="date-added-desc">Data dodania: najnowsza</li>
          <li class="ho_sort_options_item js-ho_sort_options_item" data-note-sort="date-added-desc">Data dodania: najstarsza</li>
          <li class="ho_sort_options_item js-ho_sort_options_item" data-note-sort="date-mod-desc">Data modyfikacji: najnowsza</li>
          <li class="ho_sort_options_item js-ho_sort_options_item" data-note-sort="date-mod-desc">Data modyfikacji: najstarsza</li>
        </ul>
        </div>
        <div class="ho_view js-ho_view icon-view_module"></div>
      </div>
    </div>
  </div>
</header>