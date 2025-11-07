<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Nana</title>
    <style>
        /* Reset beberapa gaya default */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4; /* Latar belakang abu-abu terang */
            color: #333; /* Warna teks default lebih gelap untuk kontras */
        }

        /* Animasi Fade In */
        .fade-in {
            opacity: 0;
            animation: fadeIn 1.5s ease-out forwards;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        /* Header */
        header {
            background: linear-gradient(135deg, #00796b, #004d40); /* Gradasi biru kehijauan */
            color: white; /* Warna putih untuk teks di header */
            padding: 20px 0;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header h1 {
            font-size: 2rem;
            font-weight: bold;
        }

        header nav ul {
            list-style: none;
            display: flex;
        }

        header nav ul li {
            margin-left: 30px;
        }

        header nav ul li a {
            color: white; /* Teks putih di menu */
            text-decoration: none;
            font-size: 1rem;
            font-weight: 500;
            transition: all 0.3s;
        }

        header nav ul li a:hover {
            color: #ffcc80; /* Warna kuning cerah untuk hover */
        }

        /* Home Section */
        #home {
            background: url('assets/beach.jpg') no-repeat center center/cover;
            height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
        }

        #home h2 {
            font-size: 3.5rem;
            font-weight: bold;
            margin-bottom: 20px;
            animation: fadeIn 1.5s ease-out forwards;
        }

        #home p {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto;
            animation: fadeIn 1.5s ease-out forwards;
        }

        /* About Me Section */
        #about {
            background-color: #ffffff;
            padding: 80px 20px;
            text-align: center;
        }

        #about h2 {
            font-size: 2.5rem;
            margin-bottom: 30px;
            color: #00796b; /* Sesuai dengan tema laut, biru tua untuk kontras */
        }

        .profile {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 30px;
            max-width: 900px;
            margin: 0 auto;
            flex-wrap: wrap;
        }

        .profile img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            animation: fadeIn 2s ease-out forwards;
        }

        .profile p {
            font-size: 1.2rem;
            line-height: 1.7;
            color: #555; /* Warna teks gelap untuk meningkatkan kontras */
            max-width: 600px;
            margin: 0 auto;
            animation: fadeIn 2s ease-out forwards;
        }

        /* Portfolio Section */
        #portfolio {
            padding: 80px 20px;
            background-color: #e0f7fa; /* Warna biru laut muda */
            text-align: center;
        }

        #portfolio h2 {
            font-size: 2.5rem;
            margin-bottom: 40px;
            color: #00796b; /* Sesuai dengan tema laut, biru tua untuk kontras */
        }

        .gallery {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .portfolio-item {
            width: 30%;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
            background-color: white;
        }

        .portfolio-item:hover {
            transform: scale(1.05);
        }

        .portfolio-item img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .portfolio-item p {
            padding: 15px;
            background-color: #ffffff;
            font-size: 1rem;
            font-weight: 500;
            color: #00796b; /* Sesuai dengan tema laut */
            margin-top: 10px;
        }

        /* Contact Section */
        #contact {
            padding: 80px 20px;
            background-color: #ffffff;
            text-align: center;
        }

        #contact h2 {
            font-size: 2.5rem;
            margin-bottom: 30px;
            color: #00796b;
        }

        #contact form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #f9f9f9;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        #contact input,
        #contact textarea {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #00796b; /* Warna border hijau laut */
            border-radius: 5px;
            font-size: 1rem;
            box-sizing: border-box;
        }

        #contact button {
            padding: 15px 30px;
            background-color: #00796b; /* Sesuai dengan tema laut */
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #contact button:hover {
            background-color: #004d40; /* Biru laut gelap */
        }

        /* Footer */
        footer {
            background-color: #004d40;
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 1rem;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <div class="container">
            <h1 class="logo fade-in">Nana</h1>
            <nav>
                <ul>
                    <li><a href="#home" class="fade-in">Home</a></li>
                    <li><a href="#about" class="fade-in">Tentang Saya</a></li>
                    <li><a href="#portfolio" class="fade-in">Portofolio</a></li>
                    <li><a href="#contact" class="fade-in">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Home Section -->
    <section id="home">
        <h2 class="fade-in">Selamat datang di Portofolio Nana</h2>
        <p class="fade-in">Saya seorang desainer web dengan passion untuk menciptakan desain yang indah dan fungsional.</p>
    </section>

    <!-- About Me Section -->
    <section id="about">
        <h2 class="fade-in">Tentang Saya</h2>
        <div class="profile">
            <img src="assets/foto-nana.jpg" alt="Foto Nana" class="fade-in">
            <p class="fade-in">Halo, saya Nana! Saya adalah seorang desainer web yang berdedikasi untuk menciptakan pengalaman pengguna yang luar biasa. Saya memiliki pengalaman dalam desain responsif dan pengembangan web, serta selalu bersemangat untuk membuat proyek yang inovatif.</p>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio">
        <h2 class="fade-in">Portofolio</h2>
        <div class="gallery">
            <div class="portfolio-item fade-in">
                <img src="assets/project1.jpg" alt="Project 1">
                <p>Proyek Desain Web 1</p>
            </div>
            <div class="portfolio-item fade-in">
                <img src="assets/project2.jpg" alt="Project 2">
                <p>Proyek Desain Web 2</p>
            </div>
            <div class="portfolio-item fade-in">
                <img src="assets/project3.jpg" alt="Project 3">
                <p>Proyek Desain Web 3</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <h2 class="fade-in">Kontak Saya</h2>
        <form action="index.php#contact" method="POST" class="fade-in">
            <input type="text" id="name" name="name" placeholder="Nama Anda" required>
            <input type="email" id="email" name="email" placeholder="Email Anda" required>
            <textarea id="message" name="message" placeholder="Pesan Anda" rows="5" required></textarea>
            <button type="submit">Kirim Pesan</button>
        </form>
    </section>

    <!-- Footer -->
    <footer class="fade-in">
        <p>&copy; 2025 Nana. Semua hak cipta dilindungi.</p>
    </footer>

    <script>
        // Menambahkan efek fade-in saat halaman di-scroll
        const fadeInElements = document.querySelectorAll('.fade-in');

        window.addEventListener('scroll', function() {
            fadeInElements.forEach(function(element) {
                const rect = element.getBoundingClientRect();
                if (rect.top < window.innerHeight) {
                    element.style.opacity = 1;
                }
            });
        });
    </script>
</body>
</html>
