@include('layout.navbar')

<body>
    <div id="loading">
        <div class="spinner"></div>
    </div>


    <div class="Body">
        <div class="header-container">
            <h1>Panduan Skala Intensitas Gempabumi (SIG) BMKG</h1>
        </div>
        <p class="description-box">
            SIG adalah Skala Intensitas Gempabumi. Skala ini menyatakan dampak yang ditimbulkan akibat terjadinya gempabumi. 
            Skala Intensitas Gempabumi (SIG-BMKG) digagas dan disusun dengan mengakomodir keterangan dampak gempabumi berdasarkan 
            tipikal budaya atau bangunan di Indonesia. Skala ini disusun lebih sederhana dengan hanya memiliki lima tingkatan yaitu I-V. 
            SIG-BMKG diharapkan bermanfaat untuk digunakan dalam penyampaian informasi terkait mitigasi gempabumi dan atau respon cepat 
            pada kejadian gempabumi merusak. Skala ini dapat memberikan kemudahan kepada masyarakat untuk dapat memahami tingkatan dampak 
            yang terjadi akibat gempabumi dengan lebih baik dan akurat.
        </p>

        <!-- Skala 1 -->
        <div class="skala">
            <h2>
                Skala 1: TIDAK DIRASAKAN (Not Felt)
                <span class="skala-box skala-1"></span>
            </h2>
            <div class="content">
                <p>
                    Tidak dirasakan atau dirasakan hanya oleh beberapa orang tetapi terekam oleh alat.
                </p>
                <div class="image-container">
                    <img src={{ asset('IMG/image.png') }} alt="Skala 1 Image">
                </div>
            </div>
            <div class="white-box"></div>
        </div>

        <!-- Skala 2 -->
        <div class="skala">
            <h2>
                Skala 2: DIRASAKAN (Felt)
                <span class="skala-box skala-2"></span>
            </h2>
            <div class="content">
                <p>
                    Dirasakan oleh orang banyak tetapi tidak menimbulkan kerusakan. Benda-benda ringan yang digantung bergoyang dan jendela kaca bergetar.
                </p>
                <div class="image-container">
                    <img src={{ asset('IMG/image2.png') }} alt="Skala 2 Image">
                </div>
            </div>
            <div class="white-box"></div>
        </div>

        <!-- Skala 3 -->
        <div class="skala">
            <h2>
                Skala 3: KERUSAKAN RINGAN (Slight Damage)
                <span class="skala-box skala-3"></span>
            </h2>
            <div class="content">
                <p>
                    Bagian non struktur bangunan mengalami kerusakan ringan, seperti retak rambut pada dinding, atap bergeser ke bawah dan sebagian berjatuhan.
                </p>
                <div class="image-container">
                    <img src={{ asset('IMG/image3.png') }} alt="Skala 3 Image">
                </div>
            </div>
            <div class="white-box"></div>
        </div>

        <!-- Skala 4 -->
        <div class="skala">
            <h2>
                Skala 4: KERUSAKAN SEDANG (Moderate Damage)
                <span class="skala-box skala-4"></span>
            </h2>
            <div class="content">
                <p>
                    Banyak Retakan terjadi pada dinding bangunan sederhana, sebagian roboh, kaca pecah. Sebagian plester dinding lepas. Hampir sebagian besar atap bergeser ke bawah atau jatuh.
                </p>
                <div class="image-container">
                    <img src={{ asset('IMG/image4.png') }} alt="Skala 4 Image">
                </div>
            </div>
            <div class="white-box"></div>
        </div>

        <!-- Skala 5 -->
        <div class="skala">
            <h2>
                Skala 5: KERUSAKAN BERAT (Heavy Damage)
                <span class="skala-box skala-5"></span>
            </h2>
            <div class="content">
                <p>
                    Sebagian besar dinding bangunan permanen roboh. Struktur bangunan mengalami kerusakan berat. Rel kereta api melengkung.
                </p>
                <div class="image-container">
                    <img src={{ asset('IMG/image5.png') }} alt="Skala 5 Image">
                </div>
            </div>
            <div class="white-box"></div>
        </div>

    </div>

    <a href="{{ url('form') }}" class="floating-call-btn">
        <i class="fas fa-phone"></i>
        <img src="{{ asset('IMG/massage.png') }}" alt="Chat Icon" style="width: 30px; height: 30px;">
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-FsWuFftHB59nnGqwwPfyF2TlA42bRYzKHwoBbEpoXKl0mg44qxRABhvFMqAfhJfD" crossorigin="anonymous"></script>
    <script src="{{ asset('js/loading.js') }}"></script>

    @include('layout.footer')

</body>

