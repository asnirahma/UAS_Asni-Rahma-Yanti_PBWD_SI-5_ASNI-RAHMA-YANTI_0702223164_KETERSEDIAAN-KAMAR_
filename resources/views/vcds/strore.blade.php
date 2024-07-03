<?php
// Koneksi ke database (ganti dengan informasi koneksi yang sesuai)
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "vcd";

// Ambil data dari form
$judul = $_POST['judul'];
// Tambahkan input fields lainnya sesuai dengan kebutuhan

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk menyimpan data ke database
$sql = "INSERT INTO v_c_d_s (judul) VALUES ('$judul')";
// Tambahkan query untuk input fields lainnya

if ($conn->query($sql) === TRUE) {
    echo "Data VCD baru berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
