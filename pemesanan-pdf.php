
<?php
            
    if ( isset($_GET["no"]) ){
        $no = $_GET["no"];
        $check_no = "SELECT * FROM tb_pemesanan WHERE no = '$no'; ";
        include('config.php');
        $query = mysqli_query($mysqli,$check_no );
        $row = mysqli_fetch_array($query);
    }

    require_once __DIR__. '/vendor/autoload.php';

    // Create an instance of the MPDF class
    $mpdf = new \Mpdf\Mpdf();

    // Define the content of the letter as HTML with CSS style
    $content = '
        <style>
            body {
                font-family: Arial, sans-serif;
            }
            .rangkasurat {
                border: 2px solid #333;
                padding: 20px;
            }
            .logo {
                width: 140px;
            }
            .tengah {
                text-align: center;
                padding: 10px;
            }
            .alamat {
                text-align: center;
                font-weight: bold;
            }
            .judul {
                text-align: center;
            }
            .ttd {
                float: right;
            }
            .garis-tebal {
                border-top: 2px solid #000;
            }
        </style>
            <table width="100%">
            <tr>
            <td class="tengah">
            <h2>SURAT PEMESANAN </h2>
            <h1>RENALDI DESIGN</h1>
            <div class="alamat">Kp.jujung,Desa Manyingsal,Kec Cipunagara, Kab Subang , Kode Pos 41257</div>
            </td>
            </tr>
            </table>
        <div class="garis-tebal"></div>
            <br>
            <div class="judul">
                <h3>SURAT PEMESANAN</h3>
                '. date("Y-m-d H:i:s") . '
            </div>
            <br>
            <p>Kepada Yth : ' . $row["nama_pemesan"] . '</p>
            <br>
            <p>Dengan hormat,</p>
            <p>Terimakasih Saudara/i <strong>' . $row["nama_pemesan"] . ' </strong> , Karena sudah memesan jasa pada <strong>RENALDI DESIGN</strong> Maka Berikut adalah Detail Pemesanannya :</p>
            <ol>
                <li>No Pemesanan :  ' . $row["no"] . '</li>
                <li>Nama Lengkap :  ' . $row["nama_pemesan"] . '</li>
                <li>No Telp :  ' . $row["no_telp"] . '</li>
                <li>Jenis :  ' . $row["jenis"] . '</li>
            </ol>
            <p>Demikian surat ini dibuat untuk Laporan Pemesanan yang terkait.</p>
            <br>
            <div class="ttd">
                <p>Hormat kami,</p>
                <br>
                <br>
                <p><u>Egi Renaldi</u></p>
                <p>Manager Perusahaan RD</p>
            </div>
        </div>
    ';

    // Write the HTML content to the PDF
    $mpdf->WriteHTML($content);

    // Output the PDF to the browser or save it to a file
    try {
        $mpdf->Output();
    } catch (\Mpdf\MpdfException $e) {
        echo 'Error: ' . $e->getMessage();
    }

?>
