@extends('/base/base_pelanggan')

@section('content')

<div class="container my-5">
	<div class="list-group shadow-sm">
		<div class="list-group-item">
			<div class="row">
				<div class="col-sm-12 col-lg-4">
					<p class="mb-0 b text-website">No. Pemesanan: 23432422342</p>
					<p>26 Juni 2019</p>
					<p class="mt-4 b text-website">Produk</p>
					<div class="media">
						<img src="assets/img/produk/1.jpg" class="mr-2" width="60">
						<div class="media-body">
							Talisa Dress Women's Casual Short-Sleeve Premium Dress
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-lg-3">
					<p class="mb-0 b text-website">Grand Total</p>
					<p class="h4">Rp185.000</p>
					<p class="mt-4 b text-website">Customer</p>
					<p class="b">Angga Lesmana</p>
					<p>Jalan Thamrin No.100, Medan Kota Kota Medan, Sumatera Utara 20215. Indonesia</p>
				</div>
				<div class="col-sm-12 col-lg-3">
					<p class="mb-0 b text-website">Status Transaksi</p>
					<p class="badge badge-primary">Selesai</p>
					<p class="mt-3 b text-website">Histori Pengiriman</p>
					<p class="badge badge-primary">Diterima & Selesai</p><br />
					<a href="tracking.html">
						Lihat Tracking Produk
					</a>
				</div>
				<div class="col-sm-12 col-lg-2">
					<a href="pemesanan-detail.html">
						<button class="btn bg-website btn-sm mt-5 text-white">Lihat Detail</button>
					</a>
				</div>
			</div>
		</div>
		<div class="list-group-item">
			<div class="row">
				<div class="col-sm-12 col-lg-4">
					<p class="mb-0 b text-website">No. Pemesanan: 23432422342</p>
					<p>26 Juni 2019</p>
					<p class="mt-4 b text-website">Produk</p>
					<div class="media">
						<img src="assets/img/produk/1.jpg" class="mr-2" width="60">
						<div class="media-body">
							Talisa Dress Women's Casual Short-Sleeve Premium Dress
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-lg-3">
					<p class="mb-0 b text-website">Grand Total</p>
					<p class="h4">Rp185.000</p>
					<p class="mt-4 b text-website">Customer</p>
					<p class="b">Angga Lesmana</p>
					<p>Jalan Thamrin No.100, Medan Kota Kota Medan, Sumatera Utara 20215. Indonesia</p>
				</div>
				<div class="col-sm-12 col-lg-3">
					<p class="mb-0 b text-website">Status Transaksi</p>
					<p class="badge badge-primary">Selesai</p>
					<p class="mt-3 b text-website">Histori Pengiriman</p>
					<p class="badge badge-primary">Diterima & Selesai</p><br />
					<a href="tracking.html">
						Lihat Tracking Produk
					</a>
				</div>
				<div class="col-sm-12 col-lg-2">
					<a href="pemesanan-detail.html">
						<button class="btn bg-website btn-sm mt-5 text-white">Lihat Detail</button>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection