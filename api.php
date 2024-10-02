<?php 

$dataString =  file_get_contents('./db/disks.json');

header('Content-Type: application/json');

echo $dataString;