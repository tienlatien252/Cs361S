<?php
$output = shell_exec('ls -la /var/www/documents');
echo "<pre>$output</pre>";
?>
