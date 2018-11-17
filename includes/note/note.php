<?php
//petla w PHP tylko na potrzeby kodowania
// wywalić przed dalszym działaniem w tym pliku!!
$f = [
'col' => ['red', 'yellow', 'green', 'blue', 'cyan', 'magenta'],
'dateadd' => ['2018.08.11', '2018.08.10','2018.08.15','2018.08.01', '2018.08.21','2018.07.11'],
'dateup' => ['2018.09.11', '2018.08.12','2018.11.25','2018.12.11', '2019.01.24','2018.09.13']
];
$c=0;
for($i=0; $i<6; $i++) :
?>
<li class="note note_color-<?= $f['col'][$c]; ?>" data-archives="<?= $i%2===0?'true':'false'; ?>" data-reminders="<?= $i%3===0?'true':'false'; ?>" data-importants="<?= $i%4===0?'true':'false'; ?>" data-notetype="<?= $i%2===0?'note':'checklist'; ?>">
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
$c++;
endfor;
?>