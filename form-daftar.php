<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Siswa Baru</title>
</head>
<body>
    <header>
    <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>
    <form action="proses-pendaftaran.php" method="POST">
        <fieldset>
            <p>
                <label for="nama">Nama: </label>
                <input type="text"name="nama" placeholder="nama lengkap" />
            </p>
            <p>
                <label for="alamat">Alamat:</label>
                <textarea nama="alamat"></textarea>
            </p>
            <p>
                <label for="jenis kelamin">Jenis Kelamin:</label>
                <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-Laki</label>
                <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama: </label>
                <select name="agama">
                <option>islam</option>
                <option>kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
                </select>
            </p>
            <p>
                <label for="sekolah_asal">Sekolah Asal: </label>
                <input type="text" name="sekolah_asal" placeholder="nama_sekolah"/>
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar">
            </p>
        </fieldset>
    </form>
</body>
</html>