<?php
foreach (scandir(".") as $file) {
    if ($file !== "." && $file !== "..") {
        echo $file . "\n";
    }
}
?>
