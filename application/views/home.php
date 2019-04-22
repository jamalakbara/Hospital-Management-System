<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Custom CSS -->
    <link href="<?= base_url("assets/css/style.css")?>" rel="stylesheet" type="text/css" />

    <!-- BEGIN CSS for this page -->
    
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
                                <h1 class="main-title float-left">Site Map</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item active">Site Map</li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <a href="<?= base_url("dashboard")?>" class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-default">

                                <h6 class="text-white text-uppercase m-b-20">Dashboard</h6>
                            </div>
                        </a>

                        <a href="<?= base_url("patient")?>" class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-warning">

                                <h6 class="text-white text-uppercase m-b-20">Patient</h6>
                            </div>
                        </a>

                        <a href="<?= base_url("partner")?>" class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-info">

                                <h6 class="text-white text-uppercase m-b-20">Partner Company</h6>
                            </div>
                        </a>

                        <a href="<?= base_url("room")?>" class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-success">

                                <h6 class="text-white text-uppercase m-b-20">Impatient Rooms</h6>
                            </div>
                        </a>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <a href="<?= base_url("accountant")?>" class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-secondary">

                                <h6 class="text-white text-uppercase m-b-20">Accountants</h6>
                            </div>
                        </a>

                        <a href="<?= base_url("profile")?>" class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-danger">

                                <h6 class="text-white text-uppercase m-b-20">Edit Profile</h6>
                            </div>
                        </a>
                    </div>
                    <!-- end row -->
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

    <!-- App js -->
    <script src="<?= base_url("assets/js/pikeadmin.js")?>"></script>

    <!-- BEGIN Java Script for this page -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

    <!-- Counter-Up-->
    <script src="<?= base_url("assets/plugins/waypoints/lib/jquery.waypoints.min.js")?>"></script>
    <script src="<?= base_url("assets/plugins/counterup/jquery.counterup.min.js")?>"></script>
    <!-- END Java Script for this page -->

</body>

</html>