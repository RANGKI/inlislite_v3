<?php
/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = 'Portal Aplikasi Inlis Lite';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->title ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= Url::to('@web/css/site.css') ?>">
</head>
<body>
    <header class="header">
        <div class="container header-content">
            <?= yii\helpers\Html::img(Url::base().'/'.Url::to('uploaded_files/aplikasi/inlislite.png'), [
                'alt' => 'Portal Aplikasi Inlis Lite', 
                'class' => 'logo'
            ]) ?>
            <h1>Portal Aplikasi Inlis Lite</h1>
            <p>Selamat datang di portal layanan perpustakaan digital terpadu. Akses berbagai layanan dengan mudah dan cepat.</p>
        </div>
    </header>

    <main class="main-content">
        <div class="container">
            <section class="welcome-section">
                <h2>Layanan Perpustakaan Digital Terpadu</h2>
                <p>Inlis Lite menyediakan berbagai layanan perpustakaan digital yang dapat diakses kapan saja dan di mana saja. Pilih layanan yang Anda butuhkan di bawah ini.</p>
            </section>

            <div class="stats-section">
                <div class="stat-item">
                    <span class="stat-number">15K+</span>
                    <span class="stat-label">Koleksi Buku</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">8K+</span>
                    <span class="stat-label">Anggota Aktif</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">24/7</span>
                    <span class="stat-label">Layanan Digital</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">99%</span>
                    <span class="stat-label">Kepuasan Pengguna</span>
                </div>
            </div>

            <div class="portal-grid">
                <div class="portal-card">
                    <div class="card-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <div class="card-content">
                        <h3>Back Office</h3>
                        <p>Akses sistem administrasi dan manajemen perpustakaan untuk pengelola.</p>
                        <a href="<?= Url::to('backend') ?>" target="_blank" class="btn">Masuk</a>
                    </div>
                </div>

                <div class="portal-card">
                    <div class="card-icon">
                        <i class="fas fa-book-reader"></i>
                    </div>
                    <div class="card-content">
                        <h3>Baca di Tempat</h3>
                        <p>Layanan membaca koleksi perpustakaan secara langsung di lokasi.</p>
                        <a href="<?= Url::to('bacaditempat') ?>" target="_blank" class="btn btn-secondary">Akses</a>
                    </div>
                </div>

                <div class="portal-card">
                    <div class="card-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <div class="card-content">
                        <h3>OPAC</h3>
                        <p>Online Public Access Catalog untuk pencarian katalog koleksi perpustakaan.</p>
                        <a href="<?= Url::to('opac') ?>" target="_blank" class="btn btn-accent">Jelajahi</a>
                    </div>
                </div>

                <div class="portal-card">
                    <div class="card-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="card-content">
                        <h3>Keanggotaan Online</h3>
                        <p>Kelola keanggotaan perpustakaan secara online dengan mudah.</p>
                        <a href="<?= Url::to('keanggotaan') ?>" target="_blank" class="btn btn-info">Kelola</a>
                    </div>
                </div>

                <div class="portal-card">
                    <div class="card-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="card-content">
                        <h3>Koleksi Digital</h3>
                        <p>Akses berbagai koleksi digital seperti e-book, jurnal, dan publikasi elektronik.</p>
                        <a href="<?= Url::to('digitalcollection') ?>" target="_blank" class="btn btn-accent">Jelajahi</a>
                    </div>
                </div>

                <div class="portal-card">
                    <div class="card-icon">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <div class="card-content">
                        <h3>Buku Tamu</h3>
                        <p>Isi buku tamu untuk kunjungan Anda ke perpustakaan.</p>
                        <a href="<?= Url::to('guestbook') ?>" target="_blank" class="btn">Isi Buku Tamu</a>
                    </div>
                </div>

                <div class="portal-card">
                    <div class="card-icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <div class="card-content">
                        <h3>Pendaftaran Anggota</h3>
                        <p>Daftar menjadi anggota perpustakaan untuk menikmati semua layanan.</p>
                        <a href="<?= Url::to('pendaftaran') ?>" target="_blank" class="btn btn-secondary">Daftar Sekarang</a>
                    </div>
                </div>

                <div class="portal-card">
                    <div class="card-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <div class="card-content">
                        <h3>Statistik</h3>
                        <p>Lihat statistik perkembangan dan aktivitas perpustakaan.</p>
                        <a href="<?= Url::to('statistik-perkembangan-perpustakaan') ?>" target="_blank" class="btn btn-info">Lihat Statistik</a>
                    </div>
                </div>

                <div class="portal-card">
                    <div class="card-icon">
                        <i class="fas fa-poll"></i>
                    </div>
                    <div class="card-content">
                        <h3>Survey</h3>
                        <p>Ikuti survey untuk membantu pengembangan layanan perpustakaan.</p>
                        <a href="<?= Url::to('survey') ?>" target="_blank" class="btn">Ikuti Survey</a>
                    </div>
                </div>

                <div class="portal-card">
                    <div class="card-icon">
                        <i class="fas fa-exchange-alt"></i>
                    </div>
                    <div class="card-content">
                        <h3>Peminjaman Mandiri</h3>
                        <p>Layanan peminjaman buku secara mandiri tanpa bantuan petugas.</p>
                        <a href="<?= Url::to('peminjamanmandiri') ?>" target="_blank" class="btn btn-warning">Pinjam Buku</a>
                    </div>
                </div>

                <div class="portal-card">
                    <div class="card-icon">
                        <i class="fas fa-undo-alt"></i>
                    </div>
                    <div class="card-content">
                        <h3>Pengembalian Mandiri</h3>
                        <p>Layanan pengembalian buku secara mandiri tanpa bantuan petugas.</p>
                        <a href="<?= Url::to('pengembalianmandiri') ?>" target="_blank" class="btn btn-warning">Kembalikan Buku</a>
                    </div>
                </div>

                <div class="portal-card">
                    <div class="card-icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <div class="card-content">
                        <h3>Artikel</h3>
                        <p>Baca artikel dan publikasi terbaru dari perpustakaan.</p>
                        <a href="<?= Url::to('article') ?>" target="_blank" class="btn">Baca Artikel</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2023 Portal Aplikasi Inlis Lite. Semua hak cipta dilindungi.</p>
            <p>Layanan Perpustakaan Digital Terpadu</p>
            <div class="footer-links">
                <a href="#">Kebijakan Privasi</a>
                <a href="#">Syarat & Ketentuan</a>
                <a href="#">Bantuan</a>
                <a href="#">Kontak</a>
            </div>
        </div>
    </footer>

    <script src="<?= Url::to('@web/js/app.js') ?>"></script>
</body>
</html>