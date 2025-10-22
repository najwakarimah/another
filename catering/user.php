<?php
session_start(); // Mulai session

// Menangkap data yang dikirim melalui POST untuk alamat baru
if (isset($_POST['new_address'])) {
    $_SESSION['address'] = $_POST['new_address']; // Update alamat di session
}

// Menangkap data awal jika belum ada di session
if (!isset($_SESSION['name'])) {
    $_SESSION['name'] = 'Pengguna';
}
if (!isset($_SESSION['address'])) {
    $_SESSION['address'] = '-';
}
if (!isset($_SESSION['phone'])) {
    $_SESSION['phone'] = '-';
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang - Catering</title>
    <style>
        /* Reset dan Basic Style */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Welcome Container */
        .welcome-container {
            width: 100%;
            max-width: 450px;
            padding: 30px;
            background-color: white;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-top: 20px;
            text-align: center;
        }

        .welcome-container h2 {
            font-family: 'Roboto', sans-serif;
            margin-bottom: 20px;
            color: #333;
        }

        .welcome-container p {
            font-size: 18px;
            margin: 10px 0;
            color: #555;
        }

        .welcome-container .welcome-message {
            font-size: 1.3rem;
            font-weight: bold;
            margin-top: 20px;
            color: #E74C3C;
        }

        /* Button Styles */
        .back-button {
            display: block;
            margin-top: 30px;
            padding: 12px;
            background-color: #E74C3C;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            width: 100%;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .back-button:hover {
            background-color: #C0392B;
        }

        .change-address-form {
            margin-top: 20px;
            text-align: left;
        }

        .change-address-form input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .change-address-form button {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #2ECC71;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .change-address-form button:hover {
            background-color: #27AE60;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .welcome-container {
                width: 90%;
                max-width: 400px;
            }
        }

        @media (max-width: 480px) {
            .welcome-container {
                width: 95%;
                max-width: 350px;
            }
        }
    </style>
</head>
<body>

    <!-- Welcome Message -->
    <div class="welcome-container">
        <h2>Selamat Datang, <?php echo htmlspecialchars($_SESSION['name']); ?>!</h2>
        <p>Terima kasih telah mendaftar untuk layanan catering kami.</p>
        Alamat: <strong><?php echo ($_SESSION['address']); ?></strong><br>
        Nomor Hp: <strong><?php echo ($_SESSION['phone']); ?></strong><br>

        <div class="welcome-message">
            Kami senang bisa melayani Anda! Pesanan Anda akan segera diproses.
        </div>

        <!-- Form untuk Ganti Alamat -->
        <div class="change-address-form">
            <form method="POST" action="" onsubmit="return confirmAddressChange()">
                <label for="new_address">Ganti Alamat Pengiriman:</label>
                <input type="text" name="new_address" id="new_address" value="<?php echo htmlspecialchars($_SESSION['address']); ?>" required>
                <button type="submit">Update Alamat</button>
            </form>
        </div>

        <!-- Kembali Button -->
        <button class="back-button" onclick="window.history.back()">Kembali</button>
    </div>

    <script>
        // Fungsi konfirmasi perubahan alamat
        function confirmAddressChange() {
            // Menampilkan konfirmasi
            var confirmChange = confirm("Apakah Anda yakin ingin mengubah alamat?");
            return confirmChange;  // Jika Yes, akan lanjutkan submit form, jika No, form tidak akan disubmit
        }
    </script>

</body>
</html>
