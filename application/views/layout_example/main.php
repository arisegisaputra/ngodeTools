<!DOCTYPE html>

<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Mamex Pro  <?=$title_atas?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('theme')?>/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('theme')?>/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('theme')?>/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <link href="<?= base_url('theme')?>/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?= base_url('theme')?>/assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('theme')?>/assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?= base_url('theme')?>/assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('theme')?>/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('theme')?>/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('theme')?>/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('theme')?>/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('theme')?>/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />

        <!-- <script src="<?= base_url('theme')?>/assets/global/plugins/jquery.min.js" type="text/javascript"></script> -->
        <script src="<?= base_url('theme')?>/assets/global/plugins/jquery1.min.js" type="text/javascript"></script>
        <link rel="icon" type="image/png" href="<?=base_url('theme/assets/img/')?>mamex.png">
        <!-- END THEME LAYOUT STYLES -->
        <!-- <link rel="shortcut icon" href="favicon.ico" />  -->
    </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-menu-fixed">
        <div class="page-wrapper">
            <div class="page-wrapper-row">
                <div class="page-wrapper-top">
                    <!-- BEGIN HEADER -->
                    <div class="page-header">
                        <!-- BEGIN HEADER TOP -->
                        <div class="page-header-top">
                            <div class="container">
                                <!-- BEGIN LOGO -->
                               <!--  <div class="page-logo">
                                    <a href="<?=base_url('')?>">
                                        <img src="<?= base_url('theme')?>/assets/img/footer-logo.png" alt="logo" class="logo-default">
                                    </a>
                                </div> -->
                                <!-- END LOGO -->
                                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                                <a href="javascript:;" class="menu-toggler"></a>
                                <!-- END RESPONSIVE MENU TOGGLER -->
                                <!-- BEGIN TOP NAVIGATION MENU -->
                                <div class="top-menu">
                                    <ul class="nav navbar-nav pull-right">
                                     
                                       
                                        <!-- END INBOX DROPDOWN -->
                                        <!-- BEGIN USER LOGIN DROPDOWN -->
                                        <li class="dropdown dropdown-user dropdown-dark">
                                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                <img alt="" class="img-circle" src="<?= base_url('theme')?>/assets/img/admin.png">
                                                <!-- <span class="username username-hide-mobile"><?=strtoupper($this->session->userdata('nama'))?></span> -->
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-default">
                                                <li>
                                                    <a href="<?=base_url('user/do_logout')?>">
                                                        <i class="icon-key"></i> Log Out </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- END USER LOGIN DROPDOWN -->
                                        <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                                        <!-- <li class="dropdown dropdown-extended quick-sidebar-toggler">
                                            <span class="sr-only">Toggle Quick Sidebar</span>
                                            <i class="icon-logout"></i>
                                        </li> -->
                                        <!-- END QUICK SIDEBAR TOGGLER -->
                                    </ul>
                                </div>
                                <!-- END TOP NAVIGATION MENU -->
                            </div>
                        </div>
                        <!-- END HEADER TOP -->
                        <!-- BEGIN HEADER MENU -->
                        <div class="page-header-menu">
                            <div class="container">
                               
                                <div class="hor-menu  ">
                                    <ul class="nav navbar-nav">
                                        <!-- <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown active"> -->
                                        <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
                                            <a href="javascript:;"> Master Data
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu pull-left">
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="<?=base_url('master_data');?>" class="nav-link ">
                                                        <i class="icon-user-follow"></i> Master Event
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown active">
                                            <a href="javascript:;"> Smart Event
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu pull-left">
                                                <li aria-haspopup="true" class=" active">
                                                    <a href="<?=base_url('buku_tamu');?>" class="nav-link  active">
                                                        <i class="icon-notebook"></i> Buku Tamu
                                                    </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="<?=base_url('doorprize');?>" class="nav-link  ">
                                                        <i class="icon-present"></i> Doorprize </a>
                                                </li>
                                               
                                            </ul>
                                        </li> -->
                                        <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
                                            <a href="javascript:;"> Report
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu pull-left">
                                                <li aria-haspopup="true" class="">
                                                    <a href="<?=base_url('event/report_buku_tamu');?>" class="nav-link  ">
                                                        <i class="icon-notebook"></i> Report Buku Tamu
                                                    </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="<?=base_url('report/doorprize');?>" class="nav-link  ">
                                                        <i class="icon-present"></i> Report Doorprize </a>
                                                </li>
                                               
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <!-- END MEGA MENU -->
                            </div>
                        </div>
                        <!-- END HEADER MENU -->
                    </div>
                    <!-- END HEADER -->
                </div>
            </div>
            <div class="page-wrapper-row full-height">
                <div class="page-wrapper-middle">
                    <!-- BEGIN CONTAINER -->
                    <div class="page-container">
                        <!-- BEGIN CONTENT -->
                        <div class="page-content-wrapper">
                            <!-- BEGIN CONTENT BODY -->
                            <!-- BEGIN PAGE HEAD-->
                            <div class="page-head">
                                <div class="container">
                                    <!-- BEGIN PAGE TITLE -->
                                    <div class="page-title">
                                        <h1><?= ucwords($breadcrumb)?>
                                            <small><?=$breadcrumb_atas?></small>
                                        </h1>
                                    </div>
                                    <!-- END PAGE TITLE -->
                                </div>
                            </div>
                            <!-- END PAGE HEAD-->
                            <!-- BEGIN PAGE CONTENT BODY -->
                            <div class="page-content">
                                <div class="container">
                                    <!-- BEGIN PAGE CONTENT INNER -->
                                    <?=$content?>
                                    <!-- END PAGE CONTENT INNER -->
                                </div>
                            </div>
                            <!-- END PAGE CONTENT BODY -->
                            <!-- END CONTENT BODY -->
                        </div>
                    </div>
                    <!-- END CONTAINER -->
                </div>
            </div>
            <!-- <div class="page-wrapper-row">
                <div class="page-wrapper-bottom">
                   
                    <div class="page-prefooter">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs12 footer-block">
                                    <img src="<?=base_url('theme')?>/assets/img/footer-logo.png?>">
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                    <h2>About</h2>
                                    <p> Mamex Production adalah sebuah perusahaan yang bergerak di bidang jasa Event Organizer. </p>
                                </div>
                                
                                <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                    <h2>Follow Us On</h2>
                                    <ul class="social-icons">
                                       
                                        <li>
                                            <a href="javascript:;" data-original-title="facebook" class="facebook"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="twitter" class="twitter"></a>
                                        </li>
                                       
                                    </ul>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                    <h2>Contacts</h2>
                                    <address class="margin-bottom-40"> Phone: (021) 29563131 | (0411) 870116
                                        <br> Email:
                                        <a href="mailto:mamexpro_eojkt@yahoo.co.id">mamexpro_eojkt@yahoo.co.id</a>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="page-footer">
                        <div class="container"> 2019 &copy; Mamexpro
                            
                        </div>
                    </div>
                    <div class="scroll-to-top">
                        <i class="icon-arrow-up"></i>
                    </div>
                  
                </div>
            </div> -->
        </div>
        <!-- BEGIN QUICK NAV -->
      
        
        
        <script src="<?= base_url('theme')?>/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
       
        <script src="<?= base_url('theme')?>/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <script src="<?= base_url('theme')?>/assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?= base_url('theme')?>/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="<?= base_url('theme')?>/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
         
        <script src="<?= base_url('theme')?>/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
       
        <script src="<?= base_url('theme')?>/assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
        <script src="<?= base_url('theme')?>/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="<?= base_url('theme')?>/assets/pages/scripts/components-select2.js" type="text/javascript"></script>
        
       
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            })
        </script>
    </body>

</html>