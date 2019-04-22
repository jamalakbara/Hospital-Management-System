<!DOCTYPE html>
<html lang="en">

<body class="adminbody">
    <!-- Left Sidebar -->
    <div class="left main-sidebar">

        <div class="sidebar-inner leftscroll">

            <div id="sidebar-menu">
                <div class="d-none" id="title"><?= $title?></div>
                
                <ul>
                    <li class="submenu">
                        <a href="<?= base_url("home")?>" id="home"><i class="fa fa-fw fa-home"></i><span> Site Map
                            </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a href="<?= base_url("dashboard")?>" id="dashboard"><i class="fa fa-fw fa-bars"></i><span>
                                Dashboard </span> </a>
                    </li>

                    <li class="submenu">
                        <a href="<?= base_url("patient")?>" id="patient"><i class="fa fa-wheelchair-alt"></i><span> Patient
                            </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a href="<?= base_url("partner")?>" id="partner"><i class="fa fa-group"></i><span> Partner Company
                            </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a href="<?= base_url("room")?>" id="room"><i class="fa fa-hospital-o"></i><span> Impatient Rooms
                            </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a href="<?= base_url("medicine")?>" id="med"><i class="fa fa-medkit"></i><span> Medicines
                            </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a href="<?= base_url("accountant")?>" id="accountant"><i class="fa fa-dollar"></i><span> Accountants
                            </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a href="<?= base_url("profile")?>" id="profile"><i class="fa fa-edit"></i><span> Edit Profile
                            </span>
                        </a>
                    </li>
                </ul>

                <div class="clearfix"></div>

            </div>

            <div class="clearfix"></div>

        </div>

    </div>
    <!-- End Sidebar -->

    <script src="<?= base_url("assets/js/side-bar.js")?>"></script>
</body>

</html>