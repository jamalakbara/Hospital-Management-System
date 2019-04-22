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
  <style>
    .parsley-error {
      border-color: #ff5d48 !important;
    }

    .parsley-errors-list.filled {
      display: block;
    }

    .parsley-errors-list {
      display: none;
      margin: 0;
      padding: 0;
    }

    .parsley-errors-list>li {
      font-size: 12px;
      list-style: none;
      color: #ff5d48;
      margin-top: 5px;
    }

    .form-section {
      padding-left: 15px;
      border-left: 2px solid #FF851B;
      display: none;
    }

    .form-section.current {
      display: inherit;
    }
  </style>
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
                <h1 class="main-title float-left">Edit Profile</h1>
                <ol class="breadcrumb float-right">
                  <li class="breadcrumb-item">Home</li>
                  <li class="breadcrumb-item active">Edit Profile</li>
                </ol>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <!-- end row -->


          <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
              <div class="card mb-3">

                <div class="card-body">

                  <form action="#" data-parsley-validate novalidate>
                    <div class="form-group">
                      <label for="fName">First Name<span class="text-danger">*</span></label>
                      <input type="text" name="fName" data-parsley-trigger="change" required class="form-control"
                        id="fName" value="Yosua">
                    </div>
                    <div class="form-group">
                      <label for="lName">Last Name<span class="text-danger">*</span></label>
                      <input type="text" name="lName" data-parsley-trigger="change" required class="form-control"
                        id="lName" value="Andrew">
                    </div>
                    <div class="form-group">
                      <label for="emailAddress">Email<span class="text-danger">*</span></label>
                      <input type="email" name="email" data-parsley-trigger="change" required class="form-control"
                        id="emailAddress" value="a@a.com">
                    </div>
                    <div class="form-group">
                      <label for="pass1">Password<span class="text-danger">*</span></label>
                      <input id="pass1" type="password" placeholder="Password" required class="form-control">
                    </div>

                    <div class="form-group text-right m-b-0">
                      <button class="btn btn-primary" type="submit">
                        Edit
                      </button>
                    </div>

                  </form>

                </div>
              </div><!-- end card-->
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
              <div class="card mb-3">
                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                  <img src="<?= base_url("")?>assets/images/avatars/admin.jpg" alt="">
                  <h3>Yosua Andrew</h3>
                  <h5 class="text-secondary">Admin</h5>
                </div>
              </div>
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
  <script src="<?= base_url("assets/plugins/parsleyjs/parsley.min.js")?>"></script>
  <script>
    $('#form').parsley();
  </script>
  <!-- END Java Script for this page -->

</body>

</html>