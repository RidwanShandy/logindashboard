
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Profil</title>
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
                <div class="item" id="active">
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
                <h5><b>Profil</b></h5>
            </header>
            <div class="profile-section">
                <div class="profile-card">
                    <img src="../images/me.png" alt="Profile Picture">
                    <h3>M. Ridwan Alsafir Gusnendar</h3>
                    <h4>Hello, I am Ridwan. I am a software developer with a passion for learning and teaching. I enjoy working on web development and AI projects.</h4>
                </div>
                <div class="details-section">
                    <h2>Data Diri</h2><br>
                    <ul>
                        <li><strong>Nama Lengkap:</strong> M. Ridwan Alsafir Gusnendar</li>
                        <li><strong>NIM:</strong> 202222031</li>
                        <li><strong>Kelas:</strong> Teknik Informatika (Sore)</li><br>
                        <li><strong>Email:</strong><a href="mailto:ridwanshandy1@gmail.com"> ridwanshandy1@gmail.com </a></li>
                        <li><strong>Alamat:</strong> Tasikmadu, Karanganyar</li>
                    </ul><br><br>
                    <h2>Skills</h2><br>
                    <ul>
                        <li>Web Development</li>
                        <li>Graphic Design</li>
                        <li>Video Editing</li>
                        <li>Animation</li>
                    </ul>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
