  document.addEventListener("DOMContentLoaded", () => {
    const loading = document.getElementById("loading");
  
    // Tampilkan animasi loading saat halaman dimuat
    loading.style.visibility = "visible";
  
    // Hilangkan loading setelah halaman selesai dimuat
    window.onload = () => {
      loading.style.visibility = "hidden";
    };
  
    // Tambahkan animasi saat navigasi
    document.querySelectorAll("a").forEach(link => {
      link.addEventListener("click", (e) => {
        const href = link.getAttribute("href");
        if (href) {
          e.preventDefault();
          loading.style.visibility = "visible";
          setTimeout(() => {
            window.location.href = href;
          }, 500);
        }
      });
    });
  });
  