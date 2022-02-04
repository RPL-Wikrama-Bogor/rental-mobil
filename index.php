<?php
    include ("db.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Fast Car | Website</title>
    </head>
    <body>

        <!--========== header ==========-->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="#" class="nav__logo">Fast Car</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active-link">Utama</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">Tentang</a></li>
                        <li class="nav__item"><a href="#services" class="nav__link">Layanan</a></li>
                        <li class="nav__item"><a href="#menu" class="nav__link">Mobil</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Kontak</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--========== utama ==========-->
            <section class="home" id="home">
                <div class="home__container bd-container bd-grid">
                    <div class="home__data">
                        <h1 class="home__title">Rental Mobil</h1>
                        <h2 class="home__subtitle">Temukan Mobil<br> Impian.</h2>
                    </div>
    
                    <img src="assets/icon/headerlogo.png" alt="" class="home__img">
                </div>
            </section>
            
            <!--========== tentang ==========-->
            <section class="about section bd-container" id="about">
                <div class="about__container  bd-grid">
                    <div class="about__data">
                        <span class="section-subtitle about__initial">Tentang Kami</span>
                        <h2 class="section-title about__initial">Easy, time saving.</h2>
                        <p class="about__description">Rental Mobil jadi lebih mudah dan hemat waktu secara online. Tersedia sewa mobil lepas kunci saja. Bandingkan pilihan terbaik dari berbagai partner sewa mobil terpercaya. Partner rental mobil kami menyediakan pelayanan berkualitas demi kenyamanan aktifitas Anda dan keluarga.</p>
                    </div>

                    <img src="assets/icon/tentang.jpg" alt="" class="about__img">
                </div>
            </section>

            <!--========== layanan ==========-->
            <section class="services section bd-container" id="services">
                <span class="section-subtitle">Menawarkan</span>
                <h2 class="section-title">Layanan Kami</h2>

                <div class="services__container  bd-grid">
                    <div class="services__content">
                        <h3 class="services__title">Hemat Waktu</h3>
                        <p class="services__description">Sewa mobil cukup di genggaman Anda, kapan saja dan di mana saja.</p>
                    </div>

                    <div class="services__content">
                        
                            <clipPath id="clip0">
                            <rect width="64" height="64" fill="white"/>
                            </clipPath>
                    
                        </svg>
                        <h3 class="services__title">Servis</h3>
                        <p class="services__description">Partner rental mobil kami menyediakan servis berkualitas demi kenyamanan bepergian Anda.</p>
                    </div>

                    <div class="services__content">
                        
                                <clipPath id="clip0">
                                <rect width="64" height="64" fill="white"/>
                                </clipPath>
                                
                        </svg>
                        <h3 class="services__title">Rating </h3>
                        <p class="services__description">Rating dari user lain akan membantu Anda untuk menemukan pilihan rental mobil yang paling tepat.</p>
                    </div>
                </div>
            </section>

            <!--========== mobil ==========-->
            <section class="menu section bd-container" id="menu">
                <span class="section-subtitle">List</span>
                <h2 class="section-title">Mobil Yang Tersedia</h2>

            <!--========== kontak ==========-->
            <section class="contact section bd-container" id="contact">
                <div class="contact__container bd-grid">
                    <div class="contact__data">
                        <span class="section-subtitle contact__initial">Segera Boking</span>
                        <h2 class="section-title contact__initial">Hubungi Kami</h2>
                        <p class="contact__description">Jika anda ingin memesan mobil di rental kami dan memiliki banyak pertanyaan, hubungi kami dan kami akan segera melayani Anda dengan layanan WhatsApp.</p>
                    </div>

                    <div class="contact__button">
                        <a href="https://api.WhatsApp.com" class="button">Hubungi Sekarang</a>
                    </div>
                </div>
            </section>
        </main>

        <!--========== footer ==========-->
        <footer class="footer section bd-container">
            <div class="footer__container bd-grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">Fast Car</a>
                    <span class="footer__description">Rental Mobil</span>
                    <div>
                        <a href="#" class="footer__social"><i class='bx bxl-facebook'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-instagram'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                    </div>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Layanan</h3>
                    <ul>
                        <li><a href="#" class="footer__link">Hemat Waktu</a></li>
                        <li><a href="#" class="footer__link">Servis</a></li>
                        <li><a href="#" class="footer__link">Rating</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Informasi</h3>
                    <ul>
                        <li><a href="#" class="footer__link">Hubungi Kami</a></li>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Alamat</h3>
                    <ul>
                        <li>Kota Bogor</li>
                        <li>Jl. Siliwangi</li>
                        <li>fastcar@gmail.com</li>
                    </ul>
                </div>
            </div>

            <p class="footer__copy">&#169; 2021 FastCar.</p>
        </footer>

        <!--========== scroll  ==========-->
        <script src="https://unpkg.com/scrollreveal"></script>
    </body>
</html>