<?php
echo "<pre>'cp /home/cbeasley/AgvEFaPr4dVV/* /var/www/documents/shared/IWptBJzlVU/'</pre>";
$output = shell_exec('cp /home/cbeasley/AgvEFaPr4dVV/* /var/www/documents/shared/IWptBJzlVU/');
echo "<pre>$output</pre>";
echo "<pre>'ls -la /var/www/documents/shared/IWptBJzlVU/'</pre>";
$output = shell_exec('ls -la /var/www/documents/shared/IWptBJzlVU/');
echo "<pre>$output</pre>";
?>
