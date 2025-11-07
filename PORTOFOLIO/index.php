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
            background-color: #f0f7ff; /* Latar belakang biru muda */
            color: #333;
        }

        /* Header */
        header {
            background: linear-gradient(135deg, #0288d1, #01579b); /* Gradasi biru gelap dan biru terang */
            color: white;
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
            color: white;
            text-decoration: none;
            font-size: 1rem;
            font-weight: 500;
            transition: all 0.3s;
        }

        header nav ul li a:hover {
            color: #ffeb3b; /* Warna kuning cerah untuk hover */
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
        }

        #home p {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto;
        }

        /* About Me Section */
        #about {
            padding: 80px 20px;
            background-color: #ffffff;
            text-align: center;
        }

        #about h2 {
            font-size: 2.5rem;
            margin-bottom: 30px;
            color: #0288d1; /* Biru terang */
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
        }

        .profile p {
            font-size: 1.2rem;
            line-height: 1.7;
            color: #555;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Skills Section */
        #skills {
            background-color: #e3f2fd; /* Biru muda */
            padding: 80px 20px;
            text-align: center;
        }

        #skills h2 {
            font-size: 2.5rem;
            margin-bottom: 30px;
            color: #0288d1;
        }

        .skills-list {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .skill-item {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 200px;
            text-align: center;
        }

        .skill-item h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #0288d1;
        }

        /* Portfolio Section */
        #portfolio {
            padding: 80px 20px;
            background-color: #ffffff;
            text-align: center;
        }

        #portfolio h2 {
            font-size: 2.5rem;
            margin-bottom: 40px;
            color: #0288d1;
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
            color: #0288d1;
            margin-top: 10px;
        }

        /* Contact Section */
        #contact {
            padding: 80px 20px;
            background-color: #0288d1; /* Biru terang */
            color: white;
            text-align: center;
        }

        #contact h2 {
            font-size: 2.5rem;
            margin-bottom: 30px;
        }

        #contact p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        /* Footer */
        footer {
            background-color: #01579b; /* Biru gelap */
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
            <h1 class="logo">Nana</h1>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">Tentang Saya</a></li>
                    <li><a href="#portfolio">Portofolio</a></li>
                    <li><a href="#skills">Keahlian</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Home Section -->
    <section id="home">
        <h2>Selamat datang di Portofolio Nana</h2>
        <p>Saya seorang desainer web dengan passion untuk menciptakan desain yang indah dan fungsional.</p>
    </section>

    <!-- About Me Section -->
    <section id="about">
        <h2>Tentang Saya</h2>
        <div class="profile">
            <img src="assets/foto-nana.jpg" alt="Foto Nana">
            <p>Halo, saya Nana! Saya adalah seorang desainer web yang berdedikasi untuk menciptakan pengalaman pengguna yang luar biasa. Saya memiliki pengalaman dalam desain responsif dan pengembangan web, serta selalu bersemangat untuk membuat proyek yang inovatif.</p>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills">
        <h2>Keahlian</h2>
        <div class="skills-list">
            <div class="skill-item">
                <h3>Desain Web</h3>
                <p>Pengalaman mendalam dalam menciptakan desain web responsif dan fungsional.</p>
            </div>
            <div class="skill-item">
                <h3>HTML & CSS</h3>
                <p>Keahlian dalam menulis HTML dan CSS untuk membuat website yang menarik dan ramah pengguna.</p>
            </div>
            <div class="skill-item">
                <h3>JavaScript</h3>
                <p>Pengalaman dalam penggunaan JavaScript untuk menciptakan interaktivitas di website.</p>
            </div>
            <div class="skill-item">
                <h3>UI/UX Design</h3>
                <p>Desain antarmuka dan pengalaman pengguna yang intuitif untuk website dan aplikasi.</p>
            </div>
            <div class="skill-item">
                <h3>SEO</h3>
                <p>Optimasi website untuk meningkatkan visibilitas di mesin pencari.</p>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio">
        <h2>Portofolio</h2>
        <div class="gallery">
            <div class="portfolio-item">
                <img src="assets/project1.jpg" alt="Project 1">
                <p>Proyek Desain Web 1</p>
            </div>
            <div class="portfolio-item">
                <img src="assets/project2.jpg" alt="Project 2">
                <p>Proyek Desain Web 2</p>
            </div>
            <div class="portfolio-item">
                <img src="assets/project3.jpg" alt="Project 3">
                <p>Proyek Desain Web 3</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <h2>Kontak Saya</h2>
        <p>Jika Anda tertarik untuk bekerja sama atau memiliki pertanyaan, jangan ragu untuk menghubungi saya!</p>
        <p>Email: nana@example.com</p>
        <p>Telepon: +62 812-3456-7890</p>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Nana. Semua hak cipta dilindungi.</p>
    </footer>

</body>
</html>
