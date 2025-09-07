let gallery;
const images = [
  // Page 1
  { src: "https://picsum.photos/id/1015/1000/700", thumb: "https://picsum.photos/id/1015/300/200", title: "Mountain Lake" },
  { src: "https://picsum.photos/id/1025/1000/700", thumb: "https://picsum.photos/id/1025/300/200", title: "Cute Dog" },
  { src: "https://picsum.photos/id/1035/1000/700", thumb: "https://picsum.photos/id/1035/300/200", title: "Forest Road" },
  { src: "https://picsum.photos/id/1045/1000/700", thumb: "https://picsum.photos/id/1045/300/200", title: "Snowy Mountains" },
  { src: "https://picsum.photos/id/1055/1000/700", thumb: "https://picsum.photos/id/1055/300/200", title: "Beach Sunset" },
  { src: "https://picsum.photos/id/1065/1000/700", thumb: "https://picsum.photos/id/1065/300/200", title: "City Skyline" },

  // Page 2
  { src: "https://picsum.photos/id/1075/1000/700", thumb: "https://picsum.photos/id/1075/300/200", title: "Bridge View" },
  { src: "https://picsum.photos/id/1085/1000/700", thumb: "https://picsum.photos/id/1085/300/200", title: "Boats on Lake" },
  { src: "https://picsum.photos/id/1095/1000/700", thumb: "https://picsum.photos/id/1095/300/200", title: "Desert Sand" },
  { src: "https://picsum.photos/id/1105/1000/700", thumb: "https://picsum.photos/id/1105/300/200", title: "Mountain Cliffs" },
  { src: "https://picsum.photos/id/1115/1000/700", thumb: "https://picsum.photos/id/1115/300/200", title: "Rainforest" },
  { src: "https://picsum.photos/id/1125/1000/700", thumb: "https://picsum.photos/id/1125/300/200", title: "Ocean Waves" }
];

const itemsPerPage = 6;
let currentPage = 1;

// Render gallery for a specific page
function renderGallery(page) {
  const start = (page - 1) * itemsPerPage;
  const end = start + itemsPerPage;
  const pageItems = images.slice(start, end);

  const galleryContainer = document.getElementById("lightgallery");
  galleryContainer.innerHTML = "";

  pageItems.forEach(img => {
    const a = document.createElement("a");
    a.href = img.src;
    a.innerHTML = `<img src="${img.thumb}" alt="${img.title}">`;
    galleryContainer.appendChild(a);
  });

  if (gallery) {
    gallery.destroy(true);
  }

  gallery = lightGallery(galleryContainer, {
    plugins: [lgZoom, lgThumbnail],
    speed: 500,
    thumbnail: true,
    zoom: true
  });

  renderPagination(page);
}

// Render pagination
function renderPagination(activePage) {
  const totalPages = Math.ceil(images.length / itemsPerPage);
  const pagination = document.getElementById("galleryPagination");
  pagination.innerHTML = "";

  for (let i = 1; i <= totalPages; i++) {
    const li = document.createElement("li");
    li.className = "page-item " + (i === activePage ? "active" : "");
    li.innerHTML = `<a class="page-link" href="#">${i}</a>`;
    li.addEventListener("click", (e) => {
      e.preventDefault();
      currentPage = i;
      renderGallery(i);
    });
    pagination.appendChild(li);
  }
}

// Initialize when modal opens
document.getElementById("galleryModal").addEventListener("shown.bs.modal", () => {
  renderGallery(currentPage);
});
