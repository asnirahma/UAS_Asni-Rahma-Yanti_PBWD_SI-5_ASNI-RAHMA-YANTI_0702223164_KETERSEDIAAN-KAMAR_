<!DOCTYPE html>
<html>
<head>
    <title>Edit VCD</title>
</head>
<body>
    <h1>Edit VCD</h1>

    <?php
    // Koneksi ke database (ganti dengan informasi koneksi yang sesuai)
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "vcd";

    // Buat koneksi
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Ambil ID VCD dari parameter URL
    $id = $_GET['id'];

    // Query untuk mendapatkan data VCD berdasarkan ID
    $sql = "SELECT * FROM v_c_d_s WHERE id = $id";
    $result = $conn->query($sql);

    // Periksa apakah ada data yang ditemukan
    if ($result->num_rows > 0) {
        // Ambil data dari hasil query
        $row = $result->fetch_assoc();
        $judul = $row['judul'];
        // Ambil data dari input fields lainnya

        // Tampilkan form untuk edit
        ?>
        <form action="update.php?id=<?php echo $id; ?>" method="POST">
            <label>Judul:</label><br>
            <input type="text" name="judul" value="<?php echo $judul; ?>"><br><br>
            
            <!-- Tambahkan input fields lainnya yang ingin diubah -->

            <button type="submit">Simpan Perubahan</button>
        </form>
        <?php
    } else {
        echo "VCD tidak ditemukan";
    }

    // Tutup koneksi
    $conn->close();
    ?>
</body>
</html>

