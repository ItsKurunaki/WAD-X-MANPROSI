<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panduan Skala Intensitas Gempabumi (SIG) BMKG</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .intro-text {
            color: #666;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .scale-card {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            display: flex;
            align-items: flex-start;
            gap: 20px;
        }

        .scale-icon {
            width: 80px;
            height: 80px;
            object-fit: contain;
        }

        .scale-content {
            flex: 1;
        }

        .scale-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .scale-indicator {
            width: 20px;
            height: 20px;
            border-radius: 4px;
        }

        .scale-1 { background-color: #FFFFFF; border: 1px solid #ccc; }
        .scale-2 { background-color: #92D050; }
        .scale-3 { background-color: #FFFF00; }
        .scale-4 { background-color: #FFC000; }
        .scale-5 { background-color: #FF0000; }

        .scale-description {
            color: #444;
            line-height: 1.5;
        }

        .hubungi-link {
            color: #007bff;
            text-decoration: none;
            float: right;
            font-size: 14px;
        }

        .hubungi-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Panduan Skala Intensitas Gempabumi (SIG) BMKG</h1>
        
        <p class="intro-text">
            SIG adalah Skala Intensitas Gempabumi. Skala ini menyatakan dampak yang ditimbulkan akibat terjadinya gempabumi. Skala Intensitas Gempabumi (SIG-BMKG) digagas dan disusun dengan mengakomodir keterangan dampak gempabumi berdasarkan tipikal budaya atau bangunan di Indonesia. Skala ini disusun lebih sederhana dengan hanya memiliki lima tingkatan yaitu I-V. SIG-BMKG diharapkan bermanfaat untuk digunakan dalam penyampaian informasi terkait mitigasi gempabumi dan atau respon cepat pada kejadian gempabumi merusak. Skala ini dapat memberikan kemudahan kepada masyarakat untuk dapat memahami tingkatan dampak yang terjadi akibat gempabumi dengan baik dan akurat.
        </p>

        <div class="scale-card">
            <img src="{{ asset('images/scale1.png') }}" alt="Skala 1">
            <div class="scale-content">
                <div class="scale-title">
                    Skala 1 <div class="scale-indicator scale-1"></div>
                    <span>TIDAK DIRASAKAN (Not Felt)</span>
                </div>
                <p class="scale-description">
                    Tidak dirasakan atau dirasakan hanya oleh beberapa orang tetapi terekam oleh alat.
                </p>
            </div>
        </div>

        <div class="scale-card">
            <img src="{{ asset('images/scale2.png') }}" alt="Skala 2" class="scale-icon">
            <div class="scale-content">
                <div class="scale-title">
                    Skala 2 <div class="scale-indicator scale-2"></div>
                    <span>DIRASAKAN (Felt)</span>
                </div>
                <p class="scale-description">
                    Dirasakan oleh orang banyak tetapi tidak menimbulkan kerusakan. Benda-benda ringan yang digantung bergoyang dan jendela kaca bergetar.
                </p>
            </div>
        </div>

        <div class="scale-card">
            <img src="{{ asset('images/scale3.png') }}" alt="Skala 3" class="scale-icon">
            <div class="scale-content">
                <div class="scale-title">
                    Skala 3 <div class="scale-indicator scale-3"></div>
                    <span>KERUSAKAN RINGAN (Slight Damage)</span>
                </div>
                <p class="scale-description">
                    Bagian non struktur bangunan mengalami kerusakan ringan, seperti retak rambut pada dinding, atap bergeser ke bawah dan sebagian berjatuhan.
                </p>
            </div>
            <a href="#" class="hubungi-link">Hubungi</a>
        </div>

        <div class="scale-card">
            <img src="{{ asset('images/scale4.png') }}" alt="Skala 4" class="scale-icon">
            <div class="scale-content">
                <div class="scale-title">
                    Skala 4 <div class="scale-indicator scale-4"></div>
                    <span>KERUSAKAN SEDANG (Moderate Damage)</span>
                </div>
                <p class="scale-description">
                    Banyak retakan terjadi pada dinding bangunan sederhana, sebagian roboh, kaca pecah. Sebagian plester dinding lepas. Hampir sebagian besar atap bergeser ke bawah atau jatuh. Struktur bangunan mengalami kerusakan ringan sampai sedang.
                </p>
            </div>
            <a href="#" class="hubungi-link">Hubungi</a>
        </div>

        <div class="scale-card">
            <img src="{{ asset('images/scale5.png') }}" alt="Skala 5" class="scale-icon">
            <div class="scale-content">
                <div class="scale-title">
                    Skala 5 <div class="scale-indicator scale-5"></div>
                    <span>KERUSAKAN BERAT (Heavy Damage)</span>
                </div>
                <p class="scale-description">
                    Sebagian besar dinding bangunan permanen roboh. Struktur bangunan mengalami kerusakan berat. Rel kereta api melengkung.
                </p>
            </div>
            <a href="#" class="hubungi-link">Hubungi</a>
        </div>
    </div>
</body>
</html>