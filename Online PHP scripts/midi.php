<?php
if(isset($_GET['fn']))
{
    require('./mc.php');
    $midi = new Midi();
    $midi->importMid($_GET['fn']);
    echo ($midi->getBpm()+$midi->getTimebase());
    echo "!";
    echo $midi->getTxt();
}
?>