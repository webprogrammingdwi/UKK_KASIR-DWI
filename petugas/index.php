<?php
include "header.php";
include "navbar.php";
?>
<body>
	<style>
		body{
			margin: 0;
			padding: 0;
			background : url(mg5.jpg);
			background-size: cover;
			font-family:"Mali SemiBold";
		}
		.card{
			line-height: 50px;
			border-radius: 10px;
		}
	</style>
</body>
<div class="card mt-3">
	<div class="card-body">
		<div class="row">
			<div class="col-sm-6">
				<div class="card bg-info-subtle text-black">
					<div class="card-body">
						<h5>Data Barang</h5>
						<?php
						include '../koneksi.php';
						$data_produk = mysqli_query($koneksi,"SELECT * FROM produk");
						$jumlah_produk = mysqli_num_rows($data_produk);
						?>
						<h3><?php echo $jumlah_produk; ?></h3>
						<a href="data_barang.php" class="btn btn-outline-dark btn-sm">Detail <i class="bi bi-chevron-double-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="card bg-success-subtle text-black">
					<div class="card-body">
						<h5>Data Pembelian</h5>
						<?php
						include '../koneksi.php';
						$data_penjualan = mysqli_query($koneksi,"SELECT * FROM penjualan");
						$jumlah_penjualan = mysqli_num_rows($data_penjualan);
						?>
						<h3><?php echo $jumlah_penjualan; ?></h3>
						<a href="pembelian.php" class="btn btn-outline-dark btn-sm">Detail <i class="bi bi-chevron-double-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="card mt-3 text-center">
		<p>Selamat datang dihalaman petugas, silahkan anda bisa mengakses beberapa fitur</p>

</div>
<?php
include "footer.php";
?>