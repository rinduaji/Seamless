<?php
require_once("../deft_nav.php");
include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$jb = $_SESSION["jb"];


?>

<!doctype html>
<html lang="en">
	<title>App TAM</title>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
			<div class="col-md-12">
				<div class="card card-plain">
					
			
					<form id='input' name="demoform" action='export_csv.php' method='post' accept-charset='UTF-8'>
						<div>
						<div align="center" class="panel-heading">
                            <b>EXPORT ALL DATA</b>
                        </div>
						<div class="row row-centered">
						<div align="center" class="col-md-4">
						</div>
						<div align="center" class="col-md-4">
						<table class="table table-hover table-striped">
						<tr>
							<div class="form-group">
								<label style="color:#008B8B">Tanggal</label>
								<input class="form-control"
										   type="text"
										   name="date"
										   id="datepicker"
										   placeholder="ex: 2018-12-31"
										   required
									/>
							</div>
						</tr>
						<tr>	
							<div class="form-group">
								
								<label class="control-label" style="color:#008B8B">Data Transaksi</label>
								<select  name="exp" class="form-control" value="<? echo $exp?>">	
									<option value="ALL" >ALL</option>
									<option value="qco"  >Handle by QCO</option>
									<option value="tl"  >Handle by TL</option>
									<option value="qcotgl"  >Handle QCO per Tgl</option>
									<option value="recall"  >Recall Agent</option>
								</select>		
								</label>
								
							</div>							
						</tr>
						<tr>	
							<div class="form-group">
								
								<label class="control-label" style="color:#008B8B">Product</label>
								<select  name="produk" class="form-control" value="<? echo $exp?>">	
									<option value="ALLprod" >ALL</option>
								
									<option value="Wifi ID Seamless">Wifi ID Seamless</option>	
									<option value="Upgrade WMS">Upgrade WMS</option>
									<option value="Indihome Study">Indihome Study</option>
									<option value="PSB WMS">PSB WMS</option>
									
								</select>		
								</label>
								
							</div>							
						</tr>
						
						<tr>	
							<div class="form-group">
								
								<label class="control-label" style="color:#008B8B">Agent Site</label>
								<select  name="site" class="form-control" value="<? echo $exp?>">	
									<option value="AllArea"	>All Area</option>
									<option value="TANGERANG"  	>TANGERANG</option>
									<option value="SEMARANG"  	>SEMARANG</option>
								
								</select>		
								</label>
								
							</div>							
						</tr>
						<tr>
							<input name="search" type="submit" class="btn btn-info" Value="Export To CSV">
						</tr>
						</table>
						</div>
						</div>
<?php 

if ($_POST['date'] And $_POST['exp'] And $_POST['site'])
{
	echo "$tgl"; 
	//include "export.php";
}

?>
						</div>
					</form>	
				</div>
			</div>
			</div>
		</div>
</html>
<?php	require_once("../deft_foo.php"); ?>