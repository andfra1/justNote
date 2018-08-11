        <script src="<?= HTTP ?>prod/js/main<?= $dev?'':$prod; ?>.js"></script>

        <script type="text/template" id="tpl-note">
<li class="notes__item notes__item--{color} note" data-notePriority="{priority}">
    <div class="note__banner">
      <div class="note__banner__field">
        <input type="text" class="note__banner__fieldInput" value="{title}" maxlength="35" />
      </div>
      <div class="note__banner__date" data-noteDate="{date}"></div>
      <div class="note__banner__arrow icon-caret-down"></div>
      <input type="checkbox" name="{id}" id="{id}" />
      <label for="{id}" class="note__banner__check"></label>
    </div>
    <div class="note__content">
      <div class="note__content__text">
        <textarea name="" id="" cols="30" rows="10">{content}</textarea>
      </div>
      <div class="note__content__options options">
        <div class="options__priority">
          <label for="selecPriority" class="options__priority__label">
            Priority:
          </label>
          <select name="selecPriority" id="selecPriority" class="options__priority__select">
            <option value="">very high</option>
            <option value="">high</option>
            <option value="">normal</option>
            <option value="">low</option>
            <option value="">maybe next life...</option>
          </select>
        </div>
        <div class="options__color">
          <p>Color:</p>
          <div class="options__color__pick">1</div>
          <div class="options__color__pick">2</div>
          <div class="options__color__pick">3</div>
        </div>
      </div>
    </div>
  </li>
</script>
    </body>

</html>