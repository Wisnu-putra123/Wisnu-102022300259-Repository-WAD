<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['password'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash password untuk keamanan
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Konfigurasi koneksi database sesuai user pass dan port anda
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "pendaftaran";
    $port = "3308";

    // Membuat koneksi ke database
    $conn = new mysqli($host, $user, $pass, $db,$port);

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Prepared statement untuk keamanan
    $stmt = $conn->prepare("INSERT INTO mahasiswa (nama, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nama, $email, $hashed_password);

    if ($stmt->execute()) {
        echo "<script>
                alert('Mahasiswa sudah berhasil registrasi (POST)');
                window.location.href='register_post.php';
              </script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: register_post.php");
    exit();
}
?>
