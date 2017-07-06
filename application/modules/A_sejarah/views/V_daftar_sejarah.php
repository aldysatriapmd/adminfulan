<div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <ol class="breadcrumb" style="padding-top: 5px">
                    <li>
                        <a href="<?=base_url('dashboard')?>">Beranda</a>
                    </li>
                    <li class="active">
                        <strong>Daftar Sejarah Peminjaman</strong>
                    </li>
                </ol>
            </div>
        </div>
        <div class="wrapper wrapper-content">
        
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Daftar sejarah</h5>

                        </div>
                        <div class="ibox-content">
                            <!-- <div class="row">
                                <div class="col-md-10">
                                    <div class="input-group"><input type="text" placeholder="Search" class="input-sm form-control"> <span class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-primary"> Cari !</button> </span></div>
                                </div>
                                <div class="col-md-2 btn-group">    
                                    <div align="right">
                                        <button class="btn btn-white btn-sm"><i class="fa fa-arrow-left"></i></button>
                                        <button class="btn btn-white btn-sm"><i class="fa fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div> -->
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                            <th>No.</th>
                                            <th>ID Anggota</th>
                                            <th>Nama Lengkap</th>
                                            <th>Judul Buku</th>
                                            <th>Tanggal Peminjaman</th>
                                            <th>Max Pengembalian</th>
                                            <th>Waktu Pengembalian</th>
                                            <th>Hapus</th>
                                            <th>Kembali</th>
                                        </tr>
                                    </thead>
                                    <tbody id="dataText">
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    <script type="text/javascript">
        function viewData(){
            $('#dataText').html('');
             $.ajax({
                url: "<?=base_url('A_sejarah/select_data_sejarah')?>",
                //force to handle it as text
                dataType: "text",
                success: function(data) {

                    //data downloaded so we call parseJSON function 
                    //and pass downloaded data
                    var json = $.parseJSON(data);
                    //now json variable contains data in json format
                    //let's display a few items
                    datajson = $.parseJSON(data);
                    
                    for (var i=0;i<json.length;++i){
                        $('#dataText').append('<tr data-id="'+json[i].id+'"><td>'+(i+1)+'</td><td>'+json[i].nim+'</td><td>'+json[i].nama+'</td><td>'+json[i].judul+'</td><td>'+json[i].tgl_pinjam+'</td><td>'+json[i].tgl_pengembalian+'</td><td>'+json[i].tgl_update+'</td><td><button class="btn btn-danger btn-sm" onclick="deleteData('+json[i].id_peminjaman+')" id="hapus" type="button"><i class="fa fa-trash"></i></button></td><td><button class="btn btn-info btn-sm" type="button" onclick="ubahStatus('+json[i].id_peminjaman+')"><i class="fa fa-paste"></i> Koreksi</button></td></tr>');
                    }
                }
            });
        }
        viewData();

        function ubahStatus(id){
            swal({
                    title: "Apakah Anda yakin ?",
                    text: "Data akan kembali ke daftar peminjaman !",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Ya, Koreksi !",
                    closeOnConfirm: false
                }, function () {
                    $.ajax({
                        type:"POST",
                        url:"<?=base_url('A_sejarah/update_data_sejarah')?>",
                        data:"id="+id,
                        success:function(){
                            viewData();
                            swal("Berhasil !", "Data tersimpan ke daftar peminjaman", "success");

                        },error:function(){
                            alert('Gagal Menghapus Data');
                        }
                    });
                });
        }

        function deleteData(id){
            swal({
                    title: "Apakah Anda yakin ?",
                    text: "Data tidak dapat dikembalikan setelah terhapus !",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Ya, Hapus !",
                    closeOnConfirm: false
                }, function () {
                    $.ajax({
                        type:"POST",
                        url:"<?=base_url('A_peminjaman/delete_data_peminjaman')?>",
                        data:"id="+id,
                        success:function(){
                            viewData();
                            swal("Berhasil !", "Data telah dihapus", "success");
                        },error:function(){
                            alert('Gagal Menghapus Data');
                        }
                    });
                });
        }


    </script>