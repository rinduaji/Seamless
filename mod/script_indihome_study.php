<?php
require_once("../deft_nav.php");
include("../assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$jb = $_SESSION["jb"];
$tgl = date("Y-m-d H:i:s");

if($login<>""){ $whr= "AND login='$login'";}
?>

<!doctype html>
<html lang="en">
	<title>REFERENSI</title>
<div class="content">
			<div class="container-fluid">
				<div class="row">
			<div class="col-md-12">
				<div class="card card-plain">
					
			
					<form id='input' name="demoform" action='list_recall.php' method='post' accept-charset='UTF-8'>
						<div>
						
						<div class="row">
						<div class="col-md-12">
						  <div class="card ">
							  <div class="header">
								  <h4 align="center" class="title">Script Anti Decline</h4>
						    </div>
						    <div style="overflow-x:auto;">
						      <p>Rule : <a href="script_indihome_study.php">Indihome_Study</a></p>
						      <p><a href="script_wifi_id.php"></a></p>
						      <p>&nbsp;</p>
						      <p><a href="script_channel_ikonser.php">Channel_I_Konser</a> | <a href="script_wifi_extender.php">Wifi_Extender</a> | <a href="script_wifi_id.php">Wifi_ID</a> | <a href="script_game_qoo.php">Game_QOO</a> | <a href="script_benefit_game.php">Benefit_Game</a><a href="script_wifi_id.php"></a></p>
						      <p>&nbsp;</p>
						      <p>&nbsp;</p>
						      <table border="3" cellpadding="0" cellspacing="0">
                                <col width="131">
                                <col width="113">
                                <col width="478">
                                <tr height="20">
                                  <td height="20" width="131"><div align="center"><strong>RULE</strong></div></td>
                                  <td width="161"><div align="center"><strong>REASON DECLINE</strong></div></td>
                                  <td width="788"><div align="center"><strong>REFERENSI    SCRIPT PENAWARAN</strong></div></td>
                                </tr>
                                <tr height="80">
                                  <td rowspan="21" height="1280">indihome    study</td>
                                  <td width="161">sudah    menggunakan provider lain</td>
                                  <td width="788">untuk    program ini bukan untuk menggantikan program sebelumnya pak/bu , untuk indhome    study ini dapat melengkapi pendampingan proses belajarnya. Dimana dengan tarif    yang ekonomis Rp 10.000 +ppn10% sudah dapat mengakses buku,video dan soal    soalnya dari jenjang sd-sma</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="161">belum perlu saat ini&nbsp;</td>
                                  <td width="788">penggunannya    kan bisa dengan koneksi internet apapun pak/ibu sehingga penggunaannya tidak    hanya bisa digunakan keluarga dirumah. Ibu/bapak bisa gunakan untuk keluarga    yang berbeda rumah yang masih bersekolah&nbsp;    dan bisa di akses di perangkat seperti laptop atau hp dengan    penggunaan dimana saja&nbsp;</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="161">sudah menggunakan provider lain</td>
                                  <td width="788">dengan    tarif Rp 10.000+ppn10% bapak/ibu sudah bisa mengakses materi pembelajaaran    dari semua jenjang bu/pak. Dimana di bandingan untuk program lain bapak/ibu    dikenakan tarif perjenjang sekolah. Dengan indihome study bapak/ibu sudah    bisa mengakses video,buku dan latihan soal jenjang sd-sma</td>
                                </tr>
                                <tr height="80">
                                  <td height="80">Sudah ada provider lain&nbsp;</td>
                                  <td width="788">sangat    disayangkan Bapak/ibu jika melewatkan penawaran ini, karna memang untuk    menambah refensi belajar terhadap anak degan tarif Rp 10.000,- + ppn 10%    perbulan sudah dilengkapi video pembahasan, buku-buku digital dan latihan    soal daro SD-SMA</td>
                                </tr>
                                <tr height="80">
                                  <td height="80">belum perlu saat ini&nbsp;</td>
                                  <td width="788">Program    nya kan sifatnya rekomendasi penawaran bu jadi tdk semua nomor salah satu nya    dinomor ibu/ bapak ..benefitnya sangat membantu putra dan putri ibu untuk    belajarnya dirumah. Karena bisa diakses dari jenjang SD hingga SMA.</td>
                                </tr>
                                <tr height="20">
                                  <td rowspan="8" height="160">JARANG DIGUNAKAN</td>
                                  <td rowspan="8" width="788">&nbsp;Mungkin    untuk saat ini bapak/ibu belum membutuhkan utk programnya, namun seiring    berjalannya waktu pasti akan membutuhkan untuk membantu kegiatan belajar    mengajarnya anak2 bapak/ibu, ataupun sodara2 yg lainnya, karna dengan    menggunakan Indihome study ini akan kegiatan belajar mengajarnya akan lebih    mudah dan efektif, dan hanya dengan taif 10ribu rupiah +ppn 10% saja    perbulannya, dan kebetulan untuk saat ini bapak/ibu diberikan penawaran    khususnya langsung dari telkom yang tidak semua pelanggan mendapatkannya.    jadi bisa bapak/ibu maksimalkan untuk programnya, dengan tarif yg sangat    terjangkau...</td>
                                </tr>
                                <tr height="20"> </tr>
                                <tr height="20"> </tr>
                                <tr height="20"> </tr>
                                <tr height="20"> </tr>
                                <tr height="20"> </tr>
                                <tr height="20"> </tr>
                                <tr height="20"> </tr>
                                <tr height="80">
                                  <td height="80" width="161">Tidak ada anak usia sekolah</td>
                                  <td width="788">Untuk    penggunaannya dapat digunakan oleh anggota keluarga yang lain&nbsp; Pak/Bu yang masih bersekolah, karna untuk    akses indihome study ini tidak harus menggunakan jaringan internet indihome    Bapak/Ibu dirumah saja tetapi bisa menggunakan jaringan internet yang lain.</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="161">Sudah menggunakan Provider Lain</td>
                                  <td width="788">Program    yang kami tawarkan saat ini bukan untuk menggantikan program yang sudah    Bapak/Ibu gunakan sebelumnya, tetapi Bapak/Ibu bisa menggunakannya sebagai    referensi tambahan untuk anak Bapak/Ibu belajar&nbsp;</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="161">tidak ada anggota keluarga usia sekolah&nbsp;</td>
                                  <td width="788">&nbsp;untuk penggunaan bisa dimanfaatkan di    keluarga bapak/I yg lain yg tidak serumah, karena penggunaan nya bisa    digunakan dimana saja dan kapan saja tidak harus terhubung dengan internet    indihome dirumah mengingat tarif yg di berikan hanya Rp.10.000 per bulan nya</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="161">belum perlu saat ini&nbsp;</td>
                                  <td width="788">tidak    disayangkan pak/bu program nya di lewatkan karena tidak semua pelanggan    indihome mendapatkan penawaran yg sama (&nbsp;    infokan benefit-benefit kembali) Untuk keuntungan indihome study ini    tentunya akan lebih menambah pengetahuan dan wawasan terhadap putra putri    Bapak/Ibu dirumah</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="161">sudah menggunakan provider lain</td>
                                  <td width="788">indihome    study bukan menggantikan pogram sebelum nya karena mengingat tarif nya pun    hanya Rp.10.000 per bulan nya&nbsp;&nbsp; bisa di    gunakan putra putri dari jenjang SD s/d SMA dalam 1 platform mobile dan    webnya saja&nbsp; jadi cukup membayarkan    Rp.10.000 per bulan nya penggunaan nya&nbsp;    bisa digunakan di bebera anak yg berbeda jenjang secara    bergantian&nbsp;</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="161">Belum perlu saat ini</td>
                                  <td width="788">Apakah    tidak disayangkan Bpk/Ibu karena penawarannya hanya 1 kali saja, Putra dan    Putrinya sudah dapat belajar di manapun dan kapanpun dengan koneksi internet    apapun dari jenjang SD s/d SMA yang dapat di akses melalui TV atau    Smartphonenya.</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="161">Tarif Mahal</td>
                                  <td width="788">Boleh    di maksimalkan penggunaannya Pak/Bu dengan tarif yang hanya Rp.10 ribu    +ppn10% tiap bulannya . Bpk/ibu&nbsp; sudah    banyak mendapatkan benefit dari Program Indihome Study ini di banding dengan    program pendidikan lainnya yg mungkin lebih mahal</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="161">Belum ada yang sekolah</td>
                                  <td width="788">Mungkin    bisa di gunakan oleh keluarga atau saudara lainnya pak yang masih sekolah    nanti tinggal download aplikasi Indihome Study di smartphone keluarga/saudara    Bpk dan login menggunakan akun my indihome Bpk</td>
                                </tr>
                              </table>
						      <p>&nbsp;</p>
						      <p>&nbsp;</p>
						      <p>&nbsp;</p>
						      <p>&nbsp;</p>
						      <p>&nbsp;</p>
						    </div>
						  </div>
						</div>

                    
                </div>
						
						</div>
					</form>	
				</div>
			</div>
			</div>
		</div>
</html>
<?php	require_once("../deft_foo.php"); ?>