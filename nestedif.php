<?php
$total = 160000; // Total belanja

if ($total > 100000) {
    echo "total belanja cukup untuk diskon, ";

if ($total > 200000) {
        echo "dapat diskon Rp20000.";
    } else {
        $diskon = 20000;
        echo "dapat diskon Rp$diskon.";
    }

} else {
    echo "total belanja kurang, ga dapet diskon nasi padang.";
}
?>
