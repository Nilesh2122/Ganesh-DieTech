<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/images/ganesh dietech logo 1.png">
    <title>Ganesh DieTech Admin</title>
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/colors/custom.css" id="theme" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/sweetalert.css" rel="stylesheet" type="text/css">
    <?php 
    $marginleft;
    $displaynone = '';
    $left;
    $pagewrappercolor;
    $topbar = '#DAA046';
    if($this->session->userdata('role') == '2')
    {
        $marginleft = '0px !important';
        $displaynone = 'd-none';
        $left = '0px !important';
        $pagewrappercolor = '#F7F5F2';
        $topbar = '#DAA046';
    }else{
        $topbar = '#243062';
    }
    ?>
    <style>
        .page-wrapper {
            margin-left:<?php echo $marginleft; ?>;
        }
        .footer{
            left:<?php echo $left; ?>;
        }
        .page-wrapper{
            background:<?php echo $pagewrappercolor; ?>;
        }
        .topbar{
            background : <?php echo $topbar; ?>
        }
        .topbar .top-navbar .navbar-header .navbar-brand b{
            color: #fff;
        }
    </style>
</head>

<body class="fix-header card-no-border">
    <input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <b>
                            Ganesh DieTech
                            <!-- <img src="<?php echo base_url(); ?>assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <img src="<?php echo base_url(); ?>assets/images/logo-light-icon.png" alt="homepage" class="light-logo" /> -->
                        </b>
                        <!-- <span>
                         <img src="<?php echo base_url(); ?>assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                         <img src="<?php echo base_url(); ?>assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span>  --></a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                       <!--  <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li> -->
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url(); ?>assets/images/users/1.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="<?php echo base_url(); ?>assets/images/users/1.jpg" alt="user"></div>
                                            <div class="u-text">
                                                <h4><?php echo $this->session->userdata['name']; ?></h4>
                                                <p class="text-muted"><?php echo $this->session->userdata['email']; ?></p></div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo base_url();?>Account/logout"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar <?php echo $displaynone; ?>">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <?php 
                        if($this->session->userdata['role'] == '1'){
                        ?>
                        <li>
                            <a class="waves-effect waves-dark" href="<?php echo base_url(); ?>designers" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Designers</span></a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="<?php echo base_url(); ?>clients" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Clients </span></a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="<?php echo base_url(); ?>quotations" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Quotation </span></a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="<?php echo base_url(); ?>customvalue" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Custom Value </span></a>
                        </li>
                        <?php } ?>
                    </ul>
                </nav>
            </div>
            <div class="sidebar-footer">
                <a href="<?php echo base_url();?>Account/logout" class="link" data-toggle="tooltip" title="Logout" style="width: 100%;"><i class="mdi mdi-power"></i></a>
            </div>
        </aside>
        <div class="page-wrapper">