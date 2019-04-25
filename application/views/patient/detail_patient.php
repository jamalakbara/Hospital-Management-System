<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Custom CSS -->
    <link href="<?= base_url("assets/css/style.css")?>" rel="stylesheet" type="text/css" />

    <!-- BEGIN CSS for this page -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" />
    <link href="<?= base_url("assets/css/style.css")?>" rel="stylesheet" type="text/css" />		
    <!-- END CSS for this page -->

</head>

<body class="adminbody">
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-holder">
                                <h1 class="main-title float-left">Patient</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item">Patient</li>
                                    <li class="breadcrumb-item active">Detail Patient</li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="card mb-3">
                                <div class="card-header d-flex flex-column justify-content-center align-items-center">
                                    <img src="<?= base_url("assets/images/avatars/avatar1.png")?>" alt="">
                                    <h3><?= $pasien[0]["first_name"]." ".$pasien[0]["last_name"]?></h3>
                                </div>
                                
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table display">
                                            <tbody>
                                                <tr>
                                                    <td>Patient ID</td>
                                                    <td><?= $pasien[0]["id_pasien"]?></td>
                                                </tr>
                                                <tr>
                                                    <td>Gender</td>
                                                    <td><?= $pasien[0]["gender"]?></td>
                                                </tr>
                                                <tr>
                                                    <td>Blood Group</td>
                                                    <td><?= $pasien[0]["blood_group"]?></td>
                                                </tr>
                                                <tr>
                                                    <td>Birth Date</td>
                                                    <td><?= $pasien[0]["birth_date"]?></td>
                                                </tr>
                                                <tr>
                                                    <td>Phone</td>
                                                    <td><?= $pasien[0]["phone"]?></td>
                                                </tr>
                                                <tr>
                                                    <td>Address</td>
                                                    <td><?= $pasien[0]["address"]?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div><!-- end card-->
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                            <div class="card mb-3">
                                <div class="card-header d-flex flex-row justify-content-between align-items-center">
                                    <h3>Checkup History</h3>
                                    <a href="<?= base_url("patient/addcheckup/".$pasien[0]["id_pasien"])?>" class="btn btn-primary btn-sm" role="button"><i
                                            class="fa fa-fw fa fa-plus"></i>
                                        Add New Checkup</a>
                                </div>
                                
                                <div class="card-body">
                                        <?php foreach($checkup as $data){?>
                                        <div class="card mb-3">
                                            <div class="card-header">
                                                <h3>Symptoms</h3>
                                                <hr>
                                                <span><?= $data["symptom"]?></span>
                                            </div>
                                            <div class="card-header">
                                                <h3>Diagnosis</h3>
                                                <hr>
                                                <span><?= $data["diagnosis"]?></span>
                                            </div>
                                            <div class="card-header">
                                                <h3>Prescription</h3>
                                                <hr>
                                                <div class="table-responsive">
                                                    <table class="table display">
                                                        <tbody>
                                                            <tr>
                                                                <td>Medicine ID</td>
                                                                <td><?= $data["medicine_id"]?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Medicine Category</td>
                                                                <td><?= $data["medicine_category"]?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Medicine Name</td>
                                                                <td><?= $data["medicine_name"]?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>

                                </div>
                            </div><!-- end card-->
                        </div>
                    </div>
                </div>
                <!-- END container-fluid -->

            </div>
            <!-- END content -->

        </div>
        <!-- END content-page -->
        
    <script src="<?= base_url("assets/js/modernizr.min.js")?>"></script>
    <script src="<?= base_url("assets/js/jquery.min.js")?>"></script>
    <script src="<?= base_url("assets/js/moment.min.js")?>"></script>

    <script src="<?= base_url("assets/js/popper.min.js")?>"></script>
    <script src="<?= base_url("assets/js/bootstrap.min.js")?>"></script>

    <script src="<?= base_url("assets/js/detect.js")?>"></script>
    <script src="<?= base_url("assets/js/fastclick.js")?>"></script>
    <script src="<?= base_url("assets/js/jquery.blockUI.js")?>"></script>
    <script src="<?= base_url("assets/js/jquery.nicescroll.js")?>"></script>
    <script src="<?= base_url("assets/js/jquery.scrollTo.min.js")?>"></script>
    <script src="<?= base_url("assets/plugins/switchery/switchery.min.js")?>"></script>

    <!-- App js -->
    <script src="<?= base_url("assets/js/pikeadmin.js")?>"></script>

    <!-- BEGIN Java Script for this page -->
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

    <script>
        // START CODE FOR BASIC DATA TABLE 
        $(document).ready(function () {
            $('#example1').DataTable();
        });
	// END CODE FOR BASIC DATA TABLE
    </script>
    <!-- END Java Script for this page -->

</body>

</html>