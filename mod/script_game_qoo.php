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
						      <p>Rule : <a href="script_game_qoo.php">Game_QOO</a><a href="script_wifi_id.php"></a></p>
						      <p>&nbsp;</p>
						      <p><a href="script_benefit_game.php">Benefit_Game</a> | <a href="script_indihome_study.php">Indihome_Study</a> | <a href="script_channel_ikonser.php">Channel_I_Konser</a> | <a href="script_wifi_extender.php">Wifi_Extender</a> | <a href="script_wifi_id.php">Wifi_ID</a></p>
						      <p>&nbsp;</p>
						      <p>&nbsp;</p>
						      <table border="2" cellpadding="0" cellspacing="0">
                                <col width="143">
                                <col width="279">
                                <col width="470">
                                <tr height="20">
                                  <td height="20" width="143"><div align="center"><strong>RULE</strong></div></td>
                                  <td width="279"><div align="center"><strong>REASON DECLINE</strong></div></td>
                                  <td width="659"><div align="center"><strong>REFERENSI    SCRIPT PENAWARAN</strong></div></td>
                                </tr>
                                <tr height="100">
                                  <td rowspan="22" height="1160">game    qoo</td>
                                  <td>tarif mahal</td>
                                  <td width="659">&nbsp;Sayang sekali apabila dilewatkan penawaran    ini pak/bu Karena program ini tidak terikat, bapak bisa maksimalkan benefit    dan manfaatnya dan tarifnya akan dibayarkan mulai bulan depan. Selanjutnya    kami kembalikan ke bapak, tapi kami yakin bapak akan lanjut berlangganan    karena manfaat dan benefitnya sangat banyak untuk bapak dan keluarga</td>
                                </tr>
                                <tr height="60">
                                  <td height="60">tidak ada yang bermain game&nbsp;</td>
                                  <td width="659">bapak/ibu    bisa mekasimal&nbsp; penggunaanya, karna    banyak piliahan lebih dari 50 game, dan bisa di gunakan oleh anggota keluarag    lainnya. Bisa menambah hiburan dirumah</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="279">Sudah menggunakan provider lain</td>
                                  <td width="659">game    qoo sudah memiliki 50 lebih dari jenis pilahan gamenya dan bapak/ibu bisa    langsung memainkan gamenya tanpa harus install atau download gamenya&nbsp;</td>
                                </tr>
                                <tr height="80">
                                  <td height="80">tidak tertarik bermain games</td>
                                  <td width="659">tidak    disayangkan Bapak/ibu untuk penawaran ini bisa dimaksimalkan terlebih dahulu    karna untuk bermain games ini digunakan bisa bermain games tanpa harus    membeli console seperti playstation, nintendo, dan xbox jadi Bapak/ibu bisa    menggunakan di Televisi ataupun leptop.</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="279">Tarif mahal</td>
                                  <td width="659">Bapak    / Ibu jangan khawatir karena ini bisa dimaksimalkan&nbsp; untuk penggunaanya, tapi besar harapan kami    bisa&nbsp; bermafaat bagi bapak dan    keluarga, karena untuk program gameqoo bisa sangat bermanfaat dikala pandemi    ataupun watktu luang bapak /ibu.</td>
                                </tr>
                                <tr height="20">
                                  <td rowspan="11" height="220">TARIF    MAHAL</td>
                                  <td rowspan="11" width="659">Sangat    sayang sekali ibu lewatkan program nya karna tdk semua pelanggan mendapatkan    penawaran khusus ini pak, karna hanya pelanggan2 terpilih saja yg    mendapatkannya.<br>
                                    Tarifnya pun diberikan tarif khusus hanya penambahan 99rb +ppn 10% setiap    bulan selama berlanggan jadi bukan dengan tarif promo yg sewaktu2 bisa    berubah..penambahan nya pun baru dimulai dibulan depan ya pak/bu, namun untuk    programnya sudah bisa bpk/ibu nikmati 3 hari kedepan paling lama, jika ibu    bersedia berlangganan maka ibu bs memaksimalkan penggunaan programnya dan    saya pastikan ini sangat efektif buat ibu , krn programnya sangat    berkualitas..&nbsp;</td>
                                </tr>
                                <tr height="20"> </tr>
                                <tr height="20"> </tr>
                                <tr height="20"> </tr>
                                <tr height="20"> </tr>
                                <tr height="20"> </tr>
                                <tr height="20"> </tr>
                                <tr height="20"> </tr>
                                <tr height="20"> </tr>
                                <tr height="20"> </tr>
                                <tr height="20"> </tr>
                                <tr height="80">
                                  <td height="80" width="279">Tarif Mahal&nbsp;</td>
                                  <td width="659">pembayarannya    kan mulai bulan depan Pak/Bu dan itupun masih dengan prorata atau belum full    penambahannya dibulan kedua baru full 99K + PPN 10%. Jadi sangat disayangkan    sekali apabila dilewatkan untuk penawarannya</td>
                                </tr>
                                <tr height="80">
                                  <td height="80">tarif mahal</td>
                                  <td width="659">bapak/I    tidak perlu khawatir dengan&nbsp; tarif yg    di berikan hanya Rp.99.000 per bulan ,pelanggan sudah bisa memainkan game    sepuas nya dan bisa memainkan seluruh game original di gameQoo tanpa perlu PC    Mahal.<br>                                  </td>
                                </tr>
                                <tr height="80">
                                  <td height="80">tidak&nbsp; bermain game&nbsp;</td>
                                  <td width="659">sudah    tersedia 100+ game yang siap di mainkan bapak/I ngga perlu takut bosen main    game , karena selalu&nbsp; ada game baru    setiap bulannya! Aksi, puzzle, petualangan, balapan dan tersedia banyak genre&nbsp; jadi bisa digunakan semua keluarganya yg    lain&nbsp;</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="279">Sudah menggunakan provider lain</td>
                                  <td width="659">dengan    game qoo, bapak/i dapat memainkan game-game berkualitas dan berlisensi resmi    dari berbagai publisher ternama dunia secara optimal degan PC/Laptop yg    bersifikasi rendah&nbsp;</td>
                                </tr>
                                <tr height="140">
                                  <td height="140">Tarif Mahal</td>
                                  <td width="659">Untuk    programnya sangat disayangkan Pak/Ibu jika melewatinya karena penawarannya    tidak setiap hari ada Pak/Bu. Bpk/Ibu bisa maksimalkan dahulu penawaran    program gameqoo ini dgn tarif yang terjangkau yaitu hanya dengan penambahan    99 ribu+ppn10% tiap bulannya bpk /ibu dan keluarga dapat bermain game bersama    sama dgn menggunakan gamepad yang Bapak/ibu miliki,&nbsp; daripada Bpk/Ibu harus mengeluarkan uang    untuk membeli game konsol yang harganya sampai jutaan rupiah.</td>
                                </tr>
                                <tr height="120">
                                  <td height="120">Belum perlu saat ini</td>
                                  <td width="659">Sangat    di sayangkan jika bapak/ibu melewatkan penawaran ini, karena program ini    penawarannya hanya 1 kali. Bpk/Ibu akan sangat di untungkan karena sudah    tersedia lebih dari 100 game-game yang sangat menarik dan akan di updated    tiap bulannya, Bpk/Ibu sudah bisa langsung bermain game bersama keluarga dari    televisi atau dari PC dan Laptop bpk/Ibu.&nbsp;&nbsp;</td>
                                </tr>
                              </table>
						      <p>&nbsp;</p>
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