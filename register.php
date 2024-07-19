<?php
session_start(); // Mulai session

// Cek apakah sudah ada session username
if (isset($_SESSION['username'])) {
    // Jika ada session username, arahkan ke dashboard
    header("Location: dashboard/index.php");
    exit();
}
?>

<div class="container">
<?php include('includes/header.php'); ?>
<?php include('includes/db.php'); ?>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "<div class='message'>Registrasi berhasil!</div>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>

    <h2>Registrasi</h2>
    <form method="post" action="register.php">
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Register</button>
    </form>
    <a href="login.php" class="">Sudah punya akun? Login</a>
    <a href="index.php" class="btn">Kembali ke Halaman Utama</a>
    <?php include('includes/footer.php'); ?>
</div>
