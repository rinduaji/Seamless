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
    <style type="text/css">
<!--
.style1 {font-weight: bold}
-->
    </style>
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
						      <p>Rule : <a href="script_wifi_extender.php">Wifi_Extender</a><a href="ref_upgrade.php"></a><a href="script_wifi_id.php"></a></p>
						      <p>&nbsp;</p>
						      <p><a href="script_indihome_study.php">Indihome_Study</a><a href="script_channel_ikonser.php"></a> | <a href="script_wifi_id.php">Wifi_ID</a> | <a href="script_game_qoo.php">Game_QOO</a> | <a href="script_benefit_game.php">Benefit_Game</a><a href="script_wifi_id.php"></a> | <a href="script_channel_ikonser.php">Channel_I_Konser</a></p>
						      <p>&nbsp;</p>
						      <p>&nbsp;</p>
						      <table border="3" cellpadding="0" cellspacing="0">
                                <col width="64">
                                <col width="155">
                                <col width="978">
                                <tr height="20">
                                  <td height="20" width="64"><div align="center"><strong>RULE</strong></div></td>
                                  <td width="155"><div align="center"><strong>REASON DECLINE</strong></div></td>
                                  <td width="978"><div align="center"><strong>REFERENSI    SCRIPT PENAWARAN</strong></div></td>
                                </tr>
                                <tr height="40">
                                  <td rowspan="21" height="720" width="64">wifi extender</td>
                                  <td>tarif mahal</td>
                                  <td width="978">pembayaran    kan masih untuk di bulan depan pak/bu dengan bulan pertamannya masih pro rata    dan berikutnya baru terhitung full Rp 35.000+ppn10% perperangkatnya dengan    tarif tetap, dan bapak/ibu pun pemasangannya akan di bantu pihak teknisi kami    tanpa dikenakan biaya pemasangannya.&nbsp;</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="155">belum perlu saat ini&nbsp;</td>
                                  <td width="978">dengan    penggunaan wifi extendernya ini dapat memperluas jaringan internetnya dirumah    sehingga pengguaan internet di titik area dirumah lainnya bisa lancar untuk    akses internetya.&nbsp;</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="155">sudah menggunakan provider lain</td>
                                  <td width="978">ibu/bapak    dapat memaksimalkan terlebih dahulu dengan penggunannya dimana program kami    pun tidak terikat kontrak namun besar harapan kami ibu dan bapak tetap nyaman    berlangganan untuk menambah akses point penggunaan internet di ruangan yang    berbeda dirumah dan dapat memprluas jaringan hingaa 15meter. dan penggunann    pun senyaman nyaman ibu/bapak.&nbsp;</td>
                                </tr>
                                <tr height="60">
                                  <td height="60">Tarif Mahal</td>
                                  <td width="978">untuk    saat ini program yang kami tawarkan hanya untuk pelanggan terpilih kami pak,    dan untuk alatnya pun sudah canggih dan modern guna memperluas jaringan    internet dirumah jadi&nbsp; Bapak/ibu bisa    memaksimalkan penggunaanya hanya 35rb +ppn 10% perperangkat perbulan untuk    pemasangannya pun tidak perlu khawatir&nbsp;    dibantu oleh petugas kami jadi bapak/ibu hanya tinggal menggunakan    saja</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="155">Tarif Mahal</td>
                                  <td width="978">Pembayarannya    kan mulai bulan depan dan itupun masih dikenakan tarif prorata atau belum    full penambahannya baru bulan kedual dikenakan tarif full di 35ribu + ppn    10%. Dan untuk pemasangan sudah tidak dikenakan biaya kembali jadi bapak&nbsp; ibu tidak perlu khawatir.</td>
                                </tr>
                                <tr height="20">
                                  <td rowspan="11" height="220">Kecewa dengan Telkom</td>
                                  <td rowspan="11" width="978"><span class="style1"><em>Sebelumnya mohon maaf atas ketidaknyamanannya, program ini kami berikan untuk meningkatkan kenyamanan pelanggan, kami yakin bpk dan keluarga akan nyaman untuk penggunannnya, karna nantinya dengan menggunakan wifi extender ini penggunaan internet bapak akan lebih luas jangkauannya, sehingga dapat mengcover area rumah yang sebelum nya belum terjangkau sinyal wifi. Khusus bpk dan keluarga juga tidak di kenakan tarif normal, namun diberikan tarif khusus yg jauh lebih hemat, jika bpk bersedia dgn pernawaran ini maka silahkan bapak/ibu maksimalkan terlebih dahulu penggunaannya dengan tarif penawaran yg di berikan hanya di 35k+PPN 11% per bulan , untuk tarif penambahannya akan ditagihkan dibulan depan namun untuk programnya sudah bisa bapak gunakan 3 hari kedepan..</em>.<br>                                  
                                  </span></td>
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
                                <tr height="40">
                                  <td height="40">tarif mahal</td>
                                  <td width="978">tarif    yg di berikan cukup ekonomis dengan tarif 35k per bulanya Dapat memperluas    area wifi hingga max. 15 meter (tergantung kondisi ruangan dalam    rumah),sehingga secara umum cakupan dari WiFi yang ada di ruangan atau area    akan menjadi lebih luas</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="155">belum perlu saat ini&nbsp;</td>
                                  <td width="978">tidak    mau dimaksimalkan dulu pak /bu penawaran yg di berikan ,kerena tidak semua    pelanggan mendapatkan penawaran yang sama dan tidak perlu khawatir program    tidak mengikat semua kebijakan kami kembali kepada pelanggan namun tetap&nbsp;&nbsp; bersar harapan kami agar bapak ibu tetap    nyaman berlangganan</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="155">sudah menggunakan provider lain</td>
                                  <td width="978">dengan    menggunakan wifi extender ini akan memudah kan&nbsp; Bapak/Ibu agar tetap bisa menikmati    jangkauan yang lebih luas sekalipun jauh dari ONT.dan akan lebih mudah biaya    akan di jadi satukan dengan tagihan indihome setiap bulan nya dengan tarif    nya tetap selama berlangganan dan tidak ada biaya instalasi, nanti nya akan    di pasangkan oleh tekini indihome nya</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="155">Tarif Mahal</td>
                                  <td width="978">Bpk/Ibu    tidak perlu khawatir tarif penambahan Rp.35 ribu+ppn10% ini bukan tarif promo    yang mungkin sewaktu waktu bisa berubah, tarif ini sudah tetap pak/bu selama    Bpk/ibu berlangganan Indihome dan pemasangannya nanti tidak ada biaya    Instalasi lagi</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="155">Belum perlu saat ini</td>
                                  <td width="978">Tidak    di maksimalkan dahulu Bpk/Ibu dengan tarif yang hanya Rp.35 ribu+ppn10% tiap    bulannya. karena dengan Wifi extender ini tentunya Bpk/Ibu dapat lebih    leluasa mengakses Internet di tempat yang sebelumnya tidak terjangkau signal    wifinya. Pemasangannya juga nanti akan di bantu oleh petugas kami dan tidak    perlu harus membobok tembok atau menarik kabel lagi karena&nbsp; tinggal di colokkan ke stop kontak.</td>
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