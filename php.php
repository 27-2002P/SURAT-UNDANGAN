<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $kehadiran = $_POST['kehadiran'];

    // Simpan ke file teks (atau bisa ke database)
    $file = fopen("daftar_kehadiran.txt", "a");
    fwrite($file, "$nama, $email, $kehadiran\n");
    fclose($file);

    echo "Terima kasih, $nama! Kehadiran Anda telah dikonfirmasi.";
}
?>
