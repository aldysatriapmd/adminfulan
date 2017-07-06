 <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <ol class="breadcrumb" style="padding-top: 5px">
                    <li>
                        <a href="<?=base_url('dashboard')?>">Beranda</a>
                    </li>
                    <li class="active">
                        <strong>Keanggotaan</strong>
                    </li>
                </ol>
            </div>
        </div>
        <div class="wrapper wrapper-content">
        
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Data Keanggotaan </h5>

                        </div>
                        <div class="ibox-content">
                            <form class="form-horizontal" method="post" action="<?=base_url('A_keanggotaan/insert_data_keanggotaan')?>" enctype="multipart/form-data">
                                <div class="form-group"><label class="col-md-3 control-label">NIM</label>
                                    <div class="col-md-9"><input type="text" name="nim" placeholder="No Induk Mahasiswa..." class="form-control" required> 
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-md-3 control-label">Nama Lengkap</label>
                                    <div class="col-md-9"><input type="text" name="nama" id="nama" placeholder="Nama Lengkap..." class="form-control" required> 
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
                                        <select name="jk" class="form-control" id="jk" required>
                                            <option value="laki-laki">Laki-laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-md-3 control-label">No Telpon</label>
                                    <div class="col-md-9"><input type="telp" name="notelp" id="notelp" placeholder="No Telpon..." class="form-control" required> 
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-md-3 control-label">Jurusan</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="jurusan" id="jurusan" required>
                                            <option value="Teknik Informatika">Teknik Informatika</option>
                                            <option value="Sistem Informasi">Sistem Informasi</option>
                                            <option value="Ilmu Peternakan">Ilmu Peternakan</option>
                                            <option value="Teknik Arsitektur">Teknik Arsitektur</option>
                                            <option value="Teknik PWK">Teknik PWK</option>
                                            <option value="Biologi">Biologi</option>
                                            <option value="Fisika">Fisika</option>
                                            <option value="Kimia">Kimia</option>
                                            <option value="Matematika">Matematika</option>
                                        </select>
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
   
