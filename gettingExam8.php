<?php
$output = shell_exec('ls -la /var/www/documents/shared');
echo "<pre>$output</pre>";
?>
