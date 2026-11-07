<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>YAYASAN</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icons -->
    <link rel="icon" href="<?= base_url('assets/'); ?>logo.png" type="image/gif" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?= base_url('assets/it/'); ?>css/bootstrap.min.css" />
    <!-- Site css -->
    <link rel="stylesheet" href="<?= base_url('assets/it/'); ?>css/style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="<?= base_url('assets/it/'); ?>css/responsive.css" />
    <!-- colors css -->
    <link rel="stylesheet" href="<?= base_url('assets/it/'); ?>css/colors1.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="<?= base_url('assets/it/'); ?>css/custom.css" />
    <!-- wow Animation css -->
    <link rel="stylesheet" href="<?= base_url('assets/it/'); ?>css/animate.css" />
    <!-- revolution slider css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/it/'); ?>revolution/css/settings.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/it/'); ?>revolution/css/layers.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/it/'); ?>revolution/css/navigation.css" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link href="<?= base_url('assets/it/'); ?>/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="<?= base_url('assets/it/'); ?>/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="<?= base_url('assets/it/'); ?>/your-path-to-fontawesome/css/solid.css" rel="stylesheet">

</head>

<body id="default_theme">

    <!-- header -->
    <header id="default_header" class="header_style_1">
        <!-- header top -->
        <div class="header_top">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="full">
                            <div class="topbar-left">
                                <ul class="list-inline">
                                    <li> <span class="topbar-label"><i class="fa  fa-home"></i></span> <span class="topbar-hightlight"><a href="">Yayasan</a> | <a href="">TK</a> | <a href="">SD</a></span> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 right_section_header_top">
                        <div class="full">
                            <ul class="list-inline">
                                <li> <span class="topbar-label"><i class="fa  fa-user"></i></span> <span class="topbar-hightlight"><a href="">Login</a> | </span><i class="fa  fa-telephone"></i></span><span class="topbar-hightlight">Hubungi Kami<a href="">+6285648693719(WA dan Phone)</a></span> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header top -->
        <!-- header bottom -->
        <div class="header_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <!-- logo start -->
                        <div class="logo"> <a href="it_home.html"><img src="<?= base_url('assets/'); ?>logo.png" alt="logo" /></a> </div>
                        <!-- logo end -->
                    </div>
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <!-- menu start -->
                        <div class="menu_side">
                            <div id="navbar_menu">
                                <ul class="first-ul">
                                    <li> <a class="active" href="<?= base_url() ?>">BERANDA</a>
                                    </li>
                                    <li> <a href="<?= base_url('profil/index') ?>">PROFIL</a>
                                        <ul>
                                            <li><a href="<?= base_url('profil/index') ?>">Visi dan Misi</a></li>
                                            <li><a href="<?= base_url('profil/pengurus') ?>">Pengurus Yayasan</a></li>
                                        </ul>
                                    </li>
                                    <li> <a href="<?= base_url('artikel/index') ?>">ARTIKEL</a>
                                        <!-- <ul>
                      <li><a href="it_service_list.html">Services list</a></li>
                      <li><a href="it_service_detail.html">Services Detail</a></li>
                    </ul> -->
                                    </li>
                                    <li> <a href="<?= base_url('pengumuman/index') ?>">PENGUMUMAN</a>
                                    </li>
                                    <li> <a href="<?= base_url('saran/index') ?>">KOTAK SARAN</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="search_icon">
                                <ul>
                                    <li><a href="#" data-toggle="modal" data-target="#search_bar"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- menu end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- header bottom end -->
    </header>
    <!-- end header -->
    <!-- section -->
    <div id="slider" class="section main_slider">
        <div class="container-fuild">
            <div class="row">
                <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                    <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
                    <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                        <ul>
                            <li data-index="rs-1812" data-transition="zoomin" data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="<?= base_url('assets/'); ?>yayasan.png" data-rotate="0" data-saveperformance="off" data-title="Computer Services" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="<?= base_url('assets/'); ?>yayasan.png" alt="#" data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                <!-- LAYER NR. BG -->
                                <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" id="slide-270-layer-1012" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="s:300;s:300;" data-start="750" data-basealign="slide" data-responsive_offset="on" data-responsive="off" style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.50);"> </div>
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" id="slide-18-layer-912" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']" data-width="500" data-height="140" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="2000" data-responsive_offset="on" style="z-index: 5;background-color:rgba(29, 29, 29, 0.85);border-color:rgba(0, 0, 0, 0.50);"> </div>
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" id="slide-18-layer-112" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['70','70','70','35']" data-lineheight="['70','70','70','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="z-index: 6; white-space: nowrap;">YLPI AL WAHYU</div>
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" id="slide-18-layer-412" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">YAYASAN LEMBAGA PENDIDIKAN ISLAM </div>
                            </li>
                            <li data-index="rs-181" data-transition="zoomin" data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="<?= base_url('assets/'); ?>TK.png" data-rotate="0" data-saveperformance="off" data-title="Easy To Use & Customize" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="<?= base_url('assets/'); ?>TK.png" alt="" data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                <!-- LAYER NR. BG -->
                                <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" id="slide-270-layer-101" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="s:300;s:300;" data-start="750" data-basealign="slide" data-responsive_offset="on" data-responsive="off" style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.50);"> </div>
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" id="slide-18-layer-91" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']" data-width="500" data-height="140" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="2000" data-responsive_offset="on" style="z-index: 5;background-color:rgba(29, 29, 29, 0.85);border-color:rgba(0, 0, 0, 0.50);"> </div>
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" id="slide-18-layer-11" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['70','70','70','35']" data-lineheight="['70','70','70','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="z-index: 6; white-space: nowrap;">TK INOVATIF AL WAHYU</div>
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" id="slide-18-layer-41" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">PG / KB / TK Inovatif Al wahyu</div>
                            </li>
                            <li data-index="rs-18" data-transition="zoomin" data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="<?= base_url('assets/'); ?>SD.png" data-rotate="0" data-saveperformance="off" data-title="Perfectly Responsive" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="<?= base_url('assets/'); ?>SD.png" alt="" data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                <!-- LAYER NR. BG -->
                                <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" id="slide-270-layer-10" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="s:300;s:300;" data-start="750" data-basealign="slide" data-responsive_offset="on" data-responsive="off" style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.50);"> </div>
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" id="slide-18-layer-9" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']" data-width="500" data-height="140" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="2000" data-responsive_offset="on" style="z-index: 5;background-color:rgba(29, 29, 29, 0.85);border-color:rgba(0, 0, 0, 0.50);"> </div>
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" id="slide-18-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['70','70','70','35']" data-lineheight="['70','70','70','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="z-index: 6; white-space: nowrap;">SD INOVATIF AL WAHYU</div>
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" id="slide-18-layer-41" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">SEKOLAH DASAR </div>
                            </li>
                        </ul>
                        <div class="tp-static-layers"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section padding_layout_1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="main_heading text_align_center">
                            <h2>YLPI AL WAHYU REWWIN</h2>
                            <p class="large">Kunjungi Website Kami</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="full text_align_center margin_bottom_30">
                        <div class="center">
                            <div class="icon"> <img src="<?= base_url('assets/it/'); ?>images/icons/jamaah.png" alt="#" /> </div>
                        </div>
                        <p>YLPI Al-Wahyu Rewin</p>
                        <div class="bt_cont"> <a class="btn sqaure_bt" href="it_service_detail.html">Yayasan</a> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="full text_align_center margin_bottom_30">
                        <div class="center">
                            <div class="icon"> <img src="<?= base_url('assets/it/'); ?>images/icons/takmir.png" alt="#" /> </div>
                        </div>
                        <p>TK AL-Wahyu Rewwin</p>
                        <div class="bt_cont"> <a class="btn sqaure_bt" href="it_service_detail.html">TK</a> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="full text_align_center margin_bottom_30">
                        <div class="center">
                            <div class="icon"> <img src="<?= base_url('assets/it/'); ?>images/icons/asatidz.png" alt="#" /> </div>
                        </div>
                        <p>SD Inovativ AL-Wahyu Rewwin</p>
                        <div class="bt_cont"> <a class="btn sqaure_bt" href="it_service_detail.html">SD</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- Modal -->
    <div class="modal fade" id="search_bar" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
                            <div class="navbar-search">
                                <form action="#" method="get" id="search-global-form" class="search-global">
                                    <input type="text" placeholder="Type to search" autocomplete="off" name="s" id="search" value="" class="search-global__input">
                                    <button class="search-global__btn"><i class="fa fa-search"></i></button>
                                    <div class="search-global__note">Begin typing your search above and press return to search.</div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Model search bar -->

    <!-- section -->
    <div class="section padding_layout_1 light right_gross_layout" style="background-image:url('<?= base_url('assets/it/'); ?>images/it_service/test_bg4.png');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="main_heading text_align_right">
                            <h2>Data Statistik</h2>
                            <p class="large">Ketahui jumlah pengguna dan objek.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row counter">
                <div class="col-md-4"> </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 margin_bottom_50">
                            <div class="text_align_right"><i class="fa fa-users"></i></div>
                            <div class="text_align_right">
                                <p class="counter-heading text_align_right">Guru</p>
                            </div>
                            <h5 class="counter-count">15</h5>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 margin_bottom_50">
                            <div class="text_align_right"><i class="fa fa-users-cog"></i></div>
                            <div class="text_align_right">
                                <p class="counter-heading text_align_right">Pegawai</p>
                            </div>
                            <h5 class="counter-count">3</h5>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 margin_bottom_50">
                            <div class="text_align_right"><i class="fa fa-user-tie"></i></div>
                            <div class="text_align_right">
                                <p class="counter-heading">Siswa TK</p>
                            </div>
                            <h5 class="counter-count">18</h5>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 margin_bottom_50">
                            <div class="text_align_right"><i class="fa fa-mosque"></i></div>
                            <div class="text_align_right">
                                <p class="counter-heading">Siswa SD</p>
                            </div>
                            <h5 class="counter-count">65</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->


    <!-- footer -->
    <footer class="footer_style_2">
        <div class="container">
            <div class="row">
                <div class="footer_blog">
                    <div class="row">
                        <div class="col">
                            <div class="main-heading left_text">
                                <h2>Tentang Kami</h2>
                            </div>
                            <p>Yayasan Lembaga Pendidikan Islam (YLPI) Al WAHYU <br>
                                merupakan merupakan lembaga dakwah berbasis pendidikan. </p>
                        </div>
                        <div class="col">
                            <div class="main-heading left_text">
                                <h2>Media Sosial</h2>
                            </div>
                            <p class="large">
                                <i class="fab fa-whatsapp" aria-hidden="true"></i>&nbsp; &nbsp;
                                <i class="fab fa-youtube" aria-hidden="true"></i>&nbsp; &nbsp;
                                <i class="fab fa-instagram" aria-hidden="true"></i>&nbsp; &nbsp;
                                <i class="fab fa-facebook" aria-hidden="true"></i>
                            </p>
                        </div>
                        <div class="col">
                            <div class="main-heading left_text">
                                <h2>Kontak Kami</h2>
                            </div>
                            <p>Jl. Wedoro PP. Kav.Utara <br>
                                No 01 Rewwin Waru-Sidoarjo 61256<br>
                                <span style="font-size:18px;"><a href="tel:+9876543210">+62 85895642484</a></span>
                            </p>
                            <div class="footer_mail-section">
                                <form>
                                    <fieldset>
                                        <div class="field">
                                            <input placeholder="Email" type="text">
                                            <button class="button_custom"><i class="fa fa-envelope" aria-hidden="true"></i></button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cprt">
                    <p>KP PENS © Copyrights 2021 Design by 2103187024</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- js section -->
    <script src="<?= base_url('assets/it/'); ?>js/jquery.min.js"></script>
    <script src="<?= base_url('assets/it/'); ?>js/bootstrap.min.js"></script>
    <!-- menu js -->
    <script src="<?= base_url('assets/it/'); ?>js/menumaker.js"></script>
    <!-- wow animation -->
    <script src="<?= base_url('assets/it/'); ?>js/wow.js"></script>
    <!-- custom js -->
    <script src="<?= base_url('assets/it/'); ?>js/custom.js"></script>
    <!-- revolution js files -->
    <script src="<?= base_url('assets/it/'); ?>revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?= base_url('assets/it/'); ?>revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?= base_url('assets/it/'); ?>revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="<?= base_url('assets/it/'); ?>revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="<?= base_url('assets/it/'); ?>revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="<?= base_url('assets/it/'); ?>revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="<?= base_url('assets/it/'); ?>revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="<?= base_url('assets/it/'); ?>revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="<?= base_url('assets/it/'); ?>revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="<?= base_url('assets/it/'); ?>revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="<?= base_url('assets/it/'); ?>revolution/js/extensions/revolution.extension.video.min.js"></script>
    <!-- map js -->
    <script>
        // This example adds a marker to indicate the position of Bondi Beach in Sydney,
        // Australia.
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: {
                    lat: 40.645037,
                    lng: -73.880224
                },
                styles: [{
                        elementType: 'geometry',
                        stylers: [{
                            color: '#fefefe'
                        }]
                    },
                    {
                        elementType: 'labels.icon',
                        stylers: [{
                            visibility: 'off'
                        }]
                    },
                    {
                        elementType: 'labels.text.fill',
                        stylers: [{
                            color: '#616161'
                        }]
                    },
                    {
                        elementType: 'labels.text.stroke',
                        stylers: [{
                            color: '#f5f5f5'
                        }]
                    },
                    {
                        featureType: 'administrative.land_parcel',
                        elementType: 'labels.text.fill',
                        stylers: [{
                            color: '#bdbdbd'
                        }]
                    },
                    {
                        featureType: 'poi',
                        elementType: 'geometry',
                        stylers: [{
                            color: '#eeeeee'
                        }]
                    },
                    {
                        featureType: 'poi',
                        elementType: 'labels.text.fill',
                        stylers: [{
                            color: '#757575'
                        }]
                    },
                    {
                        featureType: 'poi.park',
                        elementType: 'geometry',
                        stylers: [{
                            color: '#e5e5e5'
                        }]
                    },
                    {
                        featureType: 'poi.park',
                        elementType: 'labels.text.fill',
                        stylers: [{
                            color: '#9e9e9e'
                        }]
                    },
                    {
                        featureType: 'road',
                        elementType: 'geometry',
                        stylers: [{
                            color: '#eee'
                        }]
                    },
                    {
                        featureType: 'road.arterial',
                        elementType: 'labels.text.fill',
                        stylers: [{
                            color: '#3d3523'
                        }]
                    },
                    {
                        featureType: 'road.highway',
                        elementType: 'geometry',
                        stylers: [{
                            color: '#eee'
                        }]
                    },
                    {
                        featureType: 'road.highway',
                        elementType: 'labels.text.fill',
                        stylers: [{
                            color: '#616161'
                        }]
                    },
                    {
                        featureType: 'road.local',
                        elementType: 'labels.text.fill',
                        stylers: [{
                            color: '#9e9e9e'
                        }]
                    },
                    {
                        featureType: 'transit.line',
                        elementType: 'geometry',
                        stylers: [{
                            color: '#e5e5e5'
                        }]
                    },
                    {
                        featureType: 'transit.station',
                        elementType: 'geometry',
                        stylers: [{
                            color: '#000'
                        }]
                    },
                    {
                        featureType: 'water',
                        elementType: 'geometry',
                        stylers: [{
                            color: '#c8d7d4'
                        }]
                    },
                    {
                        featureType: 'water',
                        elementType: 'labels.text.fill',
                        stylers: [{
                            color: '#b1a481'
                        }]
                    }
                ]
            });

            var image = 'images/it_service/location_icon_map_cont.png';
            var beachMarker = new google.maps.Marker({
                position: {
                    lat: 40.645037,
                    lng: -73.880224
                },
                map: map,
                icon: image
            });
        }
    </script>
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
    <!-- end google map js -->
</body>

</html>