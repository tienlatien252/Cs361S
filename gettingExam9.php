<?php
$file = file_get_contents('/var/www/dev/.htconfig', FILE_USE_INCLUDE_PATH);
echo $file;
?>
