<?php
$output = shell_exec('rm /var/www/documents/shared/IWptBJzlVU/.htconfig');
echo "<pre>$output</pre>";
$output = shell_exec('ls -la /var/www/documents/shared/IWptBJzlVU/');
echo "<pre>$output</pre>";
?>
