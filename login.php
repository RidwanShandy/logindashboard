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
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                $_SESSION['username'] = $username;
                header("Location: dashboard/index.php");
                exit();
            } else {
                echo "<div class='message'>Password salah!</div>";
            }
        } else {
            echo "<div class='message'>User tidak ditemukan!</div>";
        }
    }
    ?>

    <h2>Login</h2>
    <form method="post" action="login.php">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
    <a href="register.php" class="">Belum punya akun? Daftar disini</a>
    <a href="index.php" class="btn">Kembali ke Dashboard</a>
    <?php include('includes/footer.php'); ?>
</div>
