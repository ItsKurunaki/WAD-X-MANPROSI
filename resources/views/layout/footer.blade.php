<style>

.footer {
    background-color: #d3d3d3; 
    padding: 50px; 
    text-align: left; 
    border-top: 1px solid #ccc; 
    font-size: 0.9rem; 
}

.footer-content {
    display: flex; 
    align-items: center; 
    justify-content: space-between;
    flex-wrap: wrap;
}

.footer-logo {
    height: 60px; 
    width: auto; 
    margin-right: 20px; 
}

.footer-text {
    color: #333;
}

.footer-text p {
    margin: 5px 0; 
}

.footer-link {
    color: #007bff; 
    text-decoration: none; 
    margin: 0 5px; 
}

.footer-link:hover {
    text-decoration: underline; 
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
