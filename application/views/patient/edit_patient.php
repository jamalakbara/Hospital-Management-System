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
                                <h1 class="main-title float-left">Edit Patient</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item">Patient</li>
                                    <li class="breadcrumb-item active">Edit Patient</li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <?php 
                        if($this->session->flashdata('success')){
                            $this->load->view('alert_success');
                        }
                        if($this->session->flashdata('fail')){
                            $this->load->view('alert_fail');
                        }
                    ?>


                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3><i class="fa fa-check-square-o"></i> Edit</h3>
                                </div>

                                <div class="card-body">

                                    <form autocomplete="off" action="<?= base_url("patient/edit/".$patient[0]["id_pasien"])?>" method="post">
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="id">Patient ID</label>
                                                <input type="text" class="form-control" id="id" placeholder="" value="<?= $patient[0]["id_pasien"]?>"
                                                    autocomplete="off" readonly name="id">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="fName">First Name</label>
                                                <input type="text" class="form-control" id="fName"
                                                    placeholder="First Name" autocomplete="off" name="fName" value="<?= $patient[0]["first_name"]?>">
                                                <?php echo form_error('fName'); ?>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="lName">Last Name</label>
                                                <input type="text" class="form-control" id="lName"
                                                    placeholder="Last Name" autocomplete="off" name="lName" value="<?= $patient[0]["last_name"]?>">
                                                <?php echo form_error('lName'); ?>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="gender">Gender</label>
                                                <select id="gender" class="form-control" name="gender">
                                                    <?php
                                                        if($patient[0]["gender"] == 'Male'){?>
                                                            <option value="">-- Select Gender --</option>
                                                            <option selected value="Male">Male</option>
                                                            <option value="Female">Female</option>

                                                        <?php }else{?>
                                                            <option value="">-- Select Gender --</option>
                                                            <option value="Male">Male</option>
                                                            <option selected value="Female">Female</option>
                                                        <?php }?>
                                                    ?>
                                                </select>
                                                <?php echo form_error('gender'); ?>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="blood">Blood Group</label>
                                                <select id="blood" class="form-control" name="blood">
                                                    <option value="">-- Select Blood Group --</option>
                                                    <option value="A+" <?php if($patient[0]["blood_group"]=='A+'){echo 'selected';}?>>A+</option>
                                                    <option value="A-" <?php if($patient[0]["blood_group"]=='A-'){echo 'selected';}?>>A-</option>
                                                    <option value="B+" <?php if($patient[0]["blood_group"]=='B+'){echo 'selected';}?>>B+</option>
                                                    <option value="B-" <?php if($patient[0]["blood_group"]=='B-'){echo 'selected';}?>>B-</option>
                                                    <option value="AB+" <?php if($patient[0]["blood_group"]=='AB+'){echo 'selected';}?>>AB+</option>
                                                    <option value="AB-" <?php if($patient[0]["blood_group"]=='AB-'){echo 'selected';}?>>AB-</option>
                                                    <option value="O+" <?php if($patient[0]["blood_group"]=='O+'){echo 'selected';}?>>O+</option>
                                                    <option value="O-" <?php if($patient[0]["blood_group"]=='O-'){echo 'selected';}?>>O-</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="birth">Birth Date</label>
                                                <input type="text" class="form-control" id="birth" name="birth" value="<?= $patient[0]["birth_date"]?>"/>
                                                <?php echo form_error('birth'); ?>
                                                <script>
                                                    $(function () {
                                                        $('input[name="birth"]').daterangepicker({
                                                            singleDatePicker: true,
                                                            showDropdowns: true
                                                        });
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="phone">Phone</label>
                                                <input type="text" class="form-control" id="phone" placeholder="Phone"
                                                    autocomplete="off" name="phone" value="<?= $patient[0]["phone"]?>">
                                                <?php echo form_error('phone'); ?>
                                            </div>
                                            <div class="form-group col-md-8">
                                                <label for="addr">Address</label>
                                                <input type="text" class="form-control" id="addr" placeholder=""
                                                value="<?= $patient[0]["address"]?>" autocomplete="off" name="address" >
                                                <?php echo form_error('address'); ?>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                        <a href="<?= base_url("patient")?>" class="btn btn-danger">Cancel</a>
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