<!DOCTYPE html>
<html>
<head>
    <title>Daftar VCD</title>
</head>
<body>
    <h1>Daftar VCD</h1>

    <a href="create.php">Tambahkan VCD Baru</a>

    <ul>
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

        // Query untuk mendapatkan data VCD
        $sql = "SELECT * FROM v_c_d_s";
        $result = $conn->query($sql);

        // Periksa apakah ada data yang ditemukan
        if ($result->num_rows > 0) {
            // Output data dari setiap baris
            while($row = $result->fetch_assoc()) {
                echo "<li>" . $row["judul"] . " - ";
                echo "<a href='edit.php?id=" . $row["id"] . "'>Edit</a> - ";
                echo "<a href='show.php?id=" . $row["id"] . "'>Lihat</a></li>";
            }
        } else {
            echo "Tidak ada VCD yang ditemukan";
        }

        // Tutup koneksi
        $conn->close();
        ?>
    </ul>
</body>
</html>
