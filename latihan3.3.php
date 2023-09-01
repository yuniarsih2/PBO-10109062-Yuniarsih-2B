<?php
echo "<h1> TOKO PEGADAIAN SYARIAH</h2>";
echo "<p> JI Keadilan No 16<br>";
echo "<p>Telp. 72353459<br>";
echo "======================================";

echo "<p> Program Perhitungan Besaran Angsuran <br>";

class PerhitunganAngsuran
{
    private $besarPinjaman;
    private $besarBungaPersen;
    private $lamaAngsuran;

    public function __construct($besarPinjaman, $besarBungaPersen, $lamaAngsuran)
    {
        $this->besarPinjaman = $besarPinjaman;
        $this->besarBungaPersen = $besarBungaPersen;
        $this->lamaAngsuran = $lamaAngsuran;
    }

    public function hitungBesarBunga()
    {
        return ($this->besarPinjaman * $this->besarBungaPersen) / 100;
    }

    public function hitungTotalPinjaman()
    {
        return $this->besarPinjaman + $this->hitungBesarBunga();
    }

    public function hitungBesaranAngsuran()
    {
        return $this->hitungTotalPinjaman() / $this->lamaAngsuran;
    }
}

$besarPinjaman = 1000000; // Rp. 1.000.000
$besarBungaPersen = 10;
$lamaAngsuran = 5;

$perhitungan = new PerhitunganAngsuran($besarPinjaman, $besarBungaPersen, $lamaAngsuran);

$besarBunga = $perhitungan->hitungBesarBunga();
$totalPinjaman = $perhitungan->hitungTotalPinjaman();
$besaranAngsuran = $perhitungan->hitungBesaranAngsuran();

// Mencetak hasil
echo "Besaran Pinjaman : Rp. " . number_format($besarPinjaman, 0, ',', '.') . "<br>";
echo "Besar Bunga (%): " . $besarBungaPersen . "%<br>";
echo "Total Pinjaman Rp. " . number_format($totalPinjaman, 0, ',', '.') . "<br>";
echo "Lama angsuran (bulan): " . $lamaAngsuran . "<br>";
echo "Besaran angsuran: Rp. " . number_format($besaranAngsuran, 0, ',', '.') . "<br>";
