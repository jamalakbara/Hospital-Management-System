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
                                <h1 class="main-title float-left">Add New Checkup</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item">Patient</li>
                                    <li class="breadcrumb-item">Detail Patient</li>
                                    <li class="breadcrumb-item active">Add New Checkup</li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3><i class="fa fa-check-square-o"></i> Add New</h3>
                                </div>

                                <div class="card-body">

                                    <form autocomplete="off" action="<?= base_url("patient/simpanCheck/".$id_pasien)?>" method="post">
                                        <div class="d-none"><input type="text" value="<?= $id_pasien?>" name="id_pasien"></div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="symp">Sysmptomps</label>
                                                <textarea name="symp" id="symp" class="form-control"></textarea>
                                                <?php echo form_error('symp'); ?>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="diag">Diagnosis</label>
                                                <textarea name="diag" id="diag" class="form-control"></textarea>
                                                <?php echo form_error('diag'); ?>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <label for="birth">Checkup Date</label>
                                                <input type="text" class="form-control" id="check" name="check" />
                                                <!-- <?php echo form_error('birth'); ?> -->
                                                <script>
                                                    $(function () {
                                                        $('input[name="check"]').daterangepicker({
                                                            singleDatePicker: true,
                                                            showDropdowns: true
                                                        });
                                                    });
                                                </script>
                                                <!-- <?php echo form_error('fName'); ?> -->
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6" id="tambah">
                                                <label for="med" id="lab">Medicine</label>
                                                <select id="med" class="form-control" name="med">
                                                    <option value="">-- Select Med --</option>
                                                    <?php foreach($obat as $ob){?>
                                                    <option value="<?= $ob["medicine_id"]?>"><?= $ob["medicine_name"]?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Add</button>
                                        <a href="<?= base_url("patient/detail/".$id_pasien)?>" class="btn btn-danger">Cancel</a>
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