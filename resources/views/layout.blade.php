<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Portofolio - Bayu</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/home/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/home/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/home/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/home/css/style.css" rel="stylesheet">
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@8/dist/sweetalert2.min.css" rel=" stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-atas px-0 wow fadeIn" data-wow-delay="0.1s">
        <nav class="navbar navbar-expand-lg navbar-light py-lg-3 px-lg-5 py-5 wow fadeIn bg-white" data-wow-delay="0.1s"
            style="background-color: #a01626 !important">

            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav p-4 p-lg-0" style="background-color: #a01626 !important;margin:auto">
                    <a href="{{ url('/') }}" class="nav-item nav-link">Tentang Ku</a>
                    <a href="#portofolio" class="nav-item nav-link">Portofolio</a>
                    <a href="{{ url('loginakun') }}" class="nav-item nav-link">Login</a>
                </div>
            </div>
        </nav>
    </div>
    @yield('content');
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/home/lib/wow/wow.min.js"></script>
    <script src="/home/lib/easing/easing.min.js"></script>
    <script src="/home/lib/waypoints/waypoints.min.js"></script>
    <script src="/home/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/home/lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="/home/js/main.js"></script>
    <script src="/home/admin/plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="/home/admin/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
</body>

</html>
