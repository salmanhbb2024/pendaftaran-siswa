<?php
include("database/config.php");

// Cek apakah tombol daftar sudah diklik atau belum
if (isset($_POST['daftar'])) {
    // Ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['Jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    // Buat query
    $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUES ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);

    // Apakah query simpan berhasil?
    if ($query) {
        // Jika berhasil, alihkan ke halaman index.php dengan status=sukses
        echo "<script>alert('Data berhasil disimpan');window.location.href='index.php'</script>";
    } else {
        // Jika gagal, alihkan ke halaman index.php dengan status=gagal
        echo "<script>alert('Data gagal disimpan');window.location.href='index.php'</script>";
    }
} else {
    die("Akses dilarang");
}
?>