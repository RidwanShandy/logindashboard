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

    <h2>Dashboard</h2>
    <p>Silakan login atau daftar untuk mengakses dashboard Anda.</p>
    <a href="login.php" class="btn">Login</a>
    <a href="register.php" class="btn">Register</a>

    <?php include('includes/footer.php'); ?>

<footer>
        <p>Dibuat oleh M. Ridwan Alsafir G (202222031)</p>
    </footer>
</div>