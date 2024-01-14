<?php
// This file returns the latest stable version of KVIrc
// It is used by the Update Indicator applet

// Security check
unset($checkNetHack);
unset($_GET['checkNetHack']);
$checkNetHack=0;
require("conf/config.php");
echo $current;
?>
