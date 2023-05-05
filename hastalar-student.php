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
    <link href="style.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->

</head>

<body style="background-color:white">
    <div class="container-fluid pt-4 px-4">
        <?php
        require_once('config-students.php');
        $userid = $_SESSION['userlogin']['id'];
        //echo $userid;
        $sql = "SELECT * FROM  patients  WHERE id =" . $userid;
        $smtmselect = $db->prepare($sql);
        $result = $smtmselect->execute();
        if ($result) {
            $values = $smtmselect->fetchAll(PDO::FETCH_ASSOC);
        } else {
            echo 'error';
        };

        $sql = "SELECT * FROM  vakalar";
        $smtmselect = $db->prepare($sql);
        $result = $smtmselect->execute();
        if ($result) {
            $vakalar = $smtmselect->fetchAll(PDO::FETCH_ASSOC);
        } else {
            echo 'error';
        }

        ?>
        <div class="send-patient">

            <div class=" patients-save">

            </div>
            <div class="patients-table text-center rounded p-4" id="patients-table">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0 darkcyan table-title">Hasta Listesi / Öneriler</h6>

                </div>

                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class=" darkcyan table-head">

                                <th scope="col">İsim</th>
                                <th scope="col">Soyisim</th>
                                <th scope="col">Yaş</th>
                                <th scope="col">Notlar</th>
                                <th scope="col">Öneriler</th>
                                <th scope="col">Delete</th>

                            </tr>
                        </thead>

                        <tbody>
                            
                            <?php

                            // require('parameters.php');
                            foreach ($values as $key => $value) {
                                echo "<tr>
                                   
                                <td style='
                                color: black; font-size: 18px;
                               '>" . $value["name"] . "</td>
                                <td style='
                                color: black; font-size: 18px;
                                '>" . $value["surname"] . "</td>
                                <td style='
                                color: black; font-size: 18px;
                                '>" . $value["age"] . "</td>
                                <td style='
                                color: black; font-size: 18px;
                                '> " . $value["notlar"] . " </td>
                                <td style='
                                color: black; font-size: 18px;
                                '> <a class='nav-items' id ='" . $value['patient_id'] . "' href='./openForm.php/?patient_id=" . $value['patient_id'] . "&notlar=" . $value['notlar'] . "&uyaran=" . $value['uyaran'] . "&nemlilik=" . $value['nemlilik'] . "&aktivite=" . $value['aktivite'] . "&hareket=" . $value['hareket'] . "&beslenme=" . $value['beslenme'] . "&surtunme=" . $value['surtunme'] . "&fileid=" . $value['fileid'] . "' class='btn btn-success'>Detay</a> </td>
                                <td style='
                                color: black; font-size: 18px;
                                '> <button class='btn btn-success' id='delete-patient' value='" . $value['patient_id'] . "'>Delete</button> </td>
                            ";
                            }
                            
                            ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
   
        <script>
            console.log('hastalar-activated!!!!!!!!!')
            $('#delete-patient').click(function (e) { 
                e.preventDefault();
                let patient_id = $("#delete-patient").val();
                
            $.ajax({
                        type: 'POST',
                        url: 'deletePatient.php',
                        data: {
                            patient_id: patient_id,
                        },
                        success: function(data) {
                            alert(data);
                            $("#content").load('hastalar-student.php');
                        },
                        error: function(data) {
                            Swal.fire({
                                'title': 'Errors',
                                'text': 'There were errors',
                                'type': 'error'
                            })
                        }
                    })
            
        });
                

        $(window).on('load', function() {
            $("body").removeClass("preload");

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