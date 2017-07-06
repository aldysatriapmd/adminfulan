<div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <ol class="breadcrumb" style="padding-top: 5px">
                    <li>
                        <a href="#">Beranda</a>
                    </li>
                    <li class="active">
                        <strong>user</strong>
                    </li>
                </ol>
            </div>
        </div>
        <div class="wrapper wrapper-content">
        
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Data user </h5>

                        </div>
                        <div class="ibox-content">
                            <form class="form-horizontal" method="post" action="<?=base_url('A_user/insert_data_user')?>" enctype="multipart/form-data">
                                <div class="form-group"><label class="col-md-3 control-label">NIP</label>
                                    <div class="col-md-9"><input type="text" name="nip" placeholder="No Induk Pegawai..." class="form-control" required> 
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-md-3 control-label">Nama Lengkap</label>
                                    <div class="col-md-9"><input type="text" name="nama" placeholder="Nama Lengkap..." class="form-control" required> 
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9"><input type="email" name="email" placeholder="Email Pegawai..." class="form-control" required> 
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-md-3 control-label">Tanggal Lahir</label>
                                    <div class="col-md-9"><input type="date" name="lahir" id="lahir" class="form-control" required> 
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-md-3 control-label">Tempat Lahir</label>
                                    <div class="col-md-9"><textarea class="form-control" name="tempat" rows="3" id="tempat" placeholder="Tempat Lahir..." required></textarea>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-md-3 control-label">Jenis Kelamin</label>
                                    <div class="col-md-9">
                                        <select name="jk" class="form-control" required>
                                            <option value="laki-laki">Laki-laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-md-3 control-label">No Telpon</label>
                                    <div class="col-md-9"><input type="number" name="notelp" placeholder="No Telpon..." class="form-control" required> 
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-md-3 control-label">Alamat</label>
                                    <div class="col-md-9"><textarea class="form-control" name="alamat" rows="3" id="alamat" placeholder="Alamat..." required></textarea>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-md-3 control-label">Foto</label>
                                    <div class="col-md-9">
                                        <input name="userfile" class="form-control" type="file" required/>
                                    </div>
                                </div>
                                <div class="ibox-footer" align="right">
                                    <button class="btn btn-primary dim" type="submit"><i class="fa fa-money"></i> | Simpan Data</button>
                                </div>
                            </form>
                        </div><!-- ibox content -->
                    </div><!-- ibox -->
                </div><!-- col -->
            </div><!-- row -->
        </div>
   
