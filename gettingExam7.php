<?php
$output = shell_exec('ls -la /var/www/html');
echo "<pre>$output</pre>";
?>
