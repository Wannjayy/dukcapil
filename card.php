<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="swiper-bundle.min.css">
    <style>
        .slide-container {
            max-width: 1263px;
            width: 100%;
            padding: 40px 0;
        }

        .slide-container h1 {
            text-align: center;
            color: #4070F4;
        }

        .slide-content {
            margin: 0 40px;
            overflow: hidden;
            border-radius: 25px;
        }
        .card {
            border-radius: 25px;
            background-color: #FFF;
        }

        .image-content,
        .card-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 10px 14px;
        }

        .image-content {
            position: relative;
            row-gap: 5px;
            padding: 25px 0;
        }

        .overlay {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            background-color: #4070F4;
            border-radius: 25px 25px 0 25px;
        }

        .overlay::before,
        .overlay::after {
            content: '';
            position: absolute;
            right: 0;
            bottom: -40px;
            height: 40px;
            width: 40px;
            background-color: #4070F4;
        }

        .overlay::after {
            border-radius: 0 25px 0 0;
            background-color: #FFF;
        }

        .card-image {
            position: relative;
            height: 150px;
            width: 150px;
            border-radius: 50%;
            background: #FFF;
            padding: 3px;
        }

        .card-image .card-img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #4070F4;
        }

        .name {
            font-size: 18px;
            font-weight: 500;
            color: #333;
        }

        .description {
            font-size: 14px;
            color: #707070;
            text-align: center;
        }

        .button {
            border: none;
            font-size: 16px;
            color: #FFF;
            padding: 8px 16px;
            background-color: #4070F4;
            border-radius: 6px;
            margin: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .button:hover{
            background: #265DF2;
        }

        .swiper-navBtn {
            color: #6E93f7;
            transition: color 0.3s ease;
        }

        .swiper-navBtn:hover {
            color: #4070F4;
        }

        .swiper-navBtn::before,
        .swiper-navBtn::after {
            font-size: 40px;
        }

        .swiper-button-next {
            right: 0;
        }

        .swiper-button-prev {
            left: 0;
        }

        .swiper-pagination-bullet {
            background-color: #6E93f7;
            opacity: 1;
        }

        .swiper-pagination-bullet-active {
            background-color: #6E93f7;
        }
    </style>
</head>
<body>
        <div class="slide-container swiper" id="layanan">
            <h1>Informasi Pelayanan</h1>
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="images/akta-lahir.png" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Akta Kelahiran</h2>
                            <p class="description">Layanan penerbitan dokumen Akta Kelahiran, dokumen resmi yang mendaftarkan informasi tentang kelahiran seseorang.</p>
                            <button class="button">Detail</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="images/akta-kematian.png" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Akta Kematian</h2>
                            <p class="description">Layanan penerbitan dokumen Akta Kematian, dokumen resmi yang mencatat fakta-fakta terkait dengan kematian seseorang.</p>
                            <button class="button">Detail</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="images/akta-kawin.png" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Akta Perkawinan</h2>
                            <p class="description">Layanan penerbitan dokumen Akta Perkawinan, dokumen resmi yang mendaftarkan pernikahan antara dua individu.</p>
                            <button class="button">Detail</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="images/akta-cerai.png" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Akta Perceraian</h2>
                            <p class="description">Layanan penerbitan dokumen Akta Perceraian, dokumen resmi yang mencatat pembubaran pernikahan antara dua pihak.</p>
                            <button class="button">Detail</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="images/ktp.png" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Kartu Tanda Penduduk (KTP)</h2>
                            <p class="description">Layanan penerbitan Kartu Tanda Penduduk, kartu identitas resmi yang diterbitkan oleh pemerintah Indonesia kepada warga negara Indonesia.</p>
                            <button class="button">Detail</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="images/kk.png" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Kartu Keluarga</h2>
                            <p class="description">Layanan penerbitan dokumen Kartu Keluarga, dokumen resmi yang mencatat data anggota keluarga dalam satu rumah tangga.</p>
                            <button class="button">Detail</button>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
</body>
<script src="swiper-bundle.min.js"></script>
<script src="card.js"></script>
</html>