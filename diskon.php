<?php
$total_belanja=25000;
$pelanggan="Tidak";
$diskon=0;

if ($pelanggan=="iya") {
     $diskon=10;
} else {
     if($total_belanja >= 200000) {
          $diskon=5;
     } elseif ($total_belanja >= 100000) {
          $diskon=3;
     } else {
          $diskon=0;
     }
}

$potongan = $total_belanja * ($diskon/100);
$harga_bayar = $total_belanja - $potongan;

echo"Total Belanja: <b>Rp$total_belanja</b>";
echo"<br>";
echo"Kamu Pelanggan: $pelanggan";
echo"<br>";
echo"Dapat diskon sebesar: <b>$diskon%</b>";
echo"<br>";
echo"Dapat potongan sebesar: <b>Rp$potongan</b>";
echo"<br>";
echo"Harga Akhir: <b>Rp$harga_bayar</b>";
?>
