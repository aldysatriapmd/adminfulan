        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <ol class="breadcrumb" style="padding-top: 5px">
                    <li>
                        <a href="#">Beranda</a>
                    </li>
                    <li class="active">
                        <strong>Peminjaman</strong>
                    </li>
                </ol>
            </div>
        </div>
        <div class="wrapper wrapper-content">
        
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Data Peminjaman</h5>

                        </div>
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-md-4">
                                <a href="<?=base_url('dashboard')?>">
                                    <button class="btn btn-primary dim" type="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-money"></i> | Tambah Peminjam</button>
                                </a>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group"><input type="text" placeholder="Search" class="input-sm form-control" id="pencarian"> <span class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-primary" onclick="cari()"> Cari!</button> </span></div>
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
                                            <th>ID Anggota</th>
                                            <th>Nama Lengkap</th>
                                            <th>Judul Buku</th>
                                            <th>Tanggal Peminjaman</th>
                                            <th>Max Pengembalian</th>
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
        var datajson = '';
        var dataJenis="tambah";
        var id_data=0;
        function viewData(){
            $('#dataText').html('');
             $.ajax({
                url: "<?=base_url('A_peminjaman/select_data_peminjaman')?>",
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
                        $('#dataText').append('<tr data-id="'+json[i].id+'"><td>'+(i+1)+'</td><td>'+json[i].nim+'</td><td>'+json[i].nama+'</td><td>'+json[i].judul+'</td><td>'+json[i].tgl_pinjam+'</td><td>'+json[i].tgl_pengembalian+'</td><td><button class="btn btn-danger btn-sm" onclick="deleteData('+json[i].id_peminjaman+')" id="hapus" type="button"><i class="fa fa-trash"></i></button></td><td><button class="btn btn-info btn-sm" type="button" onclick="ubahData('+json[i].id_peminjaman+')"><i class="fa fa-paste"></i> Kembali</button></td></tr>');
                    }
                }
            });
        }
        viewData();

        function deleteData(id){
                swal({
                    title: "Apakah anda ingin menghapus ?",
                    text: "Data tidak dapat dikembalikan setelah terhapus!",
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
                                swal("Berhasil!", "Data terhapus !", "success");
                            },error:function(){
                                alert('Gagal Menghapus Data');
                            }
                        });
                    
                });
        }    
        function ubahData(id){
                swal({
                    title: "Apakah anda mengembalikan ?",
                    text: "Data akan tersimpan di sejarah Peminjaman!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Ya, Kembalikan !",
                    closeOnConfirm: false
                    }, function () {
                        $.ajax({
                            type:"POST",
                            url:"<?=base_url('A_peminjaman/ubah_data_peminjaman')?>",
                            data:"id="+id,
                            success:function(){
                                viewData();
                                swal("Berhasil!", "Buku telah dikembalikan !", "success");
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
                    url:"<?=base_url('A_peminjaman/select_data_pencarian')?>",
                    data:"pencarian="+pencarian,
                    success:function(data){
                        $('#dataText').html('');

                        var json = $.parseJSON(data);
                        
                        for (var i=0;i<json.length;++i){
                            $('#dataText').append('<tr data-id="'+json[i].id+'"><td>'+(i+1)+'</td><td>'+json[i].nim+'</td><td>'+json[i].nama+'</td><td>'+json[i].judul+'</td><td>'+json[i].tgl_pinjam+'</td><td>'+json[i].tgl_pengembalian+'</td><td><button class="btn btn-danger btn-sm" onclick="deleteData('+json[i].id_peminjaman+')" id="hapus" type="button"><i class="fa fa-trash"></i></button></td><td><button class="btn btn-info btn-sm" type="button" onclick="ubahData('+json[i].id_peminjaman+')"><i class="fa fa-paste"></i> Kembali</button></td></tr>');
                        }

                    },error:function(){
                        alert('Gagal Mengambil Data');
                    }
                });
        }                 
    </script>