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
                                <h1 class="main-title float-left">Edit Medicine</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item">Medicines</li>
                                    <li class="breadcrumb-item active">Edit Medicines</li>
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
                                    <h3><i class="fa fa-check-square-o"></i> Edit</h3>
                                </div>

                                <div class="card-body">

                                    <form autocomplete="off" action="<?= base_url("medicine/edit/".$medicine[0]["medicine_id"])?>" method="post">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="rCat">Medicines Category</label>
                                                <select name="medCategory" id="rCat" class="form-control">
                                                    <option value="">-- Select Category --</option>
                                                    <option <?php if($medicine[0]["medicine_category"] == "Severe Pain"):?>selected<?php endif?> value="Severe Pain">Severe Pain</option>
                                                    <option <?php if($medicine[0]["medicine_category"] == "Anxiety"):?>selected<?php endif?> value="Anxiety">Anxiety</option>
                                                    <option <?php if($medicine[0]["medicine_category"] == "ColdS"):?>selected<?php endif?> value="ColdS">ColdS</option>
                                                    <option <?php if($medicine[0]["medicine_category"] == "Depression"):?>selected<?php endif?> value="Depression">Depression</option>
                                                    <option <?php if($medicine[0]["medicine_category"] == "ENTS"):?>selected<?php endif?> value="ENTS">ENTS</option>
                                                    <option <?php if($medicine[0]["medicine_category"] == "Fever"):?>selected<?php endif?> value="Fever">Fever</option>
                                                    <option <?php if($medicine[0]["medicine_category"] == "High BP"):?>selected<?php endif?> value="High BP">High BP</option>
                                                    <option <?php if($medicine[0]["medicine_category"] == "Infection"):?>selected<?php endif?> value="Infection">Infection</option>
                                                    <option <?php if($medicine[0]["medicine_category"] == "Nerve Pain"):?>selected<?php endif?> value="Nerve Pain">Nerve Pain</option>
                                                    <option <?php if($medicine[0]["medicine_category"] == "Type 2 Diabeties"):?>selected<?php endif?> value="Type 2 Diabeties">Type 2 Diabeties</option>
                                                </select>
                                                <?php echo form_error('medCategory'); ?>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="medName">Medicine Name</label>
                                                <input type="text" class="form-control" id="medName" placeholder="Medicine Name"
                                                    autocomplete="off" name="medName" value="<?= $medicine[0]["medicine_name"]?>">
                                                <?php echo form_error('medName'); ?>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label id="stat">Status</label>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="gridRadios"
                                                            id="gridRadios1" <?php if($medicine[0]["status"] == "active"):?>selected<?php endif?> value="active" checked>
                                                        Active
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="gridRadios"
                                                            id="gridRadios1" <?php if($medicine[0]["status"] == "inactive"):?>selected<?php endif?> value="inactive">
                                                        Inactive
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                        <a href="<?= base_url("medicine")?>" class="btn btn-danger">Cancel</a>
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