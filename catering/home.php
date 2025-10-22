<?php
// Cek apakah user sudah login atau belum
session_start();
$isLoggedIn = isset($_SESSION['user_logged_in']) ? $_SESSION['user_logged_in'] : false;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Catering</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        /* Global Styles */
        body {
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }

        /* Navigation Bar */
        nav {
            background: #fff;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
        }

        nav .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        nav .navbar a {
            font-size: 18px;
            color: #333;
            text-decoration: none;
            margin: 0 15px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        nav .navbar a:hover {
            color: #ff6f61;
        }

        /* Hero Section */
        header {
            background: linear-gradient(135deg, #ff6f61 0%, #ff8c42 100%);
            color: white;
            padding: 120px 20px;
            text-align: center;
            position: relative;
        }

        header h1 {
            font-size: 50px;
            font-weight: 700;
            letter-spacing: 2px;
            margin-bottom: 20px;
        }

        header p {
            font-size: 22px;
            font-weight: 300;
            margin-bottom: 30px;
        }

        header .btn-container a {
            background-color: #ff6f61;
            color: white;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 30px;
            font-weight: bold;
            font-size: 16px;
            margin: 10px;
            transition: all 0.3s ease;
        }

        header .btn-container a:hover {
            background-color: #e55d4e;
            transform: scale(1.05);
        }

        /* Menu Section */
        .container {
            width: 85%;
            margin: 50px auto;
            text-align: center;
        }

        .menu-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
            list-style: none;
            padding: 0;
        }

        .menu-list li {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .menu-list li:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .menu-list li img {
            width: 100%;
            border-radius: 10px;
        }

        .menu-list li h3 {
            margin: 15px 0;
            font-size: 22px;
            color: #ff6f61;
            font-weight: 600;
        }

        .menu-list li p {
            font-size: 16px;
            color: #777;
        }

        .menu-list li span {
            font-size: 18px;
            font-weight: 700;
            color: #ff6f61;
        }

        /* Feedback Section */
        .feedback-section {
            background-color: #ff6f61;
            color: white;
            padding: 40px 20px;
            margin-top: 50px;
            text-align: center;
            border-radius: 10px;
        }

        .feedback-section h2 {
            font-size: 30px;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .feedback-section p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .feedback-list {
            list-style: none;
            padding: 0;
            margin-top: 20px;
        }

        .feedback-list li {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 15px;
            color: #333;
        }

        .feedback-list li h3 {
            font-size: 18px;
            font-weight: 600;
            color: #ff6f61;
            margin-bottom: 10px;
        }

        .feedback-list li p {
            font-size: 16px;
            color: #777;
        }

        /* Footer */
        footer {
            background-color: #ff6f61;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
            font-size: 14px;
        }

        /* Media Queries for Responsive Design */
        @media (max-width: 768px) {
            header h1 {
                font-size: 36px;
            }

            header p {
                font-size: 18px;
            }

            .menu-list {
                grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            }
        }

        @media (max-width: 480px) {
            header h1 {
                font-size: 28px;
            }

            header p {
                font-size: 14px;
            }

            .menu-list li {
                padding: 15px;
            }
        }
    </style>
</head>
<body>

<nav>
    <div class="navbar">
        <a href="">Menu</a>
        <a href="">About</a>
        <a href="">Contact</a>
    </div>
</nav>

<header>
    <h1>Selamat Datang di Catering!</h1>
    <p>Hidangan Lezat yang Siap Memanjakan Anda</p>
    <div class="btn-container">
        <?php if ($isLoggedIn): ?>
            <a href="home.php" class="logout-btn">Logout</a>
        <?php else: ?>
            <a href="daftar.php" class="login-btn">PESAN</a>
        <?php endif; ?>
    </div>
</header>

<div class="container">
    <h2>Menu Catering Kami</h2>
    <ul class="menu-list">
        <li>
            <img src="nasi-goreng.jpg" alt="Nasi Goreng Spesial">
            <h3>Nasi Goreng Spesial</h3>
            <p>Kombinasi nasi, sayuran, dan ayam yang dibumbui khas.</p>
            <span>Rp 30,000</span>
        </li>
        <li>
            <img src="ayam-bakar.jpg" alt="Ayam Bakar">
            <h3>Ayam Bakar</h3>
            <p>Ayam bakar dengan bumbu spesial, dijamin lezat!</p>
            <span>Rp 35,000</span>
        </li>
        <li>
            <img src="sate-ayam.jpg" alt="Sate Ayam">
            <h3>Sate Ayam</h3>
            <p>Sate ayam empuk dengan bumbu kacang yang nikmat.</p>
            <span>Rp 25,000</span>
        </li>
        <li>
            <img src="rendang.jpg" alt="Rendang Daging">
            <h3>Rendang Daging</h3>
            <p>Daging empuk dimasak dengan rempah pilihan yang menggugah selera.</p>
            <span>Rp 40,000</span>
        </li>
        <li>
            <img src="gado-gado.jpg" alt="Gado-Gado">
            <h3>Gado-Gado</h3>
            <p>Salad sayur dengan bumbu kacang yang segar dan gurih.</p>
            <span>Rp 20,000</span>
        </li>
    </ul>
</div>

<div class="feedback-section">
    <h2>Tanggapan Pelanggan</h2>
    <p>Berikut adalah beberapa tanggapan dari pelanggan kami:</p>
    <ul class="feedback-list">
        <li>
            <h3>Andi Setiawan</h3>
            <p>"Menu nasi gorengnya sangat lezat dan porsinya pas. Saya akan memesan lagi di kesempatan berikutnya!"</p>
        </li>
        <li>
            <h3>Rina Wulandari</h3>
            <p>"Ayam bakarnya bumbu khasnya enak banget, gak sabar mencoba menu lain."</p>
        </li>
        <li>
            <h3>Joko Prasetyo</h3>
            <p>"Rendang dagingnya sangat empuk dan kaya rasa. Pokoknya mantap!"</p>
        </li>
    </ul>
</div>

<footer>
    <p>&copy; 2025 Catering Lezat | All Rights Reserved</p>
</footer>

</body>
</html>
