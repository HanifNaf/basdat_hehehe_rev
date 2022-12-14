@extends('/base/base_pelanggan')

@section('content')
<!-- Page Header Start -->
<div class="page-header mb-0">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2>Food Menu</h2>
			</div>
			<div class="col-12">
				<a href="">Home</a>
				<a href="">Menu</a>
			</div>
		</div>
	</div>
</div>
<!-- Page Header End -->
<hr>

<div class="container">
	<div class="row align-items-center">
		@foreach($beverages as $beverage)
		<div class="col-md-6 p-2 ">
			<div class="hvnb">
				<div class="list-group shadow-sm">
					<div class="list-group-item gambar-produk"></div>
					<div class="list-group-item">
						<img src="{{ asset('img/'.$beverage->image) }}" alt="">

						<h5 class="card-text ">{{$beverage->name}}</h5>
						<div class="mb-2">
							<h6 class="active text-website text-warning">Rp {{$beverage->price}}</h6>
						</div>

					</div>

				</div>
				<form method="POST" action="{{ route('add_to_cart') }}">
					@csrf
					<input type="hidden" name="id" value="{{$beverage->unique_id}}">
					<input type="hidden" name="name" value="{{$beverage->name}}">
					<input type="hidden" name="price" value="{{$beverage->price}}">
					<input type="hidden" name="image" value="{{$beverage->image}}">

					<button type="submit" class="list-group-item btn-outline-success w-full h-full">
						ADD TO CART
					</button>
				</form>
			</div>
		</div>
		@endforeach
	</div>
</div>

@endsection