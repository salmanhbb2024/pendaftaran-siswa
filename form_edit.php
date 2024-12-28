<?php
include("database/config.php");

//kalau tidak ada id di query string
if (!isset($_GET['id'])) {
    
    echo"<script>alert('Data tidak ditemukan');window.location.href='list-siswa.php'</script>";
}

//ambil id dari query string
$id = $_GET['id'];

//buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);   
$siswa = mysqli_fetch_assoc($query);

//jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
die("data tidak ditemukan...");
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Formulir Edit Siswa SMK Coding</title>
    </head>
    <body>
        <header>
            <h3>Formulir Edit Siswa</h3>
        </header>

        <form action="proses-edit.php" method="POST"></form>
            <fieldset>
                <input type="hidden" name="id" value="<?=$siswa['id'];?>">
                <p>
                    <label for="nama">Nama: </label>
                    <input type="text" name="nama" placeholder="nama lengkap" value="<?=$siswa['nama'];?>" />
                </p>
                <p>
                    <label for="alamat">Alamat:</label>
                    <textarea name="alamat"><?=$siswa['alamat'];?></textarea>
                </p>
                <p>
                    <label for="jenis kelamin">Jenis Kelamin:</label>
                    <?php $jk = $siswa['jenis_kelamin']; ?>
                    <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? 'checked' : ''; ?>> Laki-Laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? 'checked' : ''; ?>> Perempuan</label>
                 </p>
                <p>
                    <label for="agama">Agama: </label>
                    <?php $agama = $siswa['agama']; ?>
                    <select name="agama">
                    <option value="islam" <?php echo ($siswa['agama'] == 'islam') ? 'selected' : ''; ?>>Islam</option>
                    <option value="kristen" <?php echo ($siswa['agama'] == 'kristen') ? 'selected' : ''; ?>>Kristen</option>
                    <option value="hindu" <?php echo ($siswa['agama'] == 'hindu') ? 'selected' : ''; ?>>Hindu</option>
                    <option value="budha" <?php echo ($siswa['agama'] == 'budha') ? 'selected' : ''; ?>>Budha</option>
                    <option value="atheis" <?php echo ($siswa['agama'] == 'atheis') ? 'selected' : ''; ?>>Atheis</option>
                    </select>
                </p>
                <p>
                    <label for="sekolah_asal">Sekolah Asal: </label>
                    <input type="text" name="sekolah_asal" placeholder="sekolah asal" value="<?php echo $siswa=$siswa['sekolah_asal'];?>" />
                </p>
                <p>
                    <button type="submit" name="edit">Simpan Perubahan</button>
                </p>
                  </fieldset>
            </form>
    </body>
</html> 