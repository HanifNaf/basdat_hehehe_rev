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
		<!-- Awal slot produk -->

		<!-- Pemisah per produk -->
		@foreach($sandwiches as $sandwich)
		<div class="col-md-6 p-2 ">
			<div class="hvnb">
				<div class="list-group shadow-sm">
					<div class="list-group-item gambar-produk"></div>
					<div class="list-group-item">
						<img src="{{ asset('img/'.$sandwich->image) }}" alt="">

						<h5 class="card-text ">{{$sandwich->name}}</h5>

						<div class="mb-2">
							<h6 class="active text-website text-warning">Rp {{$sandwich->price}}</h6>
						</div>

					</div>

				</div>
				<button type="button" class="list-group-item btn-outline-success w-full h-full" data-toggle="modal" data-target=".bd-example-modal-lg" data-sandwichid="{{ $sandwich->unique_id }}" data-sandwichname="{{ $sandwich->name }}" data-sandwichprice="{{ $sandwich->price }}" data-sandwichimage="{{ $sandwich->image }}">
					ADD TO CART
				</button>
			</div>
		</div>

		<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="my_modal">
			<div class="modal-dialog modal-lg">
				<div class="modal-content container">
					<div>
						<img src="{{ asset('img/'.$sandwich->image) }}" alt="">
						<form method="POST" action="{{ url('sandwiches') }}">
							@csrf

							<hr>
							<div class="flex item-center mb-3">
								<div class="md:w-1/3">
									<label class="block text-gray-500 text-xl font-extrabold md:text-left mb-1 md:mb-0 pr-12" for="inline-full-name">
										Bread
									</label>
								</div>
								<div class="md:w-screen">
									<ul class="w-full grid grid-cols-3">
										<li>
											<input id="wheat" type="radio" value="Wheat" name="bread" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
											<label for="wheat" class="flex cursor-pointer rounded-l bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Wheat</label>
											</label>
										</li>
										<li>
											<input id="italian-bread" type="radio" value="Italian Bread" name="bread" class="peer opacity-0 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
											<label for="italian-bread" class="flex cursor-pointer  bg-gray-200 justify-center items-center text-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Italian Bread</label>
											</label>
										</li>
										<li>
											<input id="honey-oat" type="radio" value="Honey Oat" name="bread" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
											<label for="honey-oat" class="flex cursor-pointer rounded-r  bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Honey Oat</label>
											</label>
										</li>
									</ul>
								</div>
							</div>
							<div class="md:flex md:items-center mb-3">
								<div class="md:w-1/3">
									<label class="block text-gray-500 text-xl font-bold md:text-left mb-1 md:mb-0 pr-12" for="inline-full-name">
										Size
									</label>
								</div>
								<div class="md:w-screen">
									<ul class="w-full grid grid-cols-2">
										<li>
											<input id="6-inch" type="radio" value="6 Inch" name="size" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
											<label for="6-inch" class="flex cursor-pointer rounded-l bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">6 Inch</label>
											</label>
										</li>
										<li>
											<input id="footlong" type="radio" value="Footlong" name="size" class="peer opacity-0 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
											<label for="footlong" class="flex cursor-pointer  bg-gray-200 rounded-r justify-center items-center text-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Footlong</label>
											</label>
										</li>

									</ul>
								</div>
							</div>
							<div class="md:flex md:items-center mb-3">
								<div class="md:w-1/3">
									<label class="block text-gray-500 text-xl font-bold md:text-left mb-1 md:mb-0 pr-12" for="inline-full-name">
										Extras
									</label>
								</div>
								<div class="md:w-screen">
									<ul class="grid gap-4 w-full md:grid-cols-3 ">
										<li>
											<input id="double-meat" type="checkbox" value="Double Meat" name="extras[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
											<label for="double-meat" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Double Meat</label>
											</label>
										</li>
										<li>
											<input id="extra-cheese" type="checkbox" value="Extra Cheese" name="extras[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
											<label for="extra-cheese" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Extra Cheese</label>
											</label>
										</li>
										<li>
											<input id="no-extras" type="checkbox" value="No Extras" name="extras[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
											<label for="no-extras" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">No Extras</label>
											</label>
										</li>
									</ul>
								</div>
							</div>

							<div class="md:flex md:items-center mb-3">
								<div class="md:w-1/3">
									<label class="block text-gray-500 text-xl font-bold md:text-left mb-1 md:mb-0 pr-[35px]" for="inline-full-name">
										Veggies
									</label>
								</div>
								<div class="md:w-screen">
									<ul class="grid gap-x-4 gap-y-1 grid-cols-4 ">
										<li>
											<input id="lettuce" type="checkbox" value="Lettuce" name="veggies[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
											<label for="lettuce" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Lettuce</label>
											</label>
										</li>
										<li>
											<input id="tomatoes" type="checkbox" value="Tomatoes" name="veggies[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
											<label for="tomatoes" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Tomatoes</label>
											</label>
										</li>
										<li>
											<input id="cucumbers" type="checkbox" value="Cucumbers" name="veggies[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
											<label for="cucumbers" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Cucumbers</label>
											</label>
										</li>
										<li>
											<input id="pickles" type="checkbox" value="Pickles" name="veggies[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
											<label for="pickles" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Pickles</label>
											</label>
										</li>
										<li>
											<input id="green-peppers" type="checkbox" value="Green Peppers" name="veggies[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
											<label for="green-peppers" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Green Peppers</label>
											</label>
										</li>
										<li>
											<input id="olives" type="checkbox" value="Olives" name="veggies[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
											<label for="olives" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Olives</label>
											</label>
										</li>
										<li>
											<input id="white-onions" type="checkbox" value="White Onions" name="veggies[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
											<label for="white-onions" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">White Onions</label>
											</label>
										</li>
										<li>
											<input id="no-veggies" type="checkbox" value="No Veggies" name="veggies[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
											<label for="no-veggies" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">No Veggies</label>
											</label>
										</li>

									</ul>
								</div>
							</div>

							<div class="md:flex md:items-center mb-1">
								<div class="md:w-1/3">
									<label class="block text-gray-500 text-xl font-bold md:text-left mb-1 md:mb-0 pr-[35px]" for="inline-full-name">
										Sauces
									</label>
								</div>
								<div class="md:w-screen">
									<ul class="grid gap-x-4 gap-y-1 grid-cols-4 ">
										<li>
											<input id="honey-mustard" type="checkbox" value="Honey Mustard" name="sauces[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
											<label for="honey-mustard" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Honey Mustard</label>
											</label>
										</li>
										<li>
											<input id="sweet-onion" type="checkbox" value="Sweet Onion" name="sauces[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
											<label for="sweet-onion" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Sweet Onion</label>
											</label>
										</li>
										<li>
											<input id="chipotle" type="checkbox" value="Chipotle Southwest" name="sauces[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
											<label for="chipotle" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900 text-center">Chipotle Southwest</label>
											</label>
										</li>
										<li>
											<input id="mayonaise" type="checkbox" value="Mayonaise" name="sauces[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
											<label for="mayonaise" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Mayonaise</label>
											</label>
										</li>
										<li>
											<input id="bbq" type="checkbox" value="BBQ" name="sauces[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
											<label for="bbq" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">BBQ</label>
											</label>
										</li>
										<li>
											<input id="tomato-sauces" type="checkbox" value="Tomato" name="sauces[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
											<label for="tomato-sauces" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Tomato</label>
											</label>
										</li>
										<li>
											<input id="thousand-island-dressing" type="checkbox" value="Thousand Island Dressing" name="sauces[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
											<label for="thousand-island-dressing" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900 text-center">Thousand Island Dressing</label>
											</label>
										</li>
										<li>
											<input id="hot-chilli" type="checkbox" value="Hot Chilli" name="sauces[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
											<label for="hot-chilli" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-white peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Hot Chilli</label>
											</label>
										</li>

									</ul>
								</div>
							</div>


							<div class="modal-body-id">
								<input type="hidden" name="id" id="id" value="" />
							</div>

							<div class="modal-body-name">
								<input type="hidden" name="name" id="name" value="" />
							</div>

							<div class="modal-body-price">
								<input type="hidden" name="price" id="price" value="" />
							</div>

							<div class="modal-body-image">
								<input type="hidden" name="image" id="image" value="" />
							</div>

							<hr>
							<button type="submit" class="list-group-item btn-outline-success w-full h-full">
								SUBMIT
							</button>

							<script>
								$('#my_modal').on('show.bs.modal', function(event) {
									let sandwichID = $(event.relatedTarget).data('sandwichid')
									$(this).find('.modal-body-id input').val(sandwichID)

									let sandwichName = $(event.relatedTarget).data('sandwichname')
									$(this).find('.modal-body-name input').val(sandwichName)

									let sandwichPrice = $(event.relatedTarget).data('sandwichprice')
									$(this).find('.modal-body-price input').val(sandwichPrice)

									let sandwichImage = $(event.relatedTarget).data('sandwichimage')
									$(this).find('.modal-body-image input').val(sandwichImage)
								})
							</script>
						</form>
						<br>
						<form>
							<form method="POST" action="{{ route('add_to_cart') }}">
								<div class="modal-body-id">
									<input type="hidden" name="id" id="id" value="" />
								</div>

								<div class="modal-body-name">
									<input type="hidden" name="name" id="name" value="" />
								</div>

								<div class="modal-body-price">
									<input type="hidden" name="price" id="price" value="" />
								</div>

								<div class="modal-body-image">
									<input type="hidden" name="image" id="image" value="" />
								</div>
								<button type="submit" class="list-group-item btn-outline-success w-full h-full">
									ADD TO CART
								</button>
							</form>

						</form>



					</div>
				</div>
			</div>

		</div>
		@endforeach

	</div>
</div>

@endsection