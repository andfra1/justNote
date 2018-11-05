<?php
//petla w PHP tylko na potrzeby kodowania
// wywalić przed dalszym działaniem w tym pliku!!
$f = [
'col' => ['red', 'yellow', 'green', 'blue', 'cyan', 'magenta'],
'dateadd' => ['2018.08.11', '2018.08.10','2018.08.15','2018.08.01', '2018.08.21','2018.07.11'],
'dateup' => ['2018.09.11', '2018.08.12','2018.11.25','2018.12.11', '2019.01.24','2018.09.13']
];
$c=0;
foreach ($f as $key => $val) :
?>
<li class="note note_color-<?= $f['col'][$c]; ?>">
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
endforeach;
?>