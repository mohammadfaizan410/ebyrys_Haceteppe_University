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
    <!-- Customized Bootstrap Stylesheet -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="style.css" rel="stylesheet">

</head>

<body class="stu-body">
    <div class="stu-body1">
        <div class="navigation-wrapper">
            <div class="navigation-left">
                <a href="index.html" class="nav-items">
                    <h3 class=""><i class="fa fa-user-edit me-2"></i>e-BYRYS-KKDS</h3>
                </a>

            </div>
            <div class="navigation-right">
                <div class="nav-items-wrapper">
                    <a href="formlar.php" id="formlar" class="nav-link nav-items formlar"> <i class="fa fa-table me-2 "></i>Formlar</a>
                    <a href="chart.html" class="nav-link nav-items"><i class="fa fa-chart-bar me-2"></i>Sınavlar</a>
                    <a href="widget.html" class="nav-link"><i class="fa fa-th me-2"></i>Öneriler</a>
                    <a href="widget.html" class="nav-link"><i class="fa fa-comments me-2"></i>Mesajlar</a>
                </div>
                <div class="nav-item dropdown">
                    <div class="ms-3">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="d-none d-lg-inline-flex"><?php
                                                                    echo '' . $_SESSION['userlogin']['name'] . ' ' . $_SESSION['userlogin']['surname'] . '';
                                                                    ?></span></a>
                        <span class="status">Student</span>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="student-main.php?logout=true">Logout</a>
                        </div>
                    </div>
                </div>






            </div>
            <div class="dropdown-menu ">
                <a href="#" class="dropdown-item">My Profile</a>
                <a href="#" class="dropdown-item">Settings</a>
                <a href="student-main.php?logout=true">Logout</a>
            </div>
        </div>

    </div>
    <div class="content" id="content">
        <div class="container-fluid pt-4 px-4">
            <?php
            require_once('config-students.php');

            $userid = $_SESSION['userlogin']['id'];
            echo $userid;
            $sql = "SELECT * FROM students j JOIN patients v ON j.id=v.id WHERE v.id =" . $userid;
            $smtmselect = $db->prepare($sql);
            $result = $smtmselect->execute();
            if ($result) {
                $values = $smtmselect->fetch(PDO::FETCH_ASSOC);

                var_dump($values);
            } else {
                echo 'error';
            }

            ?>
            <div class="send-patient">

                <div class=" patiens-save">
                    <form action="" method="POST">
                        <p class="usernamelabel">Patient Name</p>
                        <input type="text" required name="name" id="name" placeholder="Enter name here">

                        <p class="usernamelabel">Patient Surname</p>
                        <input type="text" required name="surname" id="surname" placeholder="Enter surname here">

                        <p class="usernamelabel">Patient Age</p>
                        <input type="text" required name="age" id="age" placeholder="Enter patient age">


                        <input type="submit" name="submit" id="submit" value="Save Patient">

                    </form>
                </div>
                <div class="dark-blue text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Recent Salse</h6>
                        <a href="">Show All</a>
                        <?php
                        echo '' . $_SESSION['userlogin']['name'] . ' ' . $_SESSION['userlogin']['surname'] . '';
                        ?>
                    </div>

                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Invoice</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>$123</td>
                                    <td>Paid</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>$123</td>
                                    <td>Paid</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>$123</td>
                                    <td>Paid</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>$123</td>
                                    <td>Paid</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>$123</td>
                                    <td>Paid</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <script>
                $(function() {
                    $('#submit').click(function(e) {



                        var id = <?php

                                    $userid = $_SESSION['userlogin']['id'];
                                    echo $userid
                                    ?>;
                        var name = $('#name').val();
                        var surname = $('#surname').val();
                        var age = $('#age').val();


                        e.preventDefault()

                        $.ajax({
                            type: 'POST',
                            url: 'student-patient.php',
                            data: {
                                id: id,
                                name: name,
                                surname: surname,
                                age: age,

                            },
                            success: function(data) {
                                alert(data)
                                Swal.fire({
                                    'title': 'Success',
                                    'text': data,
                                    'type': 'success'
                                })
                            },
                            error: function(data) {
                                Swal.fire({
                                    'title': 'Errors',
                                    'text': 'There were errors',
                                    'type': 'error'
                                })
                            }
                        })




                    })

                })
            </script>
        </div>
        /* <script>
            $(function() {
                $.ajaxSetup({
                    cache: false
                }); // disable caching for all requests.

                // RAW Text/Html data from a file

                $(function() {
                    $("a.nav-items").on("click", function(e) {
                        e.preventDefault();
                        $("#content").load(this.href);
                    })
                })

            });
        </script> */
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