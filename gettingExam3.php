<?php

$dh = opendir('/var/www/documents/shared/IWptBJzlVU');

while($file = readdir($dh)) {

    $contents = file_get_contents('/path/you/want/to/read/' . $file);

    echo $contents;                

}

?>
