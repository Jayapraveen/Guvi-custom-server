<?php
require("global/vars.php");
$myfile = fopen($course_fetch, "r") or die("Unable to open file!");
echo fread($myfile,filesize($course_fetch));
fclose($myfile);
?>