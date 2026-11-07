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
                                    <li> <a href="<?= base_url() ?>">BERANDA</a>
                                    </li>
                                    <li> <a class="active" href="<?= base_url('profil/index') ?>">PROFIL</a>
                                        <ul>
                                            <li><a class="active" href="<?= base_url('profil/index') ?>">Visi dan Misi</a></li>
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
    <div class="section padding_layout_1" style="background-image:url('<?= base_url('assets/'); ?>yayasan.png');">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">

                    <div class="row">
                        <div class="full">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 adress_cont margin_bottom_30">
                                <h4></h4>
                                <p><br><br><br><br><br><br><br><br><br></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->

    <div class="section padding_layout_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="main_heading text_align_center">
                        <h2>YLPI AL WAHYU REWWIN</h2>
                        <p class="large">PROFIL</p>
                    </div>
                    <div class="row">
                        <div class="full">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 adress_cont margin_bottom_30">
                                <h4>LATAR BELAKANG</h4>
                                <p>Yayasan Lembaga Pendidikan Islam (YLPI) Al Hikmah merupakan merupakan lembaga dakwah berbasis pendidikan. Lebih dari seperempat abad, Al Hikmah telah mempresentasikan sistem sekolah sehari penuh sebagai terobosan pendidikan bagi Indonesia. Segala puji hanya untuk Allah SWT., hari ini, semua sekolah yang berada di bawah pengelolaan Yayasan Pendidikan Islam Al Hikmah (YLPIH) dari KB/TK hingga jenjnag SMA telah menjadi pilihan bagi orang tua dalam mengirim anak-anak mereka untuk belajar.</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 adress_cont margin_bottom_30_all">
                                <h4>Visi</h4>
                                <p>Menjadikan Sekolah Al Wahyu sebagai agen perubahan masyarakat ke arah kehidupan yang lebih baik sesuai dengan Al Qur’an dan Sunnah.</p>
                                <h4>Misi</h4>
                                <p>Menjadi lembaga pendidikan Islam yang layak dan mudah dicontoh.</p>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
                                <h2>Alamat</h2>
                            </div>
                            <p>Jl. Wedoro PP. Kav.Utara <br>
                                No 01 Rewwin Waru-Sidoarjo 61256<br>
                                <span style="font-size:18px;"><a href="tel:+9876543210">+62 85895642484</a></span>
                            </p>
                        </div>
                        <div class="col">
                            <div class="main-heading left_text">
                                <h2>Kotak Saran</h2>
                            </div>
                            <p>Bantu Kami menciptakan pendidikan yang berbudi <br>
                                dan berprestasi dengan mengisi Jawaban dari Quisioner dibawah ini.<br>
                            </p>

                            <div class="footer_mail-section">
                                <form>
                                    <fieldset>
                                        <div class="field"><a href="<?= base_url(); ?>">
                                                <button class="button_custom"><i class="fa fa-envelope" aria-hidden="true"></i></button></a>

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