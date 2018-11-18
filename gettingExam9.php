<?php
$file = file_get_contents('/var/www/documents/shared/.DS_Store', FILE_USE_INCLUDE_PATH);
echo $file;
?>
