<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Saya</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        /* Reset default styling */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body */
body {
    font-family: 'Arial', sans-serif;
    background-color: #111;
    color: #fff;
    line-height: 1.6;
}

/* Header */
header {
    background-color: #1a1a1a;
    padding: 20px 0;
    color: #fff;
}

header .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
}

header h1 {
    font-size: 2rem;
}

header nav ul {
    list-style-type: none;
    display: flex;
}

header nav ul li {
    margin-left: 20px;
}

header nav ul li a {
    text-decoration: none;
    color: #a5c8ff;
    font-size: 1.1rem;
}

header nav ul li a:hover {
    color: #fff;
}

/* Section */
.section {
    padding: 60px 20px;
    text-align: center;
}

.section h2 {
    font-size: 2.5rem;
    margin-bottom: 20px;
    color: #56CCF2;
}

.section p {
    font-size: 1.1rem;
    color: #ccc;
}

.proyek-item {
    background-color: #222;
    padding: 20px;
    margin: 20px 0;
    border-radius: 8px;
}

.proyek-item h3 {
    font-size: 1.8rem;
    color: #56CCF2;
}

/* Footer */
footer {
    background-color: #1a1a1a;
    padding: 20px 0;
    text-align: center;
}

footer p {
    font-size: 1rem;
    color: #ccc;
}

/* Responsive */
@media (max-width: 768px) {
    header .container {
        flex-direction: column;
        align-items: flex-start;
    }

    header nav ul {
        margin-top: 10px;
    }

    .section {
        padding: 40px 20px;
    }
}

    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Portofolio Saya</h1>
            <nav>
                <ul>
                    <li><a href="#tentang">Tentang Saya</a></li>
                    <li><a href="#proyek">Proyek</a></li>
                    <li><a href="#kontak">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="tentang" class="section">
        <div class="container">
            <h2>Tentang Saya</h2>
            <p>Halo, saya [Nama Anda], seorang developer yang berfokus pada pengembangan web dan aplikasi. Saya senang belajar hal-hal baru dan menciptakan solusi kreatif untuk masalah teknologi.</p>
        </div>
    </section>

    <section id="proyek" class="section">
        <div class="container">
            <h2>Proyek</h2>
            <div class="proyek-item">
                <h3>Proyek 1</h3>
                <p>Deskripsi proyek 1. Menggunakan teknologi seperti PHP, MySQL, dan JavaScript.</p>
            </div>
            <div class="proyek-item">
                <h3>Proyek 2</h3>
                <p>Deskripsi proyek 2. Fokus pada pengembangan front-end dengan HTML, CSS, dan JavaScript.</p>
            </div>
        </div>
    </section>

    <section id="kontak" class="section">
        <div class="container">
            <h2>Kontak</h2>
            <p>Anda bisa menghubungi saya melalui email: <a href="mailto:email@domain.com">email@domain.com</a></p>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2025 [Nama Anda]. Semua hak dilindungi.</p>
        </div>
    </footer>
</body>
</html>
