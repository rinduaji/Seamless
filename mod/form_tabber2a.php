<?php
require_once("../deft_nav.php");
include("../assets/conn.php");
if ($_GET) {
    extract($_GET, EXTR_OVERWRITE);
}
if ($_POST) {
    extract($_POST, EXTR_OVERWRITE);
}
$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$jb = $_SESSION["jb"];
$ids = $id;
$not_handel = 0;
$tgl = date("Y-m-d H:i:s");

$query = "SELECT a.id,a.tgl,a.login,a.witel,a.fastel,a.nama_dm,a.tlp,a.reg,a.jenis,a.`status`,a.kategori,a.reason,a.segment,a.relasi,a.penerima,a.ket,
a.follow,a.upd_qco,a.rec_qco,a.upd_tl,a.rec_tl,a.upd_suport,a.rec_suport,a.tgl_qco1,a.tgl_tl,a.tgl_suport,a.valid,a.input,a.prof_hp,a.prof_email,a.prof_ttl,
a.prof_hoby,a.prof_agama,a.prof_facebook,a.add_on_tsel,a.zone,a.add_on_wifi,b.`name`,c.poin
FROM app_tam_data2 AS a INNER JOIN cc147_main_users AS b ON a.login = b.username INNER JOIN app_tam_jenis AS c ON a.jenis = c.keterangan WHERE a.id = '$id'";
//echo $query;
$hasil = mysqli_query($con, $query);
$data = mysqli_fetch_array($hasil);
//==============================cek handel=================================
//if($jb=="Tabber"){
//$N_taber="SELECT count(*) as jml FROM app_tam_data2 WHERE follow ='2' and `upd_qco` = '$login'";
//$Ne_taber=mysqli_query($con,$N_taber);
//$h_taber=mysqli_fetch_row($Ne_taber);
//}
//if ($h_taber[0] > 60 && $data['upd_qco']==""){
//clearstatcache();
//$location="form_tabber.php?id=$ids";		
//echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
//echo "<div class=\"alert alert-danger\">Anda Melebihi Batas Aproval!</div>";
//}
//else 
if ($data['upd_qco'] <> "" && $data['upd_qco'] <> $login) {
    //clearstatcache();
    $location = "form_tabber2.php";
    //echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
    echo "<div class=\"alert alert-danger\">Approval ini sudah di handel $data[upd_qco]</div>";

    $not_handel = 1;
} else if ($login == '') {
    //clearstatcache();
    $location = "form_tabber2.php";
    //echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
    echo "<div class=\"alert alert-danger\">Session user terlogout</div>";

    $not_handel = 1;
} else {
    if ($login <> '') {
        $sql = "UPDATE `app_tam_data2` SET upd_qco='$login' WHERE `id`='$ids'";
        $query = mysqli_query($con, $sql);
    }
}

// $query = "SELECT a.id,a.tgl,a.login,a.witel,a.fastel,a.nama_dm,a.tlp,a.reg,a.jenis,a.`status`,a.kategori,a.reason,a.ket,b.`name`,a.upd_qco,c.poin
// FROM app_tam_data2 AS a INNER JOIN cc147_main_users AS b ON a.login = b.username INNER JOIN app_tam_jenis AS c ON a.jenis = c.keterangan WHERE a.id = '$id'";
// //echo $query;
// $hasil = mysqli_query($con, $query);
// $data = mysqli_fetch_array($hasil);
if (isset($_POST['Save'])) {
    if ($rec_qco == "" OR $greating == "" OR $confirm == "" OR $apresiasi == "" OR $experience == "" OR $identifikasi == "" OR $penawaran == "" OR 
    $produk == "" OR $benefit == "" OR $respon == "" OR $kontrak == "" OR $closing == "") {
        clearstatcache();
        $location = "form_tabber2.php?id=$ids";
        echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL=' . $location . '">';
        echo "<div class=\"alert alert-danger\">Rekomendasi QCO Harus Diisi!</div>";
    } else {
        $pn = "$data[poin]";

        if ($greating == "Not Ok" OR $confirm == "Not Ok" OR $apresiasi == "Not Ok" OR $experience == "Not Ok" OR $identifikasi == "Not Ok" OR $penawaran == "Not Ok" OR 
        $produk == "Not Ok" OR $benefit == "Not Ok" OR $respon == "Not Ok" OR $kontrak == "Not Ok" OR $closing == "Not Ok" OR $script == "Not Ok" OR $kkontak == "Not Ok" OR $dosir == "Not Ok" OR $kualifikasi == "Not Ok" OR $konfirmasi == "Not Ok" ) {
            $sql = "UPDATE `app_tam_data2` SET follow = '5' , `rec_qco`='$rec_qco', upd_qco='$login' , tgl_qco1='$tgl' , valid='Not Valid', prof_hp='$pn' WHERE `id`='$ids'";
            $query = mysqli_query($con, $sql);
            $sql1 = "INSERT INTO `app_tam_data_trans` (tgl, login, witel, fastel, nama_dm, tlp, reg, jenis, status, kategori, reason, segment, relasi, 
                    penerima, ket, follow, upd_qco, rec_qco, upd_tl, rec_tl, upd_suport, rec_suport, tgl_qco1, tgl_tl,tgl_suport, valid, input, prof_agama, 
                    prof_facebook, add_on_tsel, greating, confirm, apresiasi, experience, identifikasi, penawaran, produk, benefit, respon, kontrak, closing, 
                    id_data2, prof_hp,script,kkontak,dosir,kualifikasi,konfirmasi) VALUES ('" . $data['tgl'] . "', '" . $data['login'] . "', '" . $data['witel'] . "', '" . $data['fastel'] . "', '" . $data['nama_dm'] . "', '"
                . $data['tlp'] . "', '" . $data['reg'] . "', '" . $data['jenis'] . "', '" . $data['status'] . "', '" . $data['kategori'] . "', '" . $data['reason'] . "', '"
                . $data['segment'] . "', '" . $data['relasi'] . "', '" . $data['penerima'] . "', '" . $data['ket'] . "', '5', '$login', '$rec_qco', '" . $data['upd_tl'] . "', '" 
                . $data['rec_tl'] . "', '" . $data['upd_suport'] . "', '" . $data['rec_suport'] . "', '$tgl', '". $data['tgl_tl'] . "', '" 
                . $data['tgl_suport'] . "', 'Not valid', '" . $data['input'] . "', '" . $data['prof_agama'] . "', '"
                . $data['prof_facebook'] . "', '" . $data['add_on_tsel'] . "', '$greating', '$confirm', '$apresiasi', '$experience', '$identifikasi', '$penawaran', 
                '$produk', '$benefit', '$respon', '$kontrak', '$closing', '$ids', '$pn','$script','$kkontak','$dosir','$kualifikasi','$konfirmasi')";
            $query1 = mysqli_query($con, $sql1);
            
            clearstatcache();
            $location = "myhandel.php";
            echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL=' . $location . '">';
        } else {
            $sql = "UPDATE `app_tam_data2` SET follow = '6' , `rec_qco`='$rec_qco', upd_qco='$login' , tgl_qco1='$tgl' , valid='Valid', prof_hp='$pn' WHERE `id`='$ids'";
            $query = mysqli_query($con, $sql);
            var_dump($rec_qco);
            $sql1 = "INSERT INTO `app_tam_data_trans` (tgl, login, witel, fastel, nama_dm, tlp, reg, jenis, status, kategori, reason, segment, relasi, 
                    penerima, ket, follow, upd_qco, rec_qco, upd_tl, rec_tl, upd_suport, rec_suport, tgl_qco1, tgl_tl,tgl_suport, valid, input, prof_agama, 
                    prof_facebook, add_on_tsel, greating, confirm, apresiasi, experience, identifikasi, penawaran, produk, benefit, respon, kontrak, closing, 
                    id_data2, prof_hp,script,kkontak,dosir,kualifikasi,konfirmasi) VALUES ('" . $data['tgl'] . "', '" . $data['login'] . "', '" . $data['witel'] . "', '" . $data['fastel'] . "', '" . $data['nama_dm'] . "', '"
                . $data['tlp'] . "', '" . $data['reg'] . "', '" . $data['jenis'] . "', '" . $data['status'] . "', '" . $data['kategori'] . "', '" . $data['reason'] . "', '"
                . $data['segment'] . "', '" . $data['relasi'] . "', '" . $data['penerima'] . "', '" . $data['ket'] . "', '6', '$login', '$rec_qco', '" . $data['upd_tl'] . "', '" 
                . $data['rec_tl'] . "', '" . $data['upd_suport'] . "', '" . $data['rec_suport'] . "', '$tgl', '". $data['tgl_tl'] . "', '" 
                . $data['tgl_suport'] . "', 'Valid', '" . $data['input'] . "', '" . $data['prof_agama'] . "', '"
                . $data['prof_facebook'] . "', '" . $data['add_on_tsel'] . "', '$greating', '$confirm', '$apresiasi', '$experience', '$identifikasi', '$penawaran', 
                '$produk', '$benefit', '$respon', '$kontrak', '$closing', '$ids', '$pn','$script','$kkontak','$dosir','$kualifikasi','$konfirmasi')";
            $query1 = mysqli_query($con, $sql1);
            
            clearstatcache();
            $location = "myhandel.php";
            echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL=' . $location . '">';
        }
    }
}

?>
<!doctype html>
<html lang="en">
<title>App SEAMLESS</title>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-plain">
                    <div class="header">
                        <h4 class="title">Form QCO SEAMLESS</h4>
                    </div>

                    <form id='input' name="demoform" action='form_tabber2.php?id=<?php echo "$ids"; ?>' method='post' accept-charset='UTF-8'>
                        <div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Login Agent</label><br>
                                        <input class="form-control" type="text" name="login" value="<?php echo $data['login']; ?>" readonly />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Nama Agent</label><br>
                                        <input class="form-control" type="text" name="login" value="<?php echo $data['name']; ?>" readonly />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Tanggal</label><br>
                                        <input class="form-control" type="text" name="tgl" value="<?php echo $data['tgl']; ?>" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Witel</label><br>
                                        <input class="form-control" type="text" name="pelanggan" value="<?php echo $data['witel']; ?>" readonly />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">No Fastel</label>
                                        <input class="form-control" type="text" name="fastel" value="<?php echo $data['fastel']; ?>" readonly />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Nama DM/ Pemilik</label>
                                        <input class="form-control" type="text" name="nama_dm" value="<?php echo $data['nama_dm']; ?>" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">No Telepon</label>
                                        <input class="form-control" type="text" name="tlp" value="<?php echo $data['tlp']; ?>" readonly />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Regional</label>
                                        <input class="form-control" type="text" name="reg" value="<?php echo $data['reg']; ?>" readonly />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Jenis Call / Poin</label>
                                        <input class="form-control" type="text" name="jenis" value="<?php echo $data['jenis'];
                                                                                                    echo ' / ';
                                                                                                    echo $data['poin']; ?>" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Status call</label>
                                        <input class="form-control" type="text" name="status" value="<?php echo $data['status']; ?>" readonly />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Kategori</label>
                                        <input class="form-control" type="text" name="kategori" value="<?php echo $data['kategori']; ?>" readonly />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Reason Call</label>
                                        <input class="form-control" type="text" name="reason" value="<?php echo $data['reason']; ?>" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Keterangan Agent</label>
                                    <textarea class="form-control" name="ket" rows="5"><?php echo $data['ket']; ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Rekomendasi QCO</label>
                                    <textarea class="form-control" name="rec_qco" rows="5"></textarea>
                                </div>
                            </div>
							 <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Penilaian Parameter QCO</label>
							 </div>
                                </div>
                            </div>			
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Greating</label>
                                        <select class="form-control" name="greating" style="width: 25%">
                                            <option value="">--- Pilihan ---</option>
                                            <option value="Ok">Ok</option>
                                            <option value="Not Ok">Not Ok</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Konfirmasi No. Fastel Dan Penanggung Jawab</label>
                                        <select class="form-control" name="confirm" style="width: 25%">
                                            <option value="">--- Pilihan ---</option>
                                            <option value="Ok">Ok</option>
                                            <option value="Not Ok">Not Ok</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Apresiasi</label>
                                        <select class="form-control" name="apresiasi" style="width: 25%">
                                            <option value="">--- Pilihan ---</option>
                                            <option value="Ok">Ok</option>
                                            <option value="Not Ok">Not Ok</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Experience Pelanggan</label>
                                        <select class="form-control" name="experience" style="width: 25%">
                                            <option value="">--- Pilihan ---</option>
                                            <option value="Ok">Ok</option>
                                            <option value="Not Ok">Not Ok</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Identifikasi Kebutuhan Pelanggan</label>
                                        <select class="form-control" name="identifikasi" style="width: 25%">
                                            <option value="">--- Pilihan ---</option>
                                            <option value="Ok">Ok</option>
                                            <option value="Not Ok">Not Ok</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Penawaran</label>
                                        <select class="form-control" name="penawaran" style="width: 25%">
                                            <option value="">--- Pilihan ---</option>
                                            <option value="Ok">Ok</option>
                                            <option value="Not Ok">Not Ok</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Keunggulan Produk</label>
                                        <select class="form-control" name="produk" style="width: 25%">
                                            <option value="">--- Pilihan ---</option>
                                            <option value="Ok">Ok</option>
                                            <option value="Not Ok">Not Ok</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Benefit</label>
                                        <select class="form-control" name="benefit" style="width: 25%">
                                            <option value="">--- Pilihan ---</option>
                                            <option value="Ok">Ok</option>
                                            <option value="Not Ok">Not Ok</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Berikan Kesempatan Pelanggan Merespon</label>
                                        <select class="form-control" name="respon" style="width: 25%">
                                            <option value="">--- Pilihan ---</option>
                                            <option value="Ok">Ok</option>
                                            <option value="Not Ok">Not Ok</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Kontrak</label>
                                        <select class="form-control" name="kontrak" style="width: 25%">
                                            <option value="">--- Pilihan ---</option>
                                            <option value="Ok">Ok</option>
                                            <option value="Not Ok">Not Ok</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Closing</label>
                                        <select class="form-control" name="closing" style="width: 25%">
                                            <option value="">--- Pilihan ---</option>
                                            <option value="Ok">Ok</option>
                                            <option value="Not Ok">Not Ok</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
							<div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Agent tidak menggunakan bahasa sesuai script?</label>
                                        <select class="form-control" name="script" style="width: 25%">
                                            <option value="">--- Pilihan ---</option>
                                            <option value="Ok">Ok</option>
                                            <option value="Not Ok">Not Ok</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
							<div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Agent salah input data / K-Kontak?</label>
                                        <select class="form-control" name="kkontak" style="width: 25%">
                                            <option value="">--- Pilihan ---</option>
                                            <option value="Ok">Ok</option>
                                            <option value="Not Ok">Not Ok</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
							<div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Agent tidak mengecek item dossier?</label>
                                        <select class="form-control" name="dosir" style="width: 25%">
                                            <option value="">--- Pilihan ---</option>
                                            <option value="Ok">Ok</option>
                                            <option value="Not Ok">Not Ok</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
							<div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Pelanggan yang ditawarkan tdk sesuai dgn kualifikasi utk Produk Wifi Extender dan Pijar Belajar?</label>
                                        <select class="form-control" name="kualifikasi" style="width: 25%">
                                            <option value="">--- Pilihan ---</option>
                                            <option value="Ok">Ok</option>
                                            <option value="Not Ok">Not Ok</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
							<div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Agent tidak konfirmasi 6A dan 6B?</label>
                                        <select class="form-control" name="konfirmasi" style="width: 25%">
                                            <option value="">--- Pilihan ---</option>
                                            <option value="Ok">Ok</option>
                                            <option value="Not Ok">Not Ok</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
							
                        </div>
                </div>
                <?php if ($not_handel == 1 or $login == '') {
                ?><a href="http://localhost/apptam/mod/approve.php">
                        <input type="button" value="Back" />
                    </a><?php
                    } else if ($not_handel == 0 or $login <> '') {
                        ?>
                    <input type="submit" name="Save" class="btn btn-info" value="Save">
                    <input type="reset" name="Clear" class="btn btn-info" value="Clear">
                <?php } ?>

                </form>

            </div>
        </div>

    </div>
</div>
</div>
<?php require_once("../deft_foo.php"); ?>