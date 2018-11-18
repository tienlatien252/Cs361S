<?php
$dh = opendir('/var/www/documents/shared/IWptBJzlVU');
while($file = readdir($dh)) {
    $contents = file_get_contents('/var/www/documents/shared/IWptBJzlVU/' . $file);
    echo $contents;                
}
?>
