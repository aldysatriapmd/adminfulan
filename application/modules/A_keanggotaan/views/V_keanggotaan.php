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
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="<?=base_url('dashboard/keanggotaan/input')?>">
                                    <button class="btn btn-primary dim" type="button" ><i class="fa fa-money"></i> | Tambah Data</button>
                                    </a>
                                </div>
                               <div class="col-md-4">
                                    <div class="input-group"><input type="text" placeholder="Search" class="input-sm form-control" id="pencarian"> <span class="input-group-btn">
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
                                            <th>Foto</th>
                                            <th>ID Anggota</th>
                                            <th>Nama Lengkap</th>
                                            <th>Jurusan</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Terakhir Berubah</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="anggotaText">
                                            
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
            $('#anggotaText').html('');
             $.ajax({
                url: "<?=base_url('A_keanggotaan/select_data_keanggotaan')?>",
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
                        $('#anggotaText').append('<tr data-id="'+json[i].id+'"><td>'+(i+1)+'</td><td><img class="img-responsive" width="100px" src="<?=base_url()?>gambar/profil/'+json[i].foto+'"></td><td>'+json[i].nim+'</td><td>'+json[i].nama+'</td><td>'+json[i].jurusan+'</td><td>'+json[i].jk+'</td><td>'+json[i].tgl_update+'</td><td><a href="<?=base_url()?>dashboard/keanggotaan/edit/'+json[i].id+'"><button class="btn btn-info btn-sm" type="button"><i class="fa fa-paste"></i></button><button class="btn btn-danger btn-sm" onclick="deleteData('+json[i].id+')" id="hapus" type="button"><i class="fa fa-trash"></i></button></td></tr>');
                    }
                }
            });
        }
        viewData();

        function cari(){
            var pencarian = $('#pencarian').val();
               $.ajax({
                    type:"POST",
                    url:"<?=base_url('A_keanggotaan/select_data_pencarian')?>",
                    data:"pencarian="+pencarian,
                    success:function(data){
                        $('#anggotaText').html('');

                        var json = $.parseJSON(data);
                        
                        for (var i=0;i<json.length;++i){
                            $('#anggotaText').append('<tr data-id="'+json[i].id+'"><td>'+(i+1)+'</td><td><img class="img-responsive" width="100px" src="<?=base_url()?>gambar/profil/'+json[i].foto+'"></td><td>'+json[i].nim+'</td><td>'+json[i].nama+'</td><td>'+json[i].jurusan+'</td><td>'+json[i].jk+'</td><td>'+json[i].tgl_update+'</td><td><a href="<?=base_url()?>dashboard/keanggotaan/edit/'+json[i].id+'"><button class="btn btn-info btn-sm" type="button"><i class="fa fa-paste"></i></button><button class="btn btn-danger btn-sm" onclick="deleteData('+json[i].id+')" id="hapus" type="button"><i class="fa fa-trash"></i></button></td></tr>');
                        }

                    },error:function(){
                        alert('Gagal Mengambil Data');
                    }
                });
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
                        url:"<?=base_url('A_keanggotaan/delete_data_keanggotaan')?>",
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
    </script>