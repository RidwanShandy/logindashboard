
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Social Media</title>
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
                <div class="item">
                    <i class='bx bx-home-alt-2'></i>
                    <a href="index.php">Home</a>
                </div>
                <div class="item">
                    <i class='bx bx-user-circle'></i>
                    <a href="profil.php">Profil</a>
                </div>
                <div class="item" id="active">
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
                <h5><b>Social Media</b></h5>
            </header>
            <div class="profile-section">
                <div class="profile-card">
                    <h2>Social Media</h2>
                    <h4>Ikuti akun sosial media saya.</h4><br>
                    <div class="social-media-links">
                        <a href="https://twitter.com/ridwan_shandy/" target="_blank"><i class='bx bxl-twitter'></i> Twitter</a>
                        <a href="https://instagram.com/ridwan.shandy/" target="_blank"><i class='bx bxl-instagram'></i> Instagram</a>
                        <a href="https://wa.me/081215153423" target="_blank"><i class='bx bxl-whatsapp'></i> WhatsApp</a>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
