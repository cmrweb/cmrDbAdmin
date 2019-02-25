<?php
$dir    = '../';
$files = scandir($dir);
?>
<!--<h2><i id="fileshow" class="fas fa-file"></i>
    <i id="fileclose" class="fas fa-window-close"></i></h2>-->
<ul>
<?php foreach ($files as $key => $file) :?>
    <li><a href="../<?=$file?>" title="<?=$file?>" target="_blank"><?=$file?></a></li>
<?php endforeach;?>
</ul>