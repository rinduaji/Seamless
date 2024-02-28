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
						      <p>Rule : <a href="script_channel_ikonser.php">Channel_I_Konser</a><a href="ref_stbtambahan.php"></a><a href="script_wifi_id.php"></a></p>
						      <p>&nbsp;</p>
						      <p><a href="script_indihome_study.php">Indihome_Study</a><a href="script_channel_ikonser.php"></a> | <a href="script_wifi_extender.php">Wifi_Extender</a> | <a href="script_wifi_id.php">Wifi_ID</a> | <a href="script_game_qoo.php">Game_QOO</a> | <a href="script_benefit_game.php">Benefit_Game</a><a href="script_wifi_id.php"></a></p>
						      <p>&nbsp;</p>
						      <p>&nbsp;</p>
						      <table border="3" cellpadding="0" cellspacing="0">
                                <col width="64">
                                <col width="177">
                                <col width="514">
                                <tr height="21">
                                  <td height="21" width="64"><div align="center"><strong>RULE</strong></div></td>
                                  <td width="177"><div align="center"><strong>REASON DECLINE</strong></div></td>
                                  <td width="837"><div align="center"><strong>REFERENSI    SCRIPT PENAWARAN</strong></div></td>
                                </tr>
                                <tr height="61">
                                  <td rowspan="23" height="1103" width="64">chanel I konser</td>
                                  <td width="177">Belum perlu saat ini</td>
                                  <td width="837">baik, pak/bu    untuk program ini kan hanya diberikan 1 kali penawaran saja . Dimana    programnya dapat menambah acara hiburan dirumah dengan keluarga dapat    menyaksikan live konser musik meski dirumah saja.</td>
                                </tr>
                                <tr height="80">
                                  <td height="80">tarif mahal</td>
                                  <td width="837">sayang    untuk di lewatkan pak/bu dengan mendapat dua kualitas chanel SD dan Hdnya    dengan tarif Rp 15.000+ppn 10%. Dan saat ini bila ibu/bapak bersedia cukup    untuk mengrestart stbnya bapak/ibu sudah dapat menyaksikan ke dua chanelnya    dan pembayaran pun akan di bayarkan bulan depan.</td>
                                </tr>
                                <tr height="60">
                                  <td height="60">Belum perlu    saat ini</td>
                                  <td width="837">apabila    ibu dan bapak jarang untuk menonton tvnya, bapak/ibu dan menyaksikan live    konser dimanapun dengan usee tv gonya dengan menginstal melalui perangkat    gadgetnya.&nbsp;</td>
                                </tr>
                                <tr height="60">
                                  <td height="60">belum butuh    untuk saat ini</td>
                                  <td width="837">saat    disayangkan Bapak/Ibu karna untuk hiburan bersama keluarga dirumah , selain    itu bisa menyaksikan live konser dimanapun dengan aplikasi use tv go hanya    tinggal menginstal melalui gadget&nbsp;</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="177">Belum perlu saat ini</td>
                                  <td width="837">Bisa    dimaksimalkan untuk penggunaan chanel I konsernya, karena penggunaanya tidak    hanya bisa digunakan di Tv, melainkan bisa diakses pada saat diluar rumah    mengguanakan gadget dengan mendonwload Use Tv Go.</td>
                                </tr>
                                <tr height="20">
                                  <td rowspan="11" height="220">BELUM PERLU SAAT INI</td>
                                  <td rowspan="11" width="837">baik pak/bu untuk program nya kan khusus kita    berikan kepada pelanggan terpilih saja jadi tidak semua pelanggan mendapatkan    penawaran yg sama dan untuk program nya pun boleh bpk/ibu maksimalkan    senyaman ny&nbsp; karna untuk penambahannya    pun masih di bulan depan dan nanti ny bpk/ibu sudah bisa menikmati di 2    channel, untuk menyaksikan live musik, konser dari artis2 ternama, dengan    tarif yg sangat ekonomis, silahkan dimaksimaklan terlebih dahulu pak/bu untuk    programnya...</td>
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
                                <tr height="60">
                                  <td height="60" width="177">Usee TV jarang digunakan</td>
                                  <td width="837">Untuk    penggunaannya tidak harus di TV Pak/Bu, karna Bapak/Ibu juga dapat    mengakses/melihat tayangannya melalui aplikasi UseeTV Go dimanapun dan    kapanpun.</td>
                                </tr>
                                <tr height="101">
                                  <td height="101" width="177">Tarif Mahal&nbsp;</td>
                                  <td width="837">Sangat    disayangkan sekali Pak/Bu, karena penawarannya tidak diberikan ke semua    pelanggan hanya diberikan kepada pelanggan terpilih saja. Disini Bapak/Ibu    direkomendasikan langsung dari Telkomnya jadi Bapak/Ibu diberikan tarif    khusus dengan penambahan 15k + ppn 10% per bulan sudah bisa&nbsp; menikmati 2 channelnya selama berlangganan.</td>
                                </tr>
                                <tr height="81">
                                  <td height="81" width="177">Belum    perlu saat ini</td>
                                  <td width="837">tidak mau di    maksimalkan pak/bu dengan tarif penawaran nya kerena tidak semua pelanggan    indihome mendapatkan penawaran yg sama dengan tarif 15k per bulan nya sudah    bisa menonton konser musik dari tanah air hingga manca negaranya</td>
                                </tr>
                                <tr height="60">
                                  <td height="60">tarif mahal</td>
                                  <td width="837">bapak/i    tidak perlu khawatir dengan tarif 15k per bulan nya sudah mendapatkan 2    chanel di&nbsp; SD 459 &mdash; HD 949 dan Channel    i-konser aktif menayangkan konten konser baik live maupun recorded selama 24    jam sehari (selalu on&#2;air)&nbsp;&nbsp;</td>
                                </tr>
                                <tr height="80">
                                  <td height="80">Belum perlu    saat ini</td>
                                  <td width="837">tidak    mau di maksimalkan penawaran nya pak , karena dengan chanel I konser selain    bisa disaksikan di layar TV di rumah, tayangan konser musik juga dapat    disaksikan melalui gadget subscriber iKonser. Dengan begitu, walaupun tidak    berada di rumah , bapak/i dapat menyaksikan konser musik dimanapun berada</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="177">Belum perlu saat ini</td>
                                  <td width="837">Dengan    berlangganan Channel I -Konser ini Selain Bpk/ibu dapat menikmati acara Musik    melalui UseeTV di rumah , Bpk/Ibu dapat juga menikmati melalui Smartphone    melalui UseeTV GO sehingga selain di rumah Bpk/Ibu dapat juga menikmati    Channel I - konsernya&nbsp; di manapun dan    kapanpun bersama anggota keluarga, sayang sekali Bpk/bu jika di lewatkan    penawaran ini</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="177">Tarif Mahal</td>
                                  <td width="837">Bpk/Ibu    tidak perlu khawatir,&nbsp; tarif yang kami    tawarkan cukup murah hanya dengan penambahan Rp.15 Ribu + ppn10% tiap bulan    Bpk/Ibu sudah mendapatkan 2 Channel yaitu Channel 459 SD - 949 HD. Bpk/Ibu    sudah dapat menyaksikan acara live konser musik di rumah bersama keluarga.</td>
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