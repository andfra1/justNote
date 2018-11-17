<?php
$menu = ['notes' => [
          'icon' => 'icon-pencil',
          'data' => 'notes'
        ],
        'archives' => [
          'icon' => 'icon-books',
          'data' => 'archives'
        ],
        'importants' => [
          'icon' => 'icon-star-full',
          'data' => 'importants'
        ],
        // 'categories' => [
        //   'icon' => 'icon-hashtag',
        //   'data' => '#'
        // ],
        'reminders' => [
          'icon' => 'icon-alarm',
          'data' => 'reminders'
        ],
        'settings' => [
          'icon' => 'icon-cog',
          'data' => ''
        ],
        'synchro' => [
          'icon' => 'icon-loop2',
          'data' => ''
        ],
        'logout' => [
          'icon' => 'icon-exit',
          'link' => './inc/logout.php'
        ]
        ]
?>

<ul class="header_menu header_menu-hidden hm" id="js-header_menu">
          <?php
            foreach($menu as $key => $val) : 
            if ($key !== 'logout') :
          ?>
          <li <?php if($val['data'] !== ''):?>data-itemname="<?= $val['data']; ?>"<?php endif;?> class="hm_item">
          <!-- <a href=<?//=$val['link']; ?>> -->
              <span class="<?= $val['icon']; ?>"></span>
              <?= $key; ?>
            <!-- </a> -->
            </li>
            <?php else : ?>
            <li data-itemname="<?= $key; ?>" class="hm_item">
              <a href=<?= $val['link']; ?>>
                <span class="<?= $val['icon']; ?>"></span>
              <?= $key; ?>
            </a>
            </li>
          <?php 
        endif;
        endforeach; ?>
        </ul>