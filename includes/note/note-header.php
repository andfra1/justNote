<div class="note_header nh">
  <input type="checkbox" id="<?= $f['col'][$c] ?>" class="nh_checkbox">
  <!-- <div class="nh_drag icon-menu2">
  </div> -->
  <div class="nh_title js-nh_title">
    <!-- <input type="text" placeholder="some title" class="nh_title-input"> -->
    <div class="nh_title_text">
      Nagłówek <?= $f['col'][$c]; ?>
    </div>
  </div>
  <div class="nh_date">
    <div class="nh_date_added">
    <?= $f['dateadd'][$c]; ?>
    </div>
  </div>
  <label class="nh_label icon-check_box_outline_blank" for="<?= $f['col'][$c]; ?>"></label>
  <!-- <div class="nh_menu icon-more_horiz">
  <ul class="nh_menu_options nh_mo nh_mo-hide js-nh_mo">
    <li class="nh_mo_item">edit</li>
    <li class="nh_mo_item">move to archives</li>
    <li class="nh_mo_item">change color</li>
    <li class="nh_mo_item">reminder</li>
    <li class="nh_mo_item">priority</li>
    <li class="nh_mo_item">delete</li>
  </ul>
  </div> -->
</div>