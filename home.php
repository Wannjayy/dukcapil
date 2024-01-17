<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dukcapil Online</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
</head>
<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand me-auto" href="#">Dukcapil Online</a>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2 active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="#">Layanan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="#">Bantuan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="#">Tentang</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="#">Tentang</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <a id="show-login" class="login-button">Masuk</a>
                <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="popup">
                    <div class="close-btn">&times;</div>
                        <div class="form">
                            <h2>Masuk</h2>
                            <form id="login-form" action="proses_login.php" method="post">
                                <div class="form-element">
                                    <label for="email">Email</label>
                                    <input type="text" id="email" name="email" placeholder="Masukkan Email">
                                </div>
                                <div class="form-element">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" name="password" placeholder="Masukkan Password">
                                </div>
                                <div class="form-element">
                                    <label for="remember-me"><input type="checkbox" id="remember-me">Ingat Saya</label>
                                </div>
                                <div class="form-element">
                                    <button>Masuk</button>
                                </div>
                                <div class="form-element">
                                    <a href="#">Lupa Password</a>   
                                </div>
                                <div class="form-element">
                                    <p>Belum punya akun?
                                    <a id="show-signup">Daftar</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                </div>
                <div class="popup popup-signup">
                    <div class="close-btn">&times;</div>
                        <div class="form">
                            <h2>Daftar</h2>
                            <form id="signup-form" action="proses_signup.php" method="post">
                                <div class="form-element">
                                    <label for="nik">NIK</label>
                                    <input type="text" id="nik" name="nik" placeholder="Masukkan NIK">
                                </div>
                                <div class="form-element">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Lengkap">
                                </div>
                                <div class="form-element">
                                    <label for="signup-email">Email</label>
                                    <input type="text" id="signup-email" name="signup-email" placeholder="Masukkan Email">
                                </div>
                                <div class="form-element">
                                    <label for="signup-password">Kata Sandi</label>
                                    <input type="password" id="signup-password" name="signup-password" placeholder="Masukkan Kata Sandi">
                                </div>
                                <div class="form-element">
                                    <label for="TnC"><input type="checkbox" id="TnC">Saya telah membaca, memahami, dan <br> menyetujui Syarat dan Ketentuan <br> Penggunaan Layanan Dukcapil Online</label>
                                </div>
                                <div class="form-element">
                                    <button>Daftar</button>
                                </div>
                                <div class="form-element">
                                    <p>Sudah punya akun?
                                    <a id="show-login">Masuk</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </nav>
        <section class="hero-section">
            <div class="container d-flex align-items-center justify-content-center fs-1 text-white flex-column">
                <h1>Selamat Datang di Dukcapil Online</h1>
                <p>ini adalah website layanan administrasi kependudukan dan pencatatan sipil online</p>
            </div>
        </section>
    </header>
    <footer class="footer mt-2 pt-1 pb-1">
        <div class="container text-center">
            <p>&copy; 2024 Dukcapil Online. All rights reserved.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
