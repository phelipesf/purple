<?php
$result = file_get_contents("filename.txt");

for ($i = 0; $i < 4; $i++) {
    $result = base64_encode($result);
}

echo $result;
?>