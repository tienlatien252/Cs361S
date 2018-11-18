<?php
$output = shell_exec('ls -la /var/www/dev');
echo "<pre>$output</pre>";
?>
