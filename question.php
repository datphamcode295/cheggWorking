<?php

$find= $_POST['find'];
$replace= $_POST['replace'];
$text= $_POST['maintext'];
$submitbutton= $_POST['submitbutton'];

if (isset($find) && isset($replace))
{
$newtext= str_replace($find, $replace, $text);
}

?>