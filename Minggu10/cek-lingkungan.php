<?php
header("Content-Type: text/plain; charset=UTF-8");
echo "Versi PHP: ";
echo PHP_VERSION;
echo "\nmbstring: ";
if (function_exists("mb_strlen")) {
 echo "tersedia";
} else {
 echo "belum tersedia";
}
?>
