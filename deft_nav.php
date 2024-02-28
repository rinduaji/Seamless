<!doctype html>
<html lang="en">
<title>App Seamless</title>
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../assets/img/Infomedia.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />

	<!-- Bootstrap core CSS     -->
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

	<!-- Animation library for notifications   -->
	<link href="../assets/css/animate.min.css" rel="stylesheet"/>

	<!-- Light Bootstrap Table core CSS    -->
	<link href="../assets/css/bootstrap-dashboard-light.css" rel="stylesheet"/>

	<!-- Fonts and icons     -->
	<link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
	
	<link href="../agency/awesome/css/font-awesome.min.css" rel="stylesheet" type='text/css'/>
	
	
	<!-- Datepicker and auto complete   -->
	<link rel="stylesheet" href="../assets/css/datepicker-jquery-ui.css"/>
	<link rel="stylesheet" href="../assets/css/awesomplete.css" />
	<script src="../assets/js/awesomplete.js" async></script>
	<script src="../assets/js/jquery-112.js"></script>
	<script src="../assets/js/jquery-ui.js"></script>
	<script src="../assets/js/canvasjs.min.js"></script>

<?php

	include("../assets/conn.php"); include("../assets/script.php"); 
	
?>
</head>

<body>

<div class="wrapper">
	<div class="sidebar" style="background-color: #8FBC8F" data-color="Dark Sea Green" data-image="">

	<!--
		Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
		Tip 2: you can also add an image using data-image tag
	-->
		
		
		<div class="sidebar-wrapper container-fluid" style="overflow:auto;">
			<span calss="imgContainer" >
			<img src="../agency/img/info4.png">
			</span>
			<ul class="nav">
			
				
				
				
				<?php  
				if ($_SESSION['jabatan']=='Agent TAM' ) {
				?>
				<li><a href="dashboard.php"><i class="pe-7s-graph3"></i><p>Dashboard</p></a></li>
				<li><a data-toggle="collapse" href="#coll1" ><i class="pe-7s-note"></i><p>Menu Agent<b class="caret"></b></p></a>
					<div class="collapse" id="coll1">
						<ul class="nav">
							<li><a href="input2.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Input CWC</a></li>
							<li><a href="input_dapros.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Input Dapros CWC</a></li>
							<li><a href="form_agent.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;List Order Transaksi</a></li>
							<li><a href="list_recall.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;List Recall</a></li>
							<li><a href="list_follow.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;List Follow Up</a></li>
							<li><a href="form_rekap_agent.php" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rekap Call Agent</a></li>
							<li><a href="cek_jawaban_salah_agent.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cek Jawaban Quiz</a></li>
							<li><a href="script_wifi_id.php" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Script Anti Decline</a></li>
							<li><a href="news.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;News</a></li>
						</ul>
					</div>
				</li>
				<li><a data-toggle="collapse" href="#coll5"><i class="pe-7s-note"></i>
								<p>Menu Document Control<b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll5" style="font-size:12px;">
								<ul class="nav">
									<li><a href="report_dokumen.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dokumen</a></li>
								</ul>
							</div>
						</li>
				
				<?php }  else if ($_SESSION['jabatan']=='Koordinator TAM' || $_SESSION['jabatan']=='Supervisor TAM DCS' || $_SESSION['jabatan']=='Tabber TAM' ){	?>
				<li><a href="dashboard_staff.php"><i class="pe-7s-graph1"></i><p>Dashboard</p></a></li>
				<li><a data-toggle="collapse" href="#coll3" ><i class="pe-7s-display2"></i><p><?php Echo $_SESSION['jb'];?><b class="caret"></b></p></a>
					<div class="collapse" id="coll3">
						<ul class="nav">
						    <li><a href="input2.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Input CWC</a></li>
							<li><a href="approve.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Approve</a></li>
							<li><a href="approve_recall.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Approve Recall QCO</a></li>
							<li><a href="form_export.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export Data</a></li>
							<li><a href="form_export2.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export Tapping QCO</a></li>
							<!--<li><a href="form_export_dapros.php">Export Dapros</a></li>-->
							<li><a href="form_agent.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;List Order Transaksi</a></li>							
							<li><a href="list_totrecall.php?mode=list">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;List Agent Recall </a></li>							
							<li><a href="myhandel.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Myhandle</a></li>
							<li><a href="form_rekap_agent.php" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rekap Call Agent</a></li>
							<li><a href="rekap_site.php" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rekap Call Agree</a></li>
							<!--<li><a href="form_rekap_dapros.php">Rekap Dapros</a></li>-->
							<li><a href="form_tot_approve.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rekap QCO</a></li>
							<?php
							if($_SESSION['jabatan']=='Supervisor TAM DCS') {
							?>
								<li><a href="list_quiz_update.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aktivasi Login Agent</a></li>
								<li><a href="report_quiz.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Quiz</a></li>
								<li><a href="cek_jawaban_salah.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cek Jawaban Quiz</a></li>
							<?php
							}
							?>
							<li><a href="script_wifi_id.php" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Script Anti Decline</a></li>
							<li><a href="news.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;News</a></li>
						</ul>
					</div>
				</li>				
			    <li><a data-toggle="collapse" href="#coll5"><i class="pe-7s-note"></i>
								<p>Menu Document Control<b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll5" style="font-size:12px;">
								<ul class="nav">
									<li><a href="report_dokumen.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dokumen</a></li>
								</ul>
							</div>
						</li>
				
				<?php } else if ($_SESSION['jabatan']=='Analisis' ){
				?>
				<li><a href="dashboard_staff.php"><i class="pe-7s-graph"></i><p>Dashboard</p></a></li>
				<li><a data-toggle="collapse" href="#coll4" ><i class="pe-7s-home"></i><p>Menu Analisis<b class="caret"></b></p></a>
					<div class="collapse" id="coll4">
						<ul class="nav">
							<li><a href="dashboard_activity.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard Activity</a></li>
							<li><a href="dashboard_convertion2.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard Convertion</a></li>
                            <li><a href="dashboard_bestppa.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard Best PPA</a></li>							
							<li><a href="dashboard_pparule.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard PPA Rule</a></li>
							<li><a href="dashboard_ppasite.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard PPA Site</a></li>
							
						</ul>
					</div>
				</li>
				<li><a data-toggle="collapse" href="#coll3" ><i class="pe-7s-display2"></i><p>Menu SPV<b class="caret"></b></p></a>
					<div class="collapse" id="coll3">
						<ul class="nav">
						    <li><a href="input2.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Input CWC</a></li>
							<li><a href="approve.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Approve</a></li>
							<li><a href="approve_recall.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Approve Recall QCO</a></li>
							<li><a href="form_export.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export Data</a></li>
							<li><a href="form_export2.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export Tapping QCO</a></li>
							<!--<li><a href="form_export_dapros.php">Export Dapros</a></li>-->
							<li><a href="form_agent.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;List Order Transaksi</a></li>							
							<li><a href="list_totrecall.php?mode=list">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;List Agent Recall </a></li>							
							<li><a href="myhandel.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Myhandle</a></li>
							<li><a href="form_rekap_agent.php" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rekap Call Agent</a></li>
							<li><a href="rekap_site.php" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rekap Call Agree</a></li>
							<!--<li><a href="form_rekap_dapros.php">Rekap Dapros</a></li>-->
							<li><a href="form_tot_approve.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rekap QCO</a></li>
							<li><a href="script_wifi_id.php" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Script Anti Decline</a></li>
							<li><a href="news.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;News</a></li>
						</ul>
					</div>
				</li>
				<li><a data-toggle="collapse" href="#coll5"><i class="pe-7s-note"></i>
								<p>Menu Document Control<b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll5" style="font-size:12px;">
								<ul class="nav">
									<li><a href="report_dokumen.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dokumen</a></li>
								</ul>
							</div>
						</li>
				<?php } else if ($_SESSION['jabatan'] == 'Document Control') { ?>
						<li><a data-toggle="collapse" href="#coll5"><i class="pe-7s-note"></i>
								<p>Menu Document Control<b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll5" style="font-size:12px;">
								<ul class="nav">
									<li><a href="dokumen_kategori.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dokumen Kategori</a></li>
									<li><a href="dokumen_item.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dokumen Item</a></li>
									<li><a href="dokumen_upload.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dokumen Upload</a></li>
									<li><a href="report_dokumen.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dokumen</a></li>
									<li><a href="news.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;News</a></li>
								</ul>
							</div>
						</li>
				<?php }	else if($_SESSION['jabatan']=='Duktek'){?>
				<li><a href="dashboard_staff.php"><i class="pe-7s-graph2"></i><p>Dashboard</p></a></li>
				
				<li><a data-toggle="collapse" href="#coll1" ><i class="pe-7s-note"></i><p>Menu Agent<b class="caret"></b></p></a>
					<div class="collapse" id="coll1">
						<ul class="nav">
							<li><a href="input2.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Input CWC</a></li>
							<li><a href="input_dapros.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Input Dapros CWC</a></li>
							<li><a href="form_agent.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;List Order Transaksi</a></li>
							<li><a href="list_recall.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;List Recall</a></li>
							<li><a href="list_follow.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;List Follow Up</a></li>
							<li><a href="form_rekap_agent.php" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rekap Call Agent</a></li>
						</ul>
					</div>
				</li>		
				
				<li><a data-toggle="collapse" href="#coll3" ><i class="pe-7s-display2"></i><p>Menu Spv<b class="caret"></b></p></a>
					<div class="collapse" id="coll3">
						<ul class="nav">
						    
						    <li><a href="approve.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Approve</a></li>
							<li><a href="approve_recall.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Approve Recall QCO</a></li>
							<li><a href="form_export.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export Data</a></li>
							<li><a href="form_export2.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export Tapping QCO</a></li>
							<!--<li><a href="form_export_dapros.php">Export Dapros</a></li>-->
							<li><a href="list_totrecall.php?mode=list">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;List Agent Recall </a></li>
							<li><a href="form_agent.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;List Order Transaksi</a></li>							
							<li><a href="myhandel.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Myhandle</a></li>
							<li><a href="form_rekap_agent.php" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rekap Call Agent</a></li>
							<li><a href="rekap_site.php" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rekap Call Agree</a></li>
							<!--<li><a href="form_rekap_dapros.php">Rekap Dapros</a></li>-->
							<li><a href="form_tot_approve.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rekap QCO</a></li>
							<li><a href="script_wifi_id.php" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Script Anti Decline</a></li>
						</ul>
					</div>
				</li>
				
				<li><a data-toggle="collapse" href="#coll4" ><i class="pe-7s-config"></i><p>Menu IT<b class="caret"></b></p></a>
					<div class="collapse" id="coll4">
						<ul class="nav">							
							<li><a href="adduser.php" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Create User Agent</a></li>
							<li><a href="dashboard_activity.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard Activity</a></li>
							<li><a href="dashboard_convertion2.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard Convertion</a></li>			
							<li><a href="dashboard_fasteldouble.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard Fastel Double</a></li>
                            <li><a href="dashboard_bestppa.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard Best PPA</a></li>							
							<li><a href="dashboard_pparule.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard PPA Rule</a></li>
							<li><a href="dashboard_ppasite.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard PPA Site</a></li>
							<li><a href="list_quiz_update.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aktivasi Login Agent</a></li>
							<li><a href="report_quiz.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Quiz</a></li>
							<li><a href="cek_jawaban_salah.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cek Jawaban Quiz</a></li>	
							<li><a href="news.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;News</a></li>	
						</ul>
					</div>
				</li>
				<li><a data-toggle="collapse" href="#coll5"><i class="pe-7s-note"></i>
								<p>Menu Document Control<b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll5" style="font-size:12px;">
								<ul class="nav">
									<li><a href="dokumen_kategori.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dokumen Kategori</a></li>
									<li><a href="dokumen_item.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dokumen Item</a></li>
									<li><a href="dokumen_upload.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dokumen Upload</a></li>
									<li><a href="report_dokumen.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dokumen</a></li>
								</ul>
							</div>
						</li>
				<?php }?>
				<li><a href="form_passwordd.php"><i class="pe-7s-tools"></i><p>Ganti Password</p></a></li>
				<li><a href="search.php"><i class="pe-7s-search"></i><p>Search</p></a></li>
				
				
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
					<?php
						$query_marquee = "SELECT * FROM news ORDER BY tanggal DESC LIMIT 1";
						$hasil_marquee = mysqli_query($con, $query_marquee);
						$total_marquee = mysqli_num_rows($hasil_marquee);

						if ($total_marquee > 0) {
							while ($row1 = mysqli_fetch_array($hasil_marquee)) {
								echo '
								<li>
									<a href="#">
									<marquee width=600 style="color:#008B8B">
										<p>Silahkan Baca News Terbaru ('.$row1['judul'].')</p>
									</marquee>
									</a>
								</li>
							  ';
							}	
						}
						?>
                        
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="#">
                               <p><?php echo substr($_SESSION['name'],0,90); ?></p>
							   <p><?php echo substr($_SESSION['area'],0,60); ?></p>
                            </a>
                        </li>
                        <li>
                            <a href="zero_session.php">
                                <p>LOG OUT</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>