
<?php
$output = shell_exec('cp /home/cbeasley/AgvEFaPr4dVV/* /var/www/dev');
echo "<pre>$output</pre>";
$output = shell_exec('ls -la /var/www/dev');
echo "<pre>$output</pre>";
?>
