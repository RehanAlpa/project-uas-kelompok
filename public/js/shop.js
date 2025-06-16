document.addEventListener("DOMContentLoaded", () => {
  const filterButtons = document.querySelectorAll(".filters .btn-outline");
  const productGrids = document.querySelectorAll(".product-grid");

  filterButtons.forEach(button => {
    button.addEventListener("click", () => {
      const category = button.dataset.category;

      // Highlight tombol aktif
      filterButtons.forEach(btn => btn.classList.remove("active"));
      button.classList.add("active");

      // Tampilkan hanya grid yang sesuai kategori
      productGrids.forEach(grid => {
        if (grid.classList.contains(category)) {
          grid.style.display = "grid";
        } else {
          grid.style.display = "none";
        }
      });
    });
  });

  // Set default: hanya hoodie tampil saat pertama kali
  productGrids.forEach(grid => {
    if (grid.classList.contains("hoodie")) {
      grid.style.display = "grid";
    } else {
      grid.style.display = "none";
    }
  });
});
