<div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <ol class="breadcrumb" style="padding-top: 5px">
                    <li>
                        <a href="<?=base_url('dashboard')?>">Beranda</a>
                    </li>
                    <li class="active">
                        <strong>Laporan</strong>
                    </li>
                </ol>
            </div>
        </div>
        <div class="wrapper wrapper-content">
        
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Laporan Perpustakaan </h5>
                        </div>
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h3><i class="fa fa-file"></i> | Laporan Harian</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h4>Point-point Laporan</h4>
                                                    <ol type="I">
                                                        <li>Anggota Baru</li>
                                                        <li>Koleksi Baru</li>
                                                        <li>Sirkulasi</li>
                                                    </ol>
                                                </div>
                                            </div>
                                                    <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <form method="post" action="<?=base_url('dashboard/laporan/harian')?>">
                                                    <input type="date" class="form-control" name="tanggal" value="<?=date('Y-m-d')?>" required><br>
                                                    <button class="btn btn-primary dim" type="submit"><i class="fa fa-print"></i> | Cetak Laporan</button>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="panel panel-success">
                                        <div class="panel-heading">
                                            <h3><i class="fa fa-file"></i> | Laporan Mingguan</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h4>Point-point Laporan</h4>
                                                    <ol type="I">
                                                        <li>Anggota Baru</li>
                                                    </ol>
                                                </div>
                                            </div>
                                                    <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <form method="post" action="<?=base_url('dashboard/laporan/mingguan')?>">
                                                    <input type="date" class="form-control" name="minggu" value="<?=date('Y-m-d')?>" required><br>
                                                    <button class="btn btn-success dim" type="submit"><i class="fa fa-print"></i> | Cetak Laporan</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
