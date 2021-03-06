<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>SIG PDAM - Admin</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="<?php echo base_url();?>assets/uploads/favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url();?>assets/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/jquery/jquery.min.js"></script>

    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">

            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <?php $this->load->view('navigasi/nav') ?>
            </div>
            <!-- END PAGE SIDEBAR -->

            <!-- PAGE CONTENT -->
            <div class="page-content">
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!---->
                    <li class="xn-openable-b pull-right">
                        <a href="#">
                            <span class="xn-text">
                                <?php echo $this->session->userdata("nama_lengkap");?>
                            </span>
                            <span class="fa fa-sign-out"></span>
                        </a>
                            <ul>
                                <li><a href="#"><span class="fa fa-file"></span> Profil</a></li>
                                <li><a href="<?php echo base_url();?>login/logout">
                                    <span class="fa fa-file"></span> Logout</a>
                                </li>
                            </ul>
                    </li>
                    <!---->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->

                <!-- PAGE CONTENT WRAPPER -->
                <?php $this->load->view($konten) ;?>
                <!-- END PAGE CONTENT WRAPPER -->
            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->



    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/bootstrap/bootstrap.min.js"></script>
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->
        <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/scrolltotop/scrolltopcontrol.js"></script>

        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/morris/morris.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/owl/owl.carousel.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- END THIS PAGE PLUGINS-->
        <!-- DATATABLES -->
        <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/datatables/jquery.dataTables.min.js"></script>

        <!-- START TEMPLATE -->

        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/actions.js"></script>
        <script>

          function hapus() {

            var conf=confirm("Apakah data ini ingin dihapus ?");

              if (conf==true) {
                return true;
              } else {
                return false;
              }

          }
        </script>
        <?php echo $this->session->flashdata("pesan"); ?>


        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
    </body>
</html>
