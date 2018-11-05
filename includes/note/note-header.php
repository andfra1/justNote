<div class="note_header nh">
  <input type="checkbox" id="<?= $f['col'][$c] ?>" class="nh_checkbox">
  <div class="nh_drag icon-menu2">
  </div>
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
  <div class="nh_menu icon-more_horiz">
  </div>
</div>