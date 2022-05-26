<!DOCTYPE html>
<html lang="en">

<head>
    <title>Situs Personal</title>
</head>

<body>
    <header>
        <h3>Situs Personal</h3>
    </header>

    <form action="simpan_kontak.php" method="POST">
        <fieldset>
            <p>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" placeholder="Masukkan Nama">
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin : </label>
                <input type="text" name="jenis_kelamin" placeholder="Laki-laki atau Perempuan">
            </p>
            <p>
                <label for="email">Email : </label>
                <input type="text" name="email" placeholder="Email">
            </p>
            <p>
                <label for="alamat">Alamat : </label>
                <input name="alamat" placeholder="Alamat lengkap"></input>
            </p>
            <p>
                <label for="kota">Kota : </label>
                <input name="kota" placeholder="Masukkan Kotamu"></input>
            </p>
            <p>
                <label for="pesan">Pesan : </label>
                <textarea type="text" name="pesan" placeholder="Pesan"></textarea>
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan">
            </p>
        </fieldset>
    </form>
</body>

</html>