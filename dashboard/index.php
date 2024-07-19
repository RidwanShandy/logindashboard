
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>

<body>
    <div class="container">
        <aside class="left-section">
            <div class="logo">
                <button class="menu-btn" id="menu-close">
                    <i class='bx bx-log-out-circle'></i>
                </button>
                <img src="../images/logo.png">
                <a href="index.php">Dashboard</a>
            </div>
            <div class="sidebar">
                <div class="item" id="active">
                    <i class='bx bx-home-alt-2'></i>
                    <a href="index.php">Home</a>
                </div>
                <div class="item">
                    <i class='bx bx-user-circle'></i>
                    <a href="profil.php">Profil</a>
                </div>
                <div class="item">
                    <i class='bx bx-world'></i>
                    <a href="sosmed.php">Social Media</a>
                </div>
                <div class="item">
                    <i class='bx bx-log-out'></i>
                    <a href="../logout.php">Logout</a><br>
                </div>
            </div>
        </aside>
        <main>
            <header>
                <button class="menu-btn" id="menu-open">
                    <i class='bx bx-menu'></i>
                </button>
                <h5><b>Home</b></h5>
            </header>
            <div class="profile-section">
                <div class="profile-card">
                    <h2>Halo, Ridwan.</h2>
                    <h4>Ini adalah tampilan Dashboard.</h4><br>
                    <div class="quick-links">
                        <h2>Isi Dashboard:</h2>
                        <ul>
                            <li><a href="profil.php"><i class='bx bx-user-circle'></i> Profile</a></li>
                            <li><a href="sosmed.php"><i class='bx bx-world'></i> Social Media</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
