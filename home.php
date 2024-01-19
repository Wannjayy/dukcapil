<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dukcapil Online</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand me-auto" href="#">Dukcapil Online</a>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Dukcapil Online</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2 active" aria-current="page" href="#section">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="#layanan">Layanan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="#">Bantuan</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <img src="images/profile.png" class="user-pic" onclick="toggleMenu()">
                <div class="sub-menu-wrap" id="subMenu">
                    <div class="sub-menu">
                        <div class="user-info">
                            <img src="images/profile.png">
                            <?php
                            session_start();
                            if (isset($_SESSION['nama'])) {
                                $nama_pengguna = $_SESSION['nama'];
                                echo "<h3>$nama_pengguna</h3>";
                            } else {
                                header("Location: login.php");
                                exit();
                            }
                            ?>
                        </div>
                        <hr>
                        <a href="#" class="sub-menu-link">
                            <img src="images/edit.png">
                            <p>Edit Profile</p>
                            <span>></span>
                        </a>
                        <a href="#" class="sub-menu-link">
                            <img src="images/help.png">
                            <p>Bantuan</p>
                            <span>></span>
                        </a>
                        <a href="#" class="sub-menu-link">
                            <img src="images/logout.png">
                            <p>Keluar</p>
                            <span>></span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <section class="hero-section" id="section">
            <div class="container d-flex align-items-center justify-content-center fs-1 text-white flex-column">
                <h1>Selamat Datang di Dukcapil Online</h1>
                <p>ini adalah website layanan administrasi kependudukan dan pencatatan sipil online</p>
            </div>
        </section>
    </header>
    <?php include('card.php'); ?>
    <footer class="footer mt-2 pt-1 pb-1">
        <div class="container text-center">
            <p>&copy; 2024 Dukcapil Online. All rights reserved.</p>
        </div>
    </footer>
    <script>
        let subMenu = document.getElementById("subMenu");
    function toggleMenu(){
        subMenu.classList.toggle("open-menu");
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
