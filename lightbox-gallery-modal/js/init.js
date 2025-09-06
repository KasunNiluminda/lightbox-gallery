let gallery;

// Initialize LightGallery only when modal is shown
const galleryModal = document.getElementById("galleryModal");

galleryModal.addEventListener("shown.bs.modal", function () {
  // Initialize LightGallery inside modal
  if (gallery) {
    gallery.destroy(true);
  }
  gallery = lightGallery(document.getElementById("lightgallery"), {
    plugins: [lgZoom, lgThumbnail],
    speed: 500,
    thumbnail: true,
    zoom: true,
  });
});
