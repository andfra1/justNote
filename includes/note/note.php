<?php
//petla w PHP tylko na potrzeby kodowania
// wywalić przed dalszym działaniem w tym pliku!!
$col = ['red', 'yellow', 'green', 'blue', 'cyan', 'magenta'];
$date = ['2018.08.11', '2018.08.10','2018.08.15','2018.08.01', '2018.08.21','2018.07.11'];
foreach ($col as $key) :
?>
<li class="note note_color-<?= $key; ?>">
<?php
$text = true;

include 'note-header.php';

  if ($text) {
    include 'note-text.php';
  }
  else {
    include 'note-checklist.php';
}
?>
</li>
<?php
endforeach;
?>