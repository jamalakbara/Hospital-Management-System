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
                                <h1 class="main-title float-left">Payment Categories</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item">Partner Company</li>
                                    <li class="breadcrumb-item active">Payment Categories</li>
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
                                    <a href="<?= base_url("partner/addnewpayment")?>" class="btn btn-primary btn-sm" role="button"><i
                                            class="fa fa-fw fa fa-plus"></i>
                                        Add New</a>
                                </div>

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example1" class="table table-bordered table-hover display">
                                            <thead>
                                                <tr>
                                                    <th>Payment Category</th>
                                                    <th>Status</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($payment as $data){?>
                                                <tr>
                                                    <td><?= $data["payment_category"]?></td>
                                                    <?php if($data["status"] == "active"){
                                                        echo '<td class="text-center"><a href=""><i class="fa fa-check"></i></a></td>';
                                                    }else{
                                                        echo '<td class="text-center"><a href=""><i class="fa fa-ban"></i></a></td>';
                                                    }?>
                                                    
                                                    <td class="text-center"><a href="<?= base_url("partner/editpayment/".$data["id_payment"])?>"><i class="fa fa-edit"></i></a>
                                                    </td>
                                                    <td class="text-center"><a href="<?= base_url("partner/deletepayment/".$data["id_payment"])?>"><i class="fa fa-trash-o"></i></a>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
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