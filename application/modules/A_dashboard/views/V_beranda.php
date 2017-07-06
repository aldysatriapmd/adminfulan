<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-md-6">
            <div class="ibox">
                <div class="ibox-content" style="padding : 15px;">
                    <form method="get" class="form-horizontal">
                        <div class="form-group"><label class="col-md-2 control-label">NIM</label>
                            <div class="col-md-10">
                                <div class="input-group"><input type="text" id="nimText" class="form-control"> <span class="input-group-btn"> <button type="button" class="btn btn-primary" onclick="viewData()">Cari!
                                </button> </span></div>
                            </div>
                        </div>
                    </form>
                    <span id="caribuku2">
                    <div class="hr-line-dashed"></div>
                    <div class="row" style="margin-top: 15px"><label class="col-md-3 control-label"><i class="fa fa-check-square"></i>  Nama</label>
                    <label class="col-md-1 control-label">:</label>
                        <div class="col-md-8" style="margin-left: -30px">
                            <label id="namaText"></label>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 15px"><label class="col-md-3 control-label"><i class="fa fa-check-square"></i>  Nim</label>
                    <label class="col-md-1 control-label">:</label>
                        <div class="col-md-8" style="margin-left: -30px">
                            <label  id="nimlabelText"></label>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 15px"><label class="col-md-3 control-label"><i class="fa fa-check-square"></i>  Jurusan</label>
                     <label class="col-md-1 control-label">:</label>
                        <div class="col-md-8" style="margin-left: -30px">
                            <label  id="jurusanText"></label>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 15px"><label class="col-md-3 control-label"><i class="fa fa-check-square"></i>  Sisa Pinjam</label>
                     <label class="col-md-1 control-label">:</label>
                        <div class="col-md-8" style="margin-left: -30px">
                            <label id="batasanText"></label>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="row" style="margin-top: 5px;padding:15px">
                        <ul class="sortable-list connectList agile-list ui-sortable" id="bukuPinjam">
                            
                        </ul>
                    </div>
                    </span>
                </div><!-- ibox content -->
            </div><!-- ibox -->
        </div><!-- col-md-6 -->
        <div class="col-md-6" id="caribuku">
            <div class="ibox">
                <div class="ibox-content" style="padding : 15px;">
                    <form method="get" class="form-horizontal">
                        <div class="form-group"><label class="col-md-2 control-label">ISBN</label>
                            <div class="col-md-10">
                                <div class="input-group"><input type="text" class="form-control" name="isbn" id="isbncari"> <span class="input-group-btn"> <button type="button" class="btn btn-primary" onclick="caribuku()">Cari!
                                </button> </span></div>
                            </div>
                        </div>
                    </form>
                    <p id="pesan">Data Tidak ditemukan</p>
                    <span id="tampilbuku">
                    <div class="hr-line-dashed"></div>
                    <div class="hr-line-dashed"></div>
                    <div class="row" style="margin-top: 15px"><label class="col-md-3 control-label"><i class="fa fa-tags"></i> ISBN</label>
                    <label class="col-md-1 control-label">:</label>
                        <div class="col-md-8" style="margin-left: -30px">
                            <label id="isbnbuku"></label>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 15px"><label class="col-md-3 control-label"><i class="fa fa-tags"></i> Judul</label>
                    <label class="col-md-1 control-label">:</label>
                        <div class="col-md-8" style="margin-left: -30px">
                            <label id="judulbuku"></label>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 15px"><label class="col-md-3 control-label"><i class="fa fa-tags"></i> Topik</label>
                    <label class="col-md-1 control-label">:</label>
                        <div class="col-md-8" style="margin-left: -30px">
                            <label id="topikbuku"></label>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 15px"><label class="col-md-3 control-label"><i class="fa fa-tags"></i> Penerbit</label>
                    <label class="col-md-1 control-label">:</label>
                        <div class="col-md-8" style="margin-left: -30px">
                            <label id="penerbitbuku"></label>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 15px"><label class="col-md-3 control-label"><i class="fa fa-tags"></i> Pengarang</label>
                    <label class="col-md-1 control-label">:</label>
                        <div class="col-md-8" style="margin-left: -30px">
                            <label id="pengarangbuku"></label>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 15px"><label class="col-md-3 control-label"><i class="fa fa-tags"></i> Tahun</label>
                    <label class="col-md-1 control-label">:</label>
                        <div class="col-md-8" style="margin-left: -30px">
                            <label id="tahunbuku"></label>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 15px"><label class="col-md-3 control-label"><i class="fa fa-tags"></i> Salin</label>
                    <label class="col-md-1 control-label">:</label>
                        <div class="col-md-8" style="margin-left: -30px">
                            <label id="salinbuku"></label>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="row" style="margin-top: 5px;padding:15px">
                        <button class="btn btn-primary dim" id="tambahbuku" type="button" onclick="tambahPinjaman()" data-toggle="modal" data-target="#myModal"><i class="fa fa-money"></i> | Tambah Buku</button>
                    </div>
                    </span>
                </div><!-- ibox content -->
            </div><!-- ibox -->
        </div><!-- col-md-6 -->
    </div><!-- row -->
</div>
<!-- content end -->
<script type="text/javascript">
        var isbn='';
        var nim='';
        var datajson = '';
        $("#caribuku").hide();
        $("#pesan").hide();
        $("#caribuku2").hide();
        $('#batasanText').append('2');
        function viewData(){
            nim =$('#nimText').val();
            $('#namaText').html('');
            $('#nimlabelText').html('');
            $('#jurusanText').html('');
            $('#batasanText').html('');
            $('#bukuPinjam').html('');
            $("#caribuku").hide();
            $("#pesan").hide();
            $("#caribuku2").hide();
            datajson={};
            
            $.ajax({
                type:"POST",
                url: "<?=base_url('A_dashboard/select_data_anggota')?>",
                data:"nim="+nim,
                success: function(data) {
                    datajson = $.parseJSON(data);
                    $('#namaText').append(datajson.nama);
                    $('#nimlabelText').append(datajson.nim);
                    $('#jurusanText').append(datajson.jurusan);
                    $('#batasanText').append(2-datajson.buku.length);

                    for (var i=0;i<datajson.buku.length;++i){
                        $('#bukuPinjam').append('<li class="warning-element"><button class="btn btn-primary pull-right" onclick="kembalikanbuku('+datajson.buku[i].id_peminjaman+')"><i class="fa fa-arrow-circle-o-left"></i> Kembali</button><b>'+datajson.buku[i].judul+'</b> - '+datajson.buku[i].ISBN+'<div class="agile-detail"><i class="fa fa-clock-o"></i> Tanggal : '+datajson.buku[i].tgl_pinjam+'</div></li>');
                    }

                    if(datajson.buku.length<2){
                        if(datajson.nama){
                            $("#caribuku").show();
                            $("#caribuku2").show();
                        }else{
                            $("#pesan").show();

                        }
                    }else{
                        $("#caribuku").hide();
                        $("#caribuku2").show();
                    }
                }
            });
        }

        var databuku={};
        $("#tambahbuku").hide();
        $("#tampilbuku").hide();
        function caribuku(){
            isbn =$('#isbncari').val();
            $('#isbnbuku').html('');
            $('#judulbuku').html('');
            $('#topikbuku').html('');
            $('#penerbitbuku').html('');
            $('#pengarangbuku').html('');
            $('#tahunbuku').html('');
            $('#salinbuku').html('');
            $("#tampilbuku").show();

            $.ajax({
                type:"POST",
                url: "<?=base_url('A_dashboard/select_data_buku')?>",
                data:"isbn="+isbn,
                success: function(data) {
                    databuku = $.parseJSON(data);
                    $('#isbnbuku').append(databuku.ISBN);
                    $('#judulbuku').append(databuku.judul);
                    $('#topikbuku').append(databuku.topik);
                    $('#penerbitbuku').append(databuku.penerbit);
                    $('#pengarangbuku').append(databuku.pengarang);
                    $('#tahunbuku').append(databuku.tahun);
                    $('#salinbuku').append(databuku.salin);
                    if(databuku.salin>0){
                        $("#tambahbuku").show();
                    }
                }
            });
        }

       function tambahPinjaman(){
            $.ajax({
                type:"POST",
                url: "<?=base_url('A_dashboard/insert_data_pinjam')?>",
                data:"id="+databuku.id+"&idanggota="+datajson.id,
                success: function() {
                    viewData();
                }
            });
       }

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

