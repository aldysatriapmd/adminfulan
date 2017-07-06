
        <h2 align="center">LAPORAN HARIAN PERPUSTAKAAN<br/>FAKULTAS SAINS DAN TEKNOLOGI<br/>UIN ALAUDDIN MAKASSAR<br/>TAHUN PELAJARAN 2016/2017</h2>
        <hr/>
        <span><?php echo date_format(date_create($tanggal), "d M Y");?></span>
        <h4>I. ANGGOTA</h4>
            <table width="300px" border="1" cellpadding="2" cellspacing="0">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NIM</th>
                    <th>NAMA</th>
                    <th>JENIS KELAMIN</th>
                    <th>JURUSAN</th>
                </tr>
            </thead>
            <tbody>

              <?php for($i=0;$i<count($anggota);$i++){?>
                <tr>
                    <td align="center"><?=$i+1?></td>
                    <td align="center"><?=$anggota[$i]['nim']?></td>
                    <td align="center"><?=$anggota[$i]['nama']?></td>
                    <td align="center"><?=$anggota[$i]['jk']?></td>
                    <td align="center"><?=$anggota[$i]['jurusan']?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <h4>II. KOLEKSI</h4>
            <table width="600px" border="1" cellpadding="2" cellspacing="0">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>JUDUL</th>
                    <th>PENERBIT</th>
                    <th>TAHUN TERBIT</th>
                    <th>PENGARANG</th>
                    <th>ISBN</th>
                </tr>
            </thead>
            <tbody>
                 <?php for($i=0;$i<count($buku);$i++){?>
                <tr>
                    <td align="center"><?=$i+1?></td>
                    <td align="center"><?=$buku[$i]['judul']?></td>
                    <td align="center"><?=$buku[$i]['penerbit']?></td>
                    <td align="center"><?=$buku[$i]['tahun']?></td>
                    <td align="center"><?=$buku[$i]['pengarang']?></td>
                    <td align="center"><?=$buku[$i]['ISBN']?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        
        <h4>III. SIRKULASI</h4>
            <span>Jumlah Buku Terpinjam  : </span><?=$jumlah?> judul
  