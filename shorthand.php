<?php

$total = 120000;
$diskon = ($total > 100000) ? 10000 : 0;
$bayar = $total - $diskon;
echo "total naspad yang anda bayar $total - diskon yang anda dapatkan $diskon = jumlah yang anda bayar $bayar";

?>
