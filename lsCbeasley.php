<?php
echo "<pre>'ls -la /home/cbeasley/AgvEFaPr4dVV'</pre>";
$output = shell_exec('ls -la /home/cbeasley/AgvEFaPr4dVV');
echo "<pre>$output</pre>";
?>
