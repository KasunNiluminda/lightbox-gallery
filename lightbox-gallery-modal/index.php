<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lightbox Gallery in Modal</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- LightGallery CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/css/lightgallery-bundle.min.css" />

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container text-center mt-5">
        <h1>Lightbox Gallery Inside Modal</h1>
        <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#galleryModal">
            Open Gallery
        </button>
    </div>

    <!-- Bootstrap Modal -->
    <div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">My Gallery</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div id="lightgallery" class="gallery">
                        <!-- 20 Online demo images -->
                        <a href="https://picsum.photos/id/1015/1000/700"><img
                                src="https://picsum.photos/id/1015/300/200" alt="Image 1"></a>
                        <a href="https://picsum.photos/id/1025/1000/700"><img
                                src="https://picsum.photos/id/1025/300/200" alt="Image 2"></a>
                        <a href="https://picsum.photos/id/1035/1000/700"><img
                                src="https://picsum.photos/id/1035/300/200" alt="Image 3"></a>
                        <a href="https://picsum.photos/id/1045/1000/700"><img
                                src="https://picsum.photos/id/1045/300/200" alt="Image 4"></a>
                        <a href="https://picsum.photos/id/1055/1000/700"><img
                                src="https://picsum.photos/id/1055/300/200" alt="Image 5"></a>
                        <a href="https://picsum.photos/id/1065/1000/700"><img
                                src="https://picsum.photos/id/1065/300/200" alt="Image 6"></a>
                        <a href="https://picsum.photos/id/1075/1000/700"><img
                                src="https://picsum.photos/id/1075/300/200" alt="Image 7"></a>
                        <a href="https://picsum.photos/id/1015/1000/700"><img
                                src="https://picsum.photos/id/1015/300/200" alt="Image 1"></a>
                        <a href="https://picsum.photos/id/1025/1000/700"><img
                                src="https://picsum.photos/id/1025/300/200" alt="Image 2"></a>
                        <a href="https://picsum.photos/id/1035/1000/700"><img
                                src="https://picsum.photos/id/1035/300/200" alt="Image 3"></a>
                        <a href="https://picsum.photos/id/1045/1000/700"><img
                                src="https://picsum.photos/id/1045/300/200" alt="Image 4"></a>
                        <a href="https://picsum.photos/id/1055/1000/700"><img
                                src="https://picsum.photos/id/1055/300/200" alt="Image 5"></a>
                        <a href="https://picsum.photos/id/1065/1000/700"><img
                                src="https://picsum.photos/id/1065/300/200" alt="Image 6"></a>
                        <a href="https://picsum.photos/id/1075/1000/700"><img
                                src="https://picsum.photos/id/1075/300/200" alt="Image 7"></a>
                        <a href="https://picsum.photos/id/1015/1000/700"><img
                                src="https://picsum.photos/id/1015/300/200" alt="Image 1"></a>
                        <a href="https://picsum.photos/id/1025/1000/700"><img
                                src="https://picsum.photos/id/1025/300/200" alt="Image 2"></a>
                        <a href="https://picsum.photos/id/1035/1000/700"><img
                                src="https://picsum.photos/id/1035/300/200" alt="Image 3"></a>
                        <a href="https://picsum.photos/id/1045/1000/700"><img
                                src="https://picsum.photos/id/1045/300/200" alt="Image 4"></a>
                        <a href="https://picsum.photos/id/1055/1000/700"><img
                                src="https://picsum.photos/id/1055/300/200" alt="Image 5"></a>
                        <a href="https://picsum.photos/id/1065/1000/700"><img
                                src="https://picsum.photos/id/1065/300/200" alt="Image 6"></a>
                        <a href="https://picsum.photos/id/1075/1000/700"><img
                                src="https://picsum.photos/id/1075/300/200" alt="Image 7"></a>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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