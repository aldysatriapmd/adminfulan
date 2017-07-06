        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <ol class="breadcrumb" style="padding-top: 5px">
                    <li>
                        <a href="<?=base_url('dashboard')?>">Beranda</a>
                    </li>
                    <li class="active">
                        <strong>Buku</strong>
                    </li>
                </ol>
            </div>
        </div>
        <div class="wrapper wrapper-content">
        
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Daftar Buku</h5>

                        </div>
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-md-4">
                                    <button class="btn btn-primary dim" type="button" onclick="viewTambah()" data-toggle="modal" data-target="#myModal"><i class="fa fa-money"></i> | Tambah Data</button>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group"><input type="text" placeholder="Search" id="pencarian" class="input-sm form-control"> <span class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-primary" onclick="cari()"> Cari !</button> </span></div>
                                </div>
                                <div class="col-md-4 btn-group">    
                                    <div align="right">
                                        <button class="btn btn-white btn-sm"><i class="fa fa-arrow-left"></i></button>
                                        <button class="btn btn-white btn-sm"><i class="fa fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Judul Buku</th>
                                            <th>Topik</th>
                                            <th>Penerbit</th>
                                            <th>Tahun</th>
                                            <th>Pengarang</th>
                                            <th>ISBN/ISSN</th>
                                            <th>Salin</th>
                                            <th>Perubahan Terakhir</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="bukuText">
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Modal Menambahkan Suplier START -->
    <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">  
            <div class="modal-content animated bounceIn">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <i class="fa fa-user modal-icon"></i>
                    <h4 class="modal-title"><span id="judul"></span>Buku</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal">
                        <div class="form-group"><label class="col-lg-4 control-label">ISBN</label>
                            <div class="col-lg-8"><input type="text" name="ISBN" id="isbn" placeholder="Kode ISBN..." class="form-control" maxlength="20"> 
                            </div>
                        </div>
                        <div class="form-group"><label class="col-lg-4 control-label">Judul Buku</label>
                            <div class="col-lg-8"><input type="text" name="judul" id="judulnya" placeholder="Judul Buku..."  class="form-control"> 
                            </div>
                        </div>
                        <div class="form-group"><label class="col-lg-4 control-label">Topik</label>
                            <div class="col-lg-8">
                                <textarea name="topik" class="form-control" id="topik" placeholder="Topik Buku..." maxlength="150"></textarea>
                            </div>
                        </div>
                        <div class="form-group"><label class="col-lg-4 control-label">Penerbit</label>
                            <div class="col-lg-8"><input type="text" id="penerbit" placeholder="Penerbit..." class="form-control" maxlength="50"> 
                            </div>
                        </div>
                        <div class="form-group"><label class="col-lg-4 control-label">Tahun</label>
                            <div class="col-lg-8"><input type="text" id="tahun" placeholder="Tahun..." class="form-control"> 
                            </div>
                        </div>
                        <div class="form-group"><label class="col-lg-4 control-label">Pengarang</label>
                            <div class="col-lg-8"><input type="text" name="pengarang" id="pengarang" placeholder="Pengarang..." class="form-control" maxlength="50"> 
                            </div>
                        </div>
                        <div class="form-group"><label class="col-lg-4 control-label">Salin</label>
                            <div class="col-lg-8"><input type="number" name="salin" id="salin" placeholder="Salin..." class="form-control"></div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="saveData()">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var datajson = '';
        var dataJenis="tambah";
        var id_data=0;
        function viewData(){
            $('#bukuText').html('');
             $.ajax({
                url: "<?=base_url('A_daftar_buku/select_data_buku')?>",
                //force to handle it as text
                dataType: "text",
                success: function(data) {
                    var json = $.parseJSON(data);
                    datajson = $.parseJSON(data);
                    
                    for (var i=0;i<json.length;++i){
                        $('#bukuText').append('<tr><td>'+(i+1)+'</td><td>'+json[i].judul+'</td><td>'+json[i].topik+'</td><td>'+json[i].penerbit+'</td><td>'+json[i].tahun+'</td><td>'+json[i].pengarang+'</td><td>'+json[i].ISBN+'</td><td>'+json[i].salin+'</td><td>'+json[i].tgl_update+'</td>'+'<td><button class="btn btn-info btn-sm" type="button" data-toggle="modal" data-target="#myModal" onclick="viewUpdate('+i+')"><i class="fa fa-paste"></i></button><button class="btn btn-danger btn-sm" onclick="deleteData('+json[i].id+')" id="hapus" type="button" style="margin-left:5px;"><i class="fa fa-trash"></i></button></td></tr>');
                    }
                }
            });
        }
        viewData();

        function viewTambah(){
            $('#isbn').val('');
            $('#judulnya').val('');
            $('#topik').val('');
            $('#penerbit').val('');
            $('#tahun').val('');
            $('#pengarang').val('');
            $('#salin').val('1');

            dataJenis="tambah";
        }

        function saveData(){
            var isbn        = $('#isbn').val();
            var judul       = $('#judulnya').val();
            var topik       = $('#topik').val();
            var penerbit    = $('#penerbit').val();
            var tahun       = $('#tahun').val();
            var pengarang   = $('#pengarang').val();
            var salin       = $('#salin').val();

            if(dataJenis=="tambah"){
                $.ajax({
                    type:"POST",
                    url:"<?=base_url('A_daftar_buku/insert_data_buku')?>",
                    data:"isbn="+isbn+"&judul="+judul+"&topik="+topik+"&penerbit="+penerbit+"&tahun="+tahun+"&pengarang="+pengarang+"&salin="+salin,
                    success:function(){
                        viewData();
                        swal("Berhasil!", "Data telah dihapus !", "success");
                    },error:function(){
                        alert('Gagal Menginput Data');
                    }
                });
            }else if(dataJenis=="edit"){
                $.ajax({
                    type:"POST",
                    url:"<?=base_url('A_daftar_buku/update_data_buku')?>",
                    data:"isbn="+isbn+"&judul="+judul+"&topik="+topik+"&penerbit="+penerbit+"&tahun="+tahun+"&pengarang="+pengarang+"&salin="+salin+"&id="+id_data,
                    success:function(){
                        viewData();
                        swal("Berhasil!", "Data telah dihapus !", "success");
                    },error:function(){
                        alert('Gagal Menginput Data');
                    }
                });
            }
        }

        function viewUpdate(index){
            $('#isbn').val(datajson[index].ISBN);
            $('#judulnya').val(datajson[index].judul);
            $('#topik').val(datajson[index].topik);
            $('#penerbit').val(datajson[index].penerbit);
            $('#tahun').val(datajson[index].tahun);
            $('#pengarang').val(datajson[index].pengarang);
            $('#salin').val(datajson[index].salin);
            dataJenis="edit";
            id_data=datajson[index].id;
        }


        function deleteData(id){
            swal({
                title: "Apakah anda ingin menghapus data ?",
                text: "Data tidak dapat dikembalikan setelah terhapus !",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Ya, Hapus !",
                closeOnConfirm: false
            }, function () {
                $.ajax({
                    type:"POST",
                    url:"<?=base_url('A_daftar_buku/delete_data_buku')?>",
                    data:"id="+id,
                    success:function(){
                        viewData();
                        swal("Berhasil!", "Data telah dihapus !", "success");
                    },error:function(){
                        alert('Gagal Menghapus Data');
                    }
                });
            });
        }

        function cari(){
            var pencarian = $('#pencarian').val();
               $.ajax({
                    type:"POST",
                    url:"<?=base_url('A_daftar_buku/select_data_pencarian')?>",
                    data:"pencarian="+pencarian,
                    success:function(data){
                        $('#bukuText').html('');

                        var json = $.parseJSON(data);
                        
                        for (var i=0;i<json.length;++i){
                            $('#bukuText').append('<tr><td>'+(i+1)+'</td><td>'+json[i].judul+'</td><td>'+json[i].topik+'</td><td>'+json[i].penerbit+'</td><td>'+json[i].tahun+'</td><td>'+json[i].pengarang+'</td><td>'+json[i].ISBN+'</td><td>'+json[i].salin+'</td><td>'+json[i].tgl_update+'</td>'+'<td><button class="btn btn-info btn-sm" type="button" data-toggle="modal" data-target="#myModal" onclick="viewUpdate('+i+')"><i class="fa fa-paste"></i></button><button class="btn btn-danger btn-sm" onclick="deleteData('+json[i].id+')" id="hapus" type="button" style="margin-left:5px;"><i class="fa fa-trash"></i></button></td></tr>');
                        }

                    },error:function(){
                        alert('Gagal Mengambil Data');
                    }
                });
        }
    </script>