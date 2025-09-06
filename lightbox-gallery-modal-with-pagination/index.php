<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lightbox Gallery with Pagination in Modal</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- LightGallery CSS -->
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/css/lightgallery-bundle.min.css" />

  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <div class="container text-center mt-5">
    <h1>Lightbox Gallery with Pagination</h1>
    <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#galleryModal">
      Open Gallery
    </button>
  </div>

  <!-- Bootstrap Modal -->
  <div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">My Gallery</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <!-- Gallery container (dynamic content will load here) -->
          <div id="lightgallery" class="gallery"></div>

          <!-- Pagination controls -->
          <nav aria-label="Gallery Pagination" class="mt-4">
            <ul class="pagination justify-content-center" id="galleryPagination"></ul>
          </nav>

        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- LightGallery JS -->
  <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/lightgallery.umd.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/plugins/zoom/lg-zoom.umd.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/plugins/thumbnail/lg-thumbnail.umd.min.js"></script>

  <script src="js/init.js"></script>

</body>

</html>
