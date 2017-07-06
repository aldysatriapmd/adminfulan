<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Buku Besar</title>
    <link href="<?=base_url()?>sets/inspinia/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>sets/inspinia/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?=base_url()?>sets/inspinia/css/animate.css" rel="stylesheet">
    <link href="<?=base_url()?>sets/inspinia/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>sets/inspinia/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <script src="<?=base_url()?>sets/inspinia/js/jquery-2.1.1.js"></script>
    <script src="<?=base_url()?>sets/inspinia/js/plugins/sweetalert/sweetalert.min.js"></script>

</head>

<body >
    <div id="wrapper">

    <!-- Header start -->
    <nav class="navbar-default navbar-static-side" role="navigation" style="position: fixed;">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" width="100px;" src="<?=base_url()?>gambar/user/<?=$this->session->userdata('foto')?>" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?=$this->session->userdata('nama')?></strong>
                             </span> <span class="text-muted text-xs block">Pegawai <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="<?=base_url('dashboard/profil')?>">Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="<?=base_url('akses/keluar')?>">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        ABC
                    </div>
                </li>
                <?php $uri=$this->uri->segment(2);?>
                <li <?php if($uri=='')echo "class='active'";?>>
                    <a href="<?=base_url('dashboard/')?>"><i class="fa fa-area-chart"></i> <span class="nav-label">Beranda</span></a>
                </li>
                <li <?php if($uri=='peminjaman')echo "class='active'";?>>
                    <a href="<?=base_url('dashboard/peminjaman')?>"><i class="fa fa-book"></i> <span class="nav-label">Peminjaman</span></a>
                </li>
                <li <?php if($uri=='keterlambatan')echo "class='active'";?>>
                    <a href="<?=base_url('dashboard/keterlambatan')?>"><i class="fa fa-th-large"></i> <span class="nav-label">Keterlambatan</span></a>
                </li>
                <li <?php if($uri=='daftar-buku')echo "class='active'";?>>
                    <a href="<?=base_url('dashboard/daftar-buku')?>"><i class="fa fa-th-large"></i> <span class="nav-label">Daftar Buku</span></a>
                </li>
                <li <?php if($uri=='keanggotaan')echo "class='active'";?>>
                    <a href="<?=base_url('dashboard/keanggotaan')?>"><i class="fa fa-users"></i> <span class="nav-label">Keanggotaan</span></a>
                </li>
                <li <?php if($uri=='sejarah-peminjaman')echo "class='active'";?>>
                    <a href="<?=base_url('dashboard/sejarah-peminjaman')?>"><i class="fa fa-book"></i> <span class="nav-label">Sejarah Peminjaman</span></a>
                </li>
                <li <?php if($uri=='user')echo "class='active'";?>>
                    <a href="<?=base_url('dashboard/user')?>"><i class="fa fa-user"></i> <span class="nav-label">Users</span></a>
                </li>
                <li <?php if($uri=='laporan')echo "class='active'";?>>
                    <a href="<?=base_url('dashboard/laporan')?>"><i class="fa fa-user"></i> <span class="nav-label">Laporan</span></a>
                </li>

            </ul>
        </div>
    </nav>
        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Aplikasi Perpustakaan</span>
                </li>
                <li>
                    <a href="<?=base_url('akses/keluar')?>">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>
        </nav>
        </div>
        <!-- header end -->