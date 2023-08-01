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
    if($this->session->userdata('role') == '2')
    {
        $marginleft = '0px !important';
        $displaynone = 'd-none';
        $left = '0px !important';
        $pagewrappercolor = '#F7F5F2';
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
        .sidebar-nav > ul > li.active > a, .sidebar-nav > ul > li.active:hover > a{
            background : #243062 !important;
        }
        .sidebar-nav ul li a:hover{
            color: #243062;
        }
        .text-themecolor{
            color: #243062 !important;
        }
        .topbar .top-navbar .navbar-header .navbar-brand b{
            color: #fff;
        }
        .sidebar-nav ul li a svg{
            width: 12%;
            margin-right:10px;
            vertical-align: text-bottom;
        }
        .sidebar-nav > ul > li.active > a > svg > path{
            fill:#fff;
        }
        .sidebar-nav ul li a svg path{
            fill: #243062;
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
                    <a class="navbar-brand">
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
                                    <li><a href="<?php echo base_url();?>Account/profile/<?php echo $this->session->userdata['user_id']; ?>"><i class="ti-user"></i> My Profile</a></li>
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
                            <a class="waves-effect waves-dark" href="<?php echo base_url(); ?>designers" aria-expanded="false">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 22H18V20C18 18.3431 16.6569 17 15 17H9C7.34315 17 6 18.3431 6 20V22H4V20C4 17.2386 6.23858 15 9 15H15C17.7614 15 20 17.2386 20 20V22ZM12 13C8.68629 13 6 10.3137 6 7C6 3.68629 8.68629 1 12 1C15.3137 1 18 3.68629 18 7C18 10.3137 15.3137 13 12 13ZM12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" fill="white"/>
                            </svg>
                            <span class="hide-menu">Designers</span></a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="<?php echo base_url(); ?>clients" aria-expanded="false">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 19H23V21H1V19H3V4C3 3.44772 3.44772 3 4 3H14C14.5523 3 15 3.44772 15 4V19H19V11H17V9H20C20.5523 9 21 9.44772 21 10V19ZM5 5V19H13V5H5ZM7 11H11V13H7V11ZM7 7H11V9H7V7Z" fill="white"/>
                            </svg>
                            <span class="hide-menu">Clients </span></a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="<?php echo base_url(); ?>quotations" aria-expanded="false">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 3C15.5523 3 16 3.44772 16 4V6H21C21.5523 6 22 6.44772 22 7V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V7C2 6.44772 2.44772 6 3 6H8V4C8 3.44772 8.44772 3 9 3H15ZM16 8H8V19H16V8ZM4 8V19H6V8H4ZM14 5H10V6H14V5ZM18 8V19H20V8H18Z" fill="white"/>
                            </svg>
                            <span class="hide-menu">Quotation </span></a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="<?php echo base_url(); ?>customvalue" aria-expanded="false">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.32894 3.27158C6.56203 2.8332 7.99181 3.10749 8.97878 4.09446C9.96603 5.08171 10.2402 6.51202 9.80129 7.74535L20.646 18.5902L18.5247 20.7115L7.67887 9.86709C6.44578 10.3055 5.016 10.0312 4.02903 9.04421C3.04178 8.05696 2.76761 6.62665 3.20652 5.39332L5.44325 7.63C6.02903 8.21578 6.97878 8.21578 7.56457 7.63C8.15035 7.04421 8.15035 6.09446 7.56457 5.50868L5.32894 3.27158ZM15.6963 5.15512L18.8783 3.38736L20.2925 4.80157L18.5247 7.98355L16.757 8.3371L14.6356 10.4584L13.2214 9.04421L15.3427 6.92289L15.6963 5.15512ZM8.62523 12.9333L10.7465 15.0546L5.7968 20.0044C5.21101 20.5902 4.26127 20.5902 3.67548 20.0044C3.12415 19.453 3.09172 18.5793 3.57819 17.99L3.67548 17.883L8.62523 12.9333Z" fill="white"/>
                            </svg>
                            <span class="hide-menu">Custom Value </span></a>
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