<?php
$output = shell_exec('ls -la /var/www');
echo "<pre>$output</pre>";
?>
