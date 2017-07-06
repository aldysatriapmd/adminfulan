
        <h2 align="center">LAPORAN MINGGUAN PERPUSTAKAAN<br/>FAKULTAS SAINS DAN TEKNOLOGI<br/>UIN ALAUDDIN MAKASSAR<br/>TAHUN PELAJARAN 2016/2017</h2>
        <hr/>
        <span><?php echo date_format(date_create($tanggal), "d M Y");?></span>
        <h4>I. ANGGOTA</h4>
            <table width="300px" border="1" cellpadding="2" cellspacing="0">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>JURUSAN</th>
                    <th>JUMLAH</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <th align="center">1</th>
                    <td align="center">TEKNIK INFORMATIKA</td>
                    <td align="center"><?=$ti?></td>
                </tr>
                <tr>
                    <th align="center">2</th>
                    <td align="center">TEKNIK PWK</td>
                    <td align="center"><?=$tp?></td>
                </tr>
                <tr>
                    <th align="center">3</th>
                    <td align="center">TEKNIK ARSITEKTUR</td>
                    <td align="center"><?=$ta?></td>
                </tr>
                <tr>
                    <th align="center">4</th>
                    <td align="center">ILMU PETERNAKAN</td>
                    <td align="center"><?=$ip?></td>
                </tr>
                <tr>
                    <th align="center">5</th>
                    <td align="center">SAINS BIOLOGI</td>
                    <td align="center"><?=$bi?></td>
                </tr>
                <tr>
                    <th align="center">6</th>
                    <td align="center">SAINS FISIKA</td>
                    <td align="center"><?=$fi?></td>
                </tr>
                <tr>
                    <th align="center">7</th>
                    <td align="center">SAINS KIMIA</td>
                    <td align="center"><?=$ki?></td>
                </tr>
                <tr>
                    <th align="center">8</th>
                    <td align="center">MATEMATIKA</td>
                    <td align="center"><?=$ma?></td>
                </tr>
                <tr>
                    <th align="center">9</th>
                    <td align="center">SISTEM INFORMASI</td>
                    <td align="center"><?=$si?></td>
                </tr>
            </tbody>
        </table>
