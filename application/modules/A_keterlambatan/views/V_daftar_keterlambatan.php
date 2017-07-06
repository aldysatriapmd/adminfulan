<div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <ol class="breadcrumb" style="padding-top: 5px">
                    <li>
                        <a href="<?=base_url('dashboard')?>">Beranda</a>
                    </li>
                    <li class="active">
                        <strong>Daftar Keterlambatan</strong>
                    </li>
                </ol>
            </div>
        </div>
        <div class="wrapper wrapper-content">
        
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Daftar Keterlambatan</h5>

                        </div>
                        <div class="ibox-content">
                            
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Judul Buku</th>
                                        <th>NIM</th>
                                        <th>Nama Peminjam</th>
                                        <th>Telp</th>
                                        <th>Batas Pengembalian</th>
                                        <th>Keterlambatan</th>
                                        <th>Total Bayar</th>
                                        <th>Aksi</th>
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
                url: "<?=base_url('A_keterlambatan/select_data_keterlambatan')?>",
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
                        $('#dataText').append('<tr><td>'+(i+1)+'</td><td>'+json[i].judul+'</td><td>'+json[i].nim+'</td><td>'+json[i].nama+'</td><td>'+json[i].telp+'</td><td>'+json[i].tgl_pengembalian+'</td><td>'+json[i].sumhari+' hari</td><td>'+json[i].bayar+'</td><td><button class="btn btn-info btn-sm" type="button" onclick="kembalikanbuku('+json[i].id_peminjaman+')"><i class="fa fa-paste"></i> Kembali</button></td></tr>');
                    }
                }
            });
        }
        viewData();

        function kembalikanbuku(idpinjam){
            
            swal({
                    title: "Apakah anda ingin mengembalikan buku ?",
                    text: "Data akan tersimpan di sejarah peminjaman!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Ya, Kembalikan !",
                    closeOnConfirm: false
                }, function () {
                    $.ajax({
                        type:"POST",
                        url: "<?=base_url('A_dashboard/pengembalian_buku')?>",
                        data:"id_peminjaman="+idpinjam,
                        success: function() {
                            viewData();
                            swal("Berhasil !", "Data tersimpan di sejarah peminjaman.", "success");
                        }
                    });
                });
       }
    </script>