<style>

.footer {
    background-color: #d3d3d3; /* Warna abu-abu */
    padding: 50px; /* Ruang di sekitar footer */
    text-align: left; /* Konten rata kiri */
    border-top: 1px solid #ccc; /* Garis pemisah di atas footer */
    font-size: 0.9rem; /* Ukuran teks lebih kecil */
}

.footer-content {
    display: flex; /* Flexbox untuk layout */
    align-items: center; /* Selaraskan secara vertikal */
    justify-content: space-between; /* Jarak antar elemen */
    flex-wrap: wrap; /* Agar tetap responsif */
}

.footer-logo {
    height: 60px; /* Sesuaikan tinggi logo */
    width: auto; /* Pertahankan aspek rasio logo */
    margin-right: 20px; /* Jarak antara logo dan teks */
}

.footer-text {
    color: #333; /* Warna teks */
}

.footer-text p {
    margin: 5px 0; /* Jarak antar paragraf */
}

.footer-link {
    color: #007bff; /* Warna tautan (biru) */
    text-decoration: none; /* Hilangkan garis bawah */
    margin: 0 5px; /* Jarak antar tautan */
}

.footer-link:hover {
    text-decoration: underline; /* Garis bawah saat di-hover */
50

</style>



<footer class="footer">
    <div class="footer-content">
        <img src="{{ asset('IMG/SIAGA PLUS.png') }}" alt="Siaga Plus Logo" class="footer-logo">
        <div class="footer-text">
            <p>&copy; 2024 Siaga Plus. All Rights Reserved.</p>
            <p>
                <a href="/privacy-policy" class="footer-link">Privacy Policy</a> |
                <a href="/terms-of-service" class="footer-link">Terms of Service</a> |
                <a href="/contact-us" class="footer-link">Contact Us</a>
            </p>
        </div>
    </div>
</footer>
