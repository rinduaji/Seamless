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
						      <p>Rule : <a href="script_wifi_id.php">Wifi_ID</a></p>
						      <p>&nbsp;</p>
						      <p><a href="script_game_qoo.php">Game_QOO</a> | <a href="script_benefit_game.php">Benefit_Game</a> | <a href="script_indihome_study.php">Indihome_Study</a> | <a href="script_channel_ikonser.php">Channel_I_Konser</a> | <a href="script_wifi_extender.php">Wifi_Extender</a></p>
						      <p>&nbsp;</p>
						      <p>&nbsp;</p>
						      <table border="2" cellpadding="0" cellspacing="0">
                                <col width="124">
                                <col width="151">
                                <col width="802">
                                <tr height="20">
                                  <td height="20" width="124"><div align="center"><strong>RULE</strong></div></td>
                                  <td width="151"><div align="center"><strong>REASON DECLINE</strong></div></td>
                                  <td width="802"><div align="center"><strong>REFERENSI    SCRIPT PENAWARAN</strong></div></td>
                                </tr>
                                <tr height="40">
                                  <td rowspan="21" height="860" width="124"><a href="mailto:seamless@wifi%20id">seamless@wifi id&nbsp;</a></td>
                                  <td>belum perlu saat ini</td>
                                  <td width="802">bapak/ibu    dapat memaksimal kan terlebih dahulu dimana untuk program kami tidak terikat    kontrak namum besar harapan kami ibu/bapak tetap nyaman berlangganan . Dengan    benefit kuota unlimited untuk browsing, media sosial di publik area.</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="151">sudah menggunakan provider lain</td>
                                  <td width="802">untuk    seamless@wifi id bukan untuk menggantikan penggunaan paket data pak/ibu    dimana dapat menghemat penggunaan kuota dengan kec upto 100mps,kuota    unlimited penggunaan setiap hari bebas sepuasnya untuk mengkases internetnya    saat di publik areanya.&nbsp;</td>
                                </tr>
                                <tr height="60">
                                  <td height="60">jarang    menggunakan internet dipublik area&nbsp;</td>
                                  <td width="802">sangat    disayangkan sekali Bapak/Ibu jika dilewatkan karna untuk penggunaan internet    itu sangat dibutuhkan di era sekarang. Ketika Bapak/Ibu urgent,misalnya    kehabisan kuotanya ketika dipublik area Bapak/ibu bisa menggunakan jaringan    internet Seamless@wifi.id&nbsp;</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="151">sudah menggunakan provider lain</td>
                                  <td width="802">apakah    tidak disayangkan bu/pak ini penawarannya hanya 1 kali,selain itu benefit    yang bapak/ibu dapatkan juga banyak sekali dengan tarif yang hemat seperti    keunggulan nya sendiri ibu/bpk bisa menghemat untuk penggunaaan paket data,    karena sudah mendapatkan kecepatan di up to 100 mbps dan kuotanya pun sudah    unlimited sepuasnya</td>
                                </tr>
                                <tr height="20">
                                  <td rowspan="8" height="160">Sudah menggunakan provider lain&nbsp;</td>
                                  <td rowspan="8" width="802">Mohon maaf bapak/ Ibu sangat sayang sekali kalau    tidak digunakan kesempatannya hari ini karena kalau dengan provider lain    biasanya diberikan dengan tarif mahal, namun untuk saat ini bapak/ Ibu&nbsp; diberikan penambahan tarif khusus oleh PT.    TELKOM hanya Rp. 10.000&nbsp; + Pajak 10 %    di luar penggunaan lainnya setiap bulan per perangkatnya, dan bapak / Ibu    sudah mendapatkan kecepatan yg lebih cepat di upto 100mbps dan lebih stabil    lagi untuk diluar rumahnya, ini akan lebih sangat menghemat kuota internet yg    biasa bapak/ibu gunakan biasanya..</td>
                                </tr>
                                <tr height="20"> </tr>
                                <tr height="20"> </tr>
                                <tr height="20"> </tr>
                                <tr height="20"> </tr>
                                <tr height="20"> </tr>
                                <tr height="20"> </tr>
                                <tr height="20"> </tr>
                                <tr height="60">
                                  <td height="60" width="151">Belum perlu saat ini</td>
                                  <td width="802">apakah    tidak disayangkan Pak/Bu ini penawarannya hanya 1 kali, Karna dengan tarif    penawaran yang hemat dan ekonomis Bapak/Ibu akan mendapatkan benefit yang    banyak sekali seperti dapat menghemat pemakaian kuota internet yang biasa    Bapak/Ibu gunakan</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="151">Jarang Keluar rumah</td>
                                  <td width="802">Untuk    penggunaannya dapat digunakan oleh siapa saja Pak/Bu, tidak harus di    perangkat Bapak/Ibu karna dapat digunakan oleh anggota keluarga yang lain    seperti anak, istri atau keluarga yang lainnya.</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="151">perlanggan sudah berlangganan lebih dari 1 gadget</td>
                                  <td width="802">1    user name dan password bisa digunakan maksimal sampai 5 perangkat , jadi    tidak hanya bisa digunakan di perangkat bapak/i saja nanti&nbsp; nya bisa digunakan di keluarga yg lainya yg    sering mobile di publik area</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="151">sudah menggunakan provider lain</td>
                                  <td width="802">untuk    seamless bukan menggantikan paket data nantinya seamless bisa menghemat kuota    datap bapak ketika sedang di publik area di seluruh indonesia</td>
                                </tr>
                                <tr height="40">
                                  <td height="40">jarang    menemukan titik akses pointnya</td>
                                  <td width="802">bapak/i    tidak perlu khawatir jaringan kami sudah tersedia di 150&nbsp; rb titik akses point di publik area di    seluruh&nbsp; indonesia, untuk mengecek    titik akses pointnya bisa mendownload aplikasi wifi.id go</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="151">Jarang keluar rumah</td>
                                  <td width="802">Mungkin    bisa digunakan untuk anggota keluarga yang lainnya pak yang memerlukan,    sangat di sayangkan pak program ini jika di lewatkan karena tidak semua    pelanggan mendapatkan penawaran khusus ini&nbsp;</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="151">Sudah menggunakan provider lain</td>
                                  <td width="802">Dengan    menggunakan Seamless@wifi.id ini Bpk/ibu dapat lebih menghemat pemakaian    kuota data internetnya pak/bu, jadi sayang sekali jika di lewatkan program    penawaran khusus ini</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="151">Belum perlu saat ini</td>
                                  <td width="802">Sayang    sekali jika di lewatkan Bpk/Ibu karena dengan tarif yang hanya Rp.10 ribu    +ppn10% tiap bulan ini Bpk/Ibu sudah bisa internetan di luar rumah (publik    area) dengan kec UP TO 100 Mbps</td>
                                </tr>
                                <tr height="120">
                                  <td height="120" width="151">Kecewa dengan Telkom</td>
                                  <td width="802">Sebelumnya    kami Mohon maaf atas ketidaknyamanan nya Pak/Bu, kami berharap kedepan nya    untuk penggunaan program yang Bpk/Ibu gunakan saat ini bisa berfungsi dengan    baik dan Bpk/ibu tetap terus berlangganan programnya. Jika ada kendala lagi    Bpk/Ibu bisa konfirmasi ke call center kami di 147. Baik Bpk/Ibu saat ini    kami ingin menginformasikan bahwa Bpk/Ibu mendapatkan rekomendasi penawaran    khusus dengan tarif dan benefitnya pun sdh cukup banyak yang Bpk/ibu, jadi    dengan menggunakan Seamless@wifi.id Bpk/Ibu dapat mengakses Internet di luar    rumah dengan tarif yang sangat terjangkau yaitu 10 ribu+ppn10% tiap bulannya    dengan kecepatan UP TO 100 Mbps...</td>
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