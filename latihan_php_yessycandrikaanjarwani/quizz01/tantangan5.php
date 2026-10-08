<?php
// Deklarasi Variabel Data Siswa
$nama = "Budi Santoso";
$kelas = "XI RPL 1";
$jurusan = "Rekayasa Perangkat Lunak";
$umur = 17;
$nilai = 82.5;

// Logika Kondisional Status Kelulusan (Bonus)
if ($nilai >= 75) {
    $status = "LULUS";
} else {
    $status = "TIDAK LULUS";
}

// Menampilkan Output dengan Memenuhi Semua Ketentuan
echo "====================================<br>"; // Echo ke-1
echo "        KARTU PROFIL SISWA          <br>"; // Echo ke-2
echo "====================================<br>";

// Penggunaan printf() dengan placeholder %s, %d, dan %.1f
printf("Nama    : %s<br>", $nama);               // printf ke-1
printf("Kelas   : %s<br>", $kelas);              // printf ke-2
echo "Jurusan : " . $jurusan . "<br>";            // Penggunaan operator . (titik)
printf("Umur    : %d tahun<br>", $umur);
printf("Nilai   : %.1f<br>", $nilai);
echo "Status  : " . $status . "<br>";
echo "====================================<br>";
?>