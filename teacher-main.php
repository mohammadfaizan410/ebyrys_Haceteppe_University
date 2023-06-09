<?php
session_start();
if (!isset($_SESSION['userlogin'])) {
    header("Location: login-student.php");
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION);
    header("Location: main.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>e-BYRYS-KKDS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">


    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="style.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->

</head>

<body class="stu-body">
    <div class="stu-body1">
        <div class="navigation-wrapper">
            <div class="navigation-both">
                <div class="navigation-left">
                    <a href="" class="">
                        <h3 class="title"><i class="fa fa-user-edit me-2"></i>e-BYRYS-KKDS</h3>
                    </a>

                </div>
                <div class="navigation-right">
                    <div class="nav-items-wrapper">
                        <a href="formlar-teacher.php" id="formlar" class="nav-link nav-items formlar btn-success"> <i
                                class="fa fa-table me-2 "></i>Öğrenciler</a>

                        <a href="vaka-upload.php" class="nav-link nav-items btn-success">
                            <i class="fa fa-th me-2"></i>Vakalar</a>

                    </div>
                    <div>

                        <a href="#" class="nav-link " data-bs-toggle="dropdown">
                            <span class="d-none d-lg-inline-flex"><?php
                                                                    echo '' . $_SESSION['userlogin']['name'] . ' ' . $_SESSION['userlogin']['surname'] . '';
                                                                    ?></span></a>
                        <span class="status">Öğretmen</span>

                        <a class="black" href="teacher-main.php?logout=true">Çıkış Yap</a>

                    </div>
                    <div>
                    <a href="delete-account.php?type=teacher" id="deleteAccount" class="nav-link btn" style="background-color:red;"> <i
                                class="fa fa-table me-2 "></i>silmek</a>
                    </div>
                </div>

                <div>





                </div>

            </div>

        </div>
        <div class="content" id="content">

        </div>
        <script>
        $(function() {
            $.ajaxSetup({
                cache: false
            }); // disable caching for all requests.

            // RAW Text/Html data from a file
            $("#content").load("formlar-teacher.php");

            $(function() {
                $("a.nav-items").on("click", function(e) {
                    e.preventDefault();
                    $("#content").load(this.href);
                })
            })

        });
        </script>
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/chart/chart.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- Template Javascript -->
        <script src="main.js"></script>
</body>

</html>