<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Custom CSS -->
    <link href="<?= base_url("assets/css/style.css")?>" rel="stylesheet" type="text/css" />
    <script src="<?= base_url("assets/js/modernizr.min.js")?>"></script>
    <script src="<?= base_url("assets/js/jquery.min.js")?>"></script>
    <script src="<?= base_url("assets/js/moment.min.js")?>"></script>


    <!-- BEGIN CSS for this page -->
    <link href="<?= base_url("assets/plugins/datetimepicker/css/daterangepicker.css")?>" rel="stylesheet" />
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
                                <h1 class="main-title float-left">Add New Room</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item">Impatient Rooms</li>
                                    <li class="breadcrumb-item active">Add New Room</li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="card mb-3 ">
                                <div class="card-header">
                                    <h3><i class="fa fa-check-square-o"></i> Add New</h3>
                                </div>

                                <div class="card-body">

                                    <form autocomplete="off" action="<?= base_url("room/simpan")?>" method="post">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="rCat">Room Category</label>
                                                <select name="roomCategory" id="rCat" class="form-control">
                                                    <option value="">-- Select Category --</option>
                                                    <option value="ICU Room">ICU Room</option>
                                                    <option value="VIP Room">VIP Room</option>
                                                    <option value="VVIP Room">VVIP Room</option>
                                                </select>
                                                <?php echo form_error('roomCategory'); ?>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="No">Room No.</label>
                                                <input type="text" class="form-control" id="No" placeholder="Room No."
                                                    autocomplete="off" name="roomNo">
                                                    <?php echo form_error('roomNo'); ?>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label id="stat">Status</label>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="gridRadios"
                                                            id="gridRadios1" value="active" checked>
                                                        Active
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="gridRadios"
                                                            id="gridRadios1" value="Inactive">
                                                        Inactive
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Add</button>
                                        <a href="<?= base_url("room")?>" class="btn btn-danger">Cancel</a>
                                    </form>

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
    <script src="<?= base_url("assets/plugins/datetimepicker/js/moment.min.js")?>"></script>
    <script src="<?= base_url("assets/plugins/datetimepicker/js/daterangepicker.js")?>"></script>
    <!-- END Java Script for this page -->

</body>

</html>