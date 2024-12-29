document.addEventListener("DOMContentLoaded", () => {
    const profileToggle = document.getElementById("profileToggle");
    const dropdownMenu = document.getElementById("dropdownMenu");
  
    if (!profileToggle || !dropdownMenu) {
      console.error("Element tidak ditemukan: Periksa ID di HTML!");
      return;
    }
  
    // Toggle dropdown saat gambar profil diklik
    profileToggle.addEventListener("click", () => {
      dropdownMenu.classList.toggle("active");
    });
  
    // Tutup dropdown jika klik di luar
    window.addEventListener("click", (event) => {
      if (!profileToggle.contains(event.target) && !dropdownMenu.contains(event.target)) {
        dropdownMenu.classList.remove("active");
      }
    });
  });
  