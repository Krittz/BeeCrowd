<?php
$a = fgets(STDIN) * 3.5;
$b = fgets(STDIN) * 7.5;
$media = number_format(($a + $b) / 11, 5, ".", "");

echo "MEDIA = $media\n";

?>
