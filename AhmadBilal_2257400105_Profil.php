<h2>Profil</h2>
    <form method="post" action="">
        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim" required><br><br>
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>
        <label for="kelas">Kelas:</label><br>
        <input type="text" id="kelas" name="kelas" required><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <label for="no_hp">Nomor HP:</label><br>
        <input type="text" id="no_hp" name="no_hp" required><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $email = $_POST['email'];
        $no_hp = $_POST['no_hp'];

        echo "<h3>Informasi Profil:</h3>";
        echo "<p>NIM: $nim</p>";
        echo "<p>Nama: $nama</p>";
        echo "<p>Kelas: $kelas</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Nomor HP: $no_hp</p>";
    }
    ?>