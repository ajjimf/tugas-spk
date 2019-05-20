<?php  
include "head.php";
?>
<!-- Body -->

			<!-- Link Menu -->
			<?php include "menu.php"; ?>

			</div>
		<br />

		<div id="content">
		
			<!-- Page title -->
			<div class="page-title">
				<h5><i class="fa fa-desktop"></i> Halaman Admin</h5>
			</div>

			<div id="leftpanel">
				<div class="table_top">
					<div align="center"><span class="title_panel">News</span> </div>
				</div>
				<div class="table_content">
					<div class="table_text">
						<div align="right"><span class="news_date"><?php echo "[" .date("H:i:s") ."] ~ [" . date("d/M/Y"). "]"; ?></span></div> <br>
						<h4><i class='fa fa-name'></i>Nama : <?php echo "<font color='black'>"."$_SESSION[nama]"."</font>"; ?></h4>
						<h4><i class='fa fa-dropbox'></i>NIM  : 2015140654</h4>
						<h4><i class='fa fa-trophy'></i>Kelas : 08TPLE V620</h4>
						<br /><br /><br /><br /><br /><br /><br /><br /><br />
					</div>
					</div>
				
				<br>
				
			</div>


			<div id="contenttext">
				<span class="title_blue"><a class="navbar-brand-right" ><img src="../images/gambar.png" alt=""></a></span><br />
				
				
				<div class="content" align="left">
				<br />
				<ul>
				<h3><i class="fa fa-home"></i> Dalam Aplikasi Ini Terdapat Fitur-fitur sebagai berikut:</h3>
					<ul>
						<h4><i class="fa fa-users"></i> Mahasiswa</h4>
							<ul>
								<h6><i class='fa fa-plus'></i> Tambah Data Calon Beasiswa<br></h6>
								<h6><i class='fa fa-edit'></i>Edit Data Mahasiswa<br></h6>
								<h6><i class='fa fa-eraser'></i>Hapus Data</h6>
							</ul>
						
						<h4><i class="fa fa-bar-chart-o"></i> Kriteria</h4>
							<ul>
								<h6><i class='fa fa-plus'></i> Tambah Data Kriteria <br></h6>
								<h6><i class='fa fa-edit'></i> Edit Data Kriteria<br></h6>
								<h6><i class='fa fa-eraser'></i> Hapus Data</h6>
							</ul>
						
						<h4><i class="fa fa-bookmark"></i>Himpunan Kriteria</h4>
							<ul>
								<h6><i class='fa fa-plus'></i> Tambah Data Himpunan<br></h6>
								<h6><i class='fa fa-edit'></i> Edit Data Himpunan Kriteria<br></h6>
								<h6><i class='fa fa-eraser'></i> Hapus Data Himpunan</h6>
							</ul>
						<h4><i class="fa fa-tag"></i> Klasifikasi</h4>
							<ul>
								<h6><i class='fa fa-plus'></i> Tambah Klasifikasi</h6>
							</ul>
						<h4><i class="fa fa-pencil"></i>Analisa</h4>
							<ul>
								
							</ul>
					</ul>
				</ul>
				</div>
				<br />
			</div>

			<br />
			<br />
			<!-- Footer -->
			<?php include "footer.php" ?>