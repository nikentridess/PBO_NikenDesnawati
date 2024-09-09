<?php

$kartuMember = true;
$totalBelanjaan = 200000;
$diskon = 0;

switch ($kartuMember) {
    case ($kartuMember = true && $totalBelanjaan > 100000):
        $diskon = 15000;
        break;
    case ($kartuMember = true && $totalBelanjaan > 500000):
        $diskon = 50000;
        break;
    case ($kartuMember = false && $totalBelanjaan > 100000):
        $diskon = 5000;
    default:
        $diskon = 0;
        break;
}

$TotalBayar = $totalBelanjaan - $diskon;

echo "Apakah ada kartu member : " . ($kartuMember ? "Ya" : "Tidak");
echo "<br/>";
echo "Total belanjaan: $totalBelanjaan";
echo "<br/>";
echo "Diskon: $diskon";
echo "<br/>";
echo "Total Bayar: Rp$TotalBayar";
?>