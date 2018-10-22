        <script src="<?= HTTP ?>prod/js/main<?= $dev?'':$prod; ?>.js"></script>

        <script type="text/template" id="tpl-note">
<li class="notes_item notes_item-{color} note" data-notePriority="{priority}">
    <div class="note_banner">
      <input type="checkbox" name="{id}" id="{id}" />
      <div class="note_banner_field">
        <input type="text" class="note_banner_fieldInput" value="{title}" maxlength="35" />
      </div>
      <div class="note_banner_date" data-noteDate="{date}">{date}</div>
      <div class="note_banner_arrow icon-caret-down"></div>
      <label for="{id}" class="note_banner_check"></label>
    </div>
    <div class="note_content">
      <div class="note_content_text">
        <textarea name="" id="" cols="30" rows="10">{content}</textarea>
      </div>
      <div class="note_content_options options">
        <div class="options_priority">
          <label for="selecPriority" class="options_priority_label">
            Priority:
          </label>
          <select name="selecPriority" id="selecPriority" class="options_priority_select">
            <option value="">very high</option>
            <option value="">high</option>
            <option value="">normal</option>
            <option value="">low</option>
            <option value="">maybe next life...</option>
          </select>
        </div>
        <div class="options_color">
          <p>Color:</p>
          <div class="options_color_pick options_color_pick-red" data-noteColor='red'></div>
          <div class="options_color_pick options_color_pick-green" data-noteColor='green'></div>
          <div class="options_color_pick options_color_pick-blue" data-noteColor='blue'></div>
          <div class="options_color_pick options_color_pick-cyan" data-noteColor='cyan'></div>
          <div class="options_color_pick options_color_pick-magenta" data-noteColor='magenta'></div>
          <div class="options_color_pick options_color_pick-yellow" data-noteColor='yellow'></div>
        </div>
        <div class="options_reminder">
          <p>Reminder</p>
          <div class="options_reminderFields">
            <input type="number" max="23" min="0" name="" class="reminderHour" id="reminderHour-{id}" value="12">
            <input type="number" max="59" min="0" name="" class="reminderMin" id="reminderMin-{id}" value="12">
          </div>
          <button>OK</button>
        </div>
      </div>
    </div>
  </li>
</script>
    </body>

</html>