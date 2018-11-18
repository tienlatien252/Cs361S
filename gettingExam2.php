<?php
$file = file_get_contents('/etc/passwd', FILE_USE_INCLUDE_PATH);
echo $file;
?>
