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
						      <p>Rule : <a href="script_benefit_game.php">Benefit_Game</a><a href="script_wifi_id.php"></a></p>
						      <p>&nbsp;</p>
						      <p><a href="script_indihome_study.php">Indihome_Study</a> | <a href="script_channel_ikonser.php">Channel_I_Konser</a> | <a href="script_wifi_extender.php">Wifi_Extender</a> | <a href="script_wifi_id.php">Wifi_ID</a> | <a href="script_game_qoo.php">Game_QOO</a><a href="script_wifi_id.php"></a></p>
						      <p>&nbsp;</p>
						      <p>&nbsp;</p>
						      <table border="3" cellpadding="0" cellspacing="0">
                                <col width="101">
                                <col width="160">
                                <col width="728">
                                <tr height="20">
                                  <td height="20" width="101"><div align="center"><strong>RULE</strong></div></td>
                                  <td width="171"><div align="center"><strong>REASON DECLINE</strong></div></td>
                                  <td width="807"><div align="center"><strong>REFERENSI    SCRIPT PENAWARAN</strong></div></td>
                                </tr>
                                <tr height="38">
                                  <td rowspan="31" height="1207" width="101">benefit game&nbsp;</td>
                                  <td>belum perlu saat ini&nbsp;</td>
                                  <td width="807">untuk penawaran    ini khusus kita berikan hanya untuk pelanggan terpilih saja pak/bu dan dmana    hanya ada 1 kali penawaran saja, sayang untuk di lewatkan. Dimana ibu dan    bapak dapat redeem vocer di setiap bulannya.</td>
                                </tr>
                                <tr height="60">
                                  <td height="60">tidak tertarik    bermain games</td>
                                  <td width="807">tidak    disayangkan Bapak/ibu untuk penawaran ini bisa dimaksimalkan terlebih dahulu    karna untuk bermain games ini digunakan bisa untuk mengasah fikiran,    menghilangkan jenuh dan terdapat games&nbsp;    yang bisa bermain bersama keluarga, orang orang baru, bahkan berbeda    tempat dengan kita pun bisa digunakan.</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="171">Belum perlu saat ini</td>
                                  <td width="807">Ibu/bapak    untuk programnya memang tidak semua kami hubungi, jadi hanya pelanggan2 yg    direkomndasikan langsung dari telkom saja yang bisa mendapatkan program ini</td>
                                </tr>
                                <tr height="20">
                                  <td rowspan="11" height="220">JARANG DIGUNAKAN</td>
                                  <td rowspan="11" width="807">Sangat disayangkan ya pak/bu jika dilewatkan    penawarannya, karna dengan tarif yg sangat ekonomis penawaran ini dapat    menghibur bpk/keluarga dirumah ketidak sedang berlibur dan bersantai dirumah,    programnya bisa dimaksimalkan telebih dahulu pak/bu, agar bpk/ibu bisa    mengetahui kelebihan dari penawaran ini..</td>
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
                                  <td height="80" width="171">Belum perlu saat ini</td>
                                  <td width="807">Sayang    sekali apabila dilewatkan penawaran ini Pak/Bu. Karena program ini tidak    terikat, Bapak/Ibu bisa evaluasi benefit dan manfaatnya untuk tarifnya akan    dibayarkan mulai bulan depan. kedepannya kebijakan kami kembalikan ke    Bapak/Ibu, namun besar harapan kami Bapak/Ibu tetap nyaman dan berlangganan    karena manfaat dan benefitnya sangat banyak untuk Bapak/Ibu dan keluarga</td>
                                </tr>
                                <tr height="80">
                                  <td height="80">belum perlu    saat ini&nbsp;</td>
                                  <td width="807">tidak    mau di maksimalkan terlebih dulu pak/bu untuk penawaran yg di berikan karena    tidak semua pelanggan mendapatkan penawaran yang sama , karena tarif yg di    berikan cukup ekonomis dan bukan tarif promo , melainkan tetap selama    berlangganan, dan program nya tidak mengikat , kebijakan kami kembalikan    sepenuh kepada pelanggan, namun tetap besar harapan kami agar bapak/i tetap    nyaman berlangganan.</td>
                                </tr>
                                <tr height="60">
                                  <td height="60">tarif    mahal&nbsp;</td>
                                  <td width="807">bapak/I    tidak perlu khawatir untuk tarif di berikan cukup ekonomis( sebutkan tarif    game yg di tawarkan), karena Benefit Game yang diberikan sangat bervariatif    berupa Exclusive item, skin, Double Experience, Gold yang harganya bisa sampe    ratusan ribu jika beli langsung didalam gamenya atau di marketplace.</td>
                                </tr>
                                <tr height="60">
                                  <td height="60">jarang&nbsp; main game</td>
                                  <td width="807">kerena    mengingat benefit&nbsp; game yang kami    berikan sangat&nbsp; bervariatif , jadi&nbsp; bisa digunakan tidak&nbsp; hanya di perangkat bapak/I saja nantinya    bisa di main kan di perangkat keluarga yg lain mengingat tarif yg berikan    cukup ekonomis dan tidak semua pelanggan mendapatkan penawaran yang sama&nbsp;</td>
                                </tr>
                                <tr height="60">
                                  <td height="60">Belum perlu    saat ini</td>
                                  <td width="807">Sayang    sekali Pak/Bu karena tidak semua pelanggan mendapatkan penawaran khusus ini,    Bpk/Ibu sudah mendapatkan Benefit Game yang diberikan antara lain berupa    Exclusive item, skin, Double Experience, Gold yang harganya bisa sampai    ratusan ribu jika beli langsung didalam gamenya atau di marketplace.</td>
                                </tr>
                                <tr height="81">
                                  <td height="81">Tarif Mahal</td>
                                  <td width="807">Sangat    sayang sekali Pak/ibu jika dilewatkan program penawaran ini karena tidak    semua pelanggan mendapatkan penawarannya salah satunya di nomor Bpk/ibu. Dan    untuk tarif yang kami tawarkan ini harganya sangat terjangkau dengan hanya    Rp....... dan bukan tarif promo Pak/ibu jadi tarifnya akan tetap selama    Bpk/ibu berlangganan Indihomenya.</td>
                                </tr>
                                <tr height="55">
                                  <td height="55" width="171">Belum    perlu saat ini</td>
                                  <td width="807">Mungkin saat ini&nbsp; blm    begitu memerlukan tp&nbsp; kdpnnya jika&nbsp; memerlukan sewaktu2, tdk perlu    antri atau menghubungi chanel telkom untuk diberikan penawaran ini , tidak    semua pelanggan mendapatkan penawaran spesial dengan harga spesial juga&nbsp;</td>
                                </tr>
                                <tr height="55">
                                  <td height="55" width="171">Kecewa    dengan Telkom</td>
                                  <td width="807">mohon maaf sebelumnya pak/bu    atas ketidaknyamanan yang bpk/ibu rasakan, namun saat ini Telkom selalu    berupaya untuk memperbaiki kualiltas layanannya, dan karena ini programnya    adalah penawaran , bukan diberikan kepada semua pelanggan telkom jdi sangat    disayangkan jika programnya dilewatkan.&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td rowspan="5" height="101" width="171">Kecewa dengan Telkom</td>
                                  <td width="807">Baik pak, sebelumnya maaf ya pak    atas ketidaknyamanan bapak</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="807">dengan    keluarga. Nanti kita akan bantu proses terlebih dahulu&nbsp; untuk kendala    bpk dari</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="807">sistem    kita ya pak. Namun apabila dalam 2 atau 3 hari kedepan</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="807">belum    ada tindak lanjut atas kendalanya, boleh langsung menghubungi</td>
                                </tr>
                                <tr height="21">
                                  <td height="21" width="807">kita ya    pak ke layanan call center kita di 147.</td>
                                </tr>
                                <tr height="73">
                                  <td height="73" width="171">Tidak    menarik/ Tidak Bermain Game</td>
                                  <td width="807">penawarannya kan hanya berlaku    hari ini jd bisa dimaksimalkan, jika kedepan ibu/bapak sdh merasakan manfaat    dari benefit game tersebut (infokan benefit) dan jika kedepan ibu/bapak suka    boleh teruskan berlangganan sampai kapanpun dan jika ada permintaan/kebijakan    lain kami kembalikan kepada ibu/bapak selaku pengguna layanan</td>
                                </tr>
                                <tr height="37">
                                  <td height="37" width="171">Tarif    Mahal</td>
                                  <td width="807">untuk program yg kami sampaikan    khusus untuk pelanggan terpilih yg kami hubungi saat ini.dan tarif yang kita    berikan juga tarif khusus hanya penambahan Rp.xx +ppn 10%</td>
                                </tr>
                                <tr height="64">
                                  <td height="64" width="171">Tarif    Mahal</td>
                                  <td width="807">Sayang Pak kalo di lewatkan,    karena untuk tarif ekonomis ini tidak setiap hari ada dan tidak semua    pelanggan diberikan penawaran yang sama, tarif nya juga berlaku selama bapak    berlanganan bukan promo, sudah mendapatkan tarif ekonomis dan terjangkau.</td>
                                </tr>
                                <tr height="43">
                                  <td height="43" width="171">Belum    perlu saat ini</td>
                                  <td width="807">dan program yg kami sampaikan    untuk saat ini saja,karena kami tidak menjamin dilain waktu bpk/ibu masih    mendapatkan program yg sama dgn tarif khususnya.</td>
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