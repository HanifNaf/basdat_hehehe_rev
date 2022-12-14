@extends('/base/base_pelanggan')

@section('content')

<div class="page-header mb-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Payment Information</h2>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->
<hr>

<div class="container">




    <form method="POST">
        <section class="checkout w-full px-28">
            <div class="content-center flex">
                <h2 class="section-heading">Payment Type</h2>
                <button type="button" data-toggle="modal" data-target=".bd-example-modal-lg" data-sandwichid="{{ $orders->product_id }}">
                    <label class="text-gray-600 hover:text-gray-800 flex py-4 ml-4 rounded cursor-pointer bg-gray-200 justify-center items-center h-12 text-lg px-2">Order#{{ $orders->order_id }}</label>
                </button>

                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="my_modal">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content container">
                            <hr>
                            <div class="px-14">
                                <h1>Order Summary #{{$orders->order_id}}</h1>
                            </div>
                            <hr>
                            <table class="table-auto">
                                <thead>
                                    <tr>
                                        <th class="text-center text-white">Food Name</th>
                                        <th class="text-center">Food Name</th>
                                        <th class="text-center">Description</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center ">Total Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orderitems as $order)
                                    <tr>
                                        <td>
                                            <div class="flex items-center justify-center">
                                                <img style="width: 75px; height: 75px" src="{{asset('img/'.$order->product_image)}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="wrapper col-span-2 flex  items-center justify-center">
                                                <div class="product-qty">
                                                    <div><span>{{ $order->product_name }}</span></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="wrapper col-span-2 flex  items-center justify-center">
                                                <div class="product-qty">
                                                    <div><span>{{ $order->bread }}</span></div>
                                                    <div><span>{{ $order->size }}</span></div>
                                                    @foreach(json_decode($order->extras) as $extra)
                                                    <div><span>Extra {{ $extra }}</span></div>
                                                    @endforeach
                                                    @foreach(json_decode($order->veggies) as $veggie)
                                                    <div><span>Extra {{ $veggie }}</span></div>
                                                    @endforeach

                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="flex items-center justify-center">
                                                <span>{{ $order->product_quantity }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="wrapper col-span-2 flex items-center justify-center">
                                                <div class="product-qty ">
                                                    <div class="price w-full">
                                                        Rp <span id="price">{{ $order->product_price }}</span></div>

                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class=" flex wrapper col-span-2  items-center justify-center">
                                                <div class="product-qty ">
                                                    <div class="price w-full">
                                                        Rp <span id="price">{{ $order->product_price * $order->product_quantity }}</span></div>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-4 gap-6">
                <div>
                    <input id="cod" type="radio" value="COD" name="payment" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                    <label for="cod" class="flex py-4 cursor-pointer rounded bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#007bff] peer-checked:text-white text-lg text-gray-900">Cash on Delivery</label>
                </div>
                <div>
                    <input id="shopeepay" type="radio" value="Shopee Pay" name="payment" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                    <label for="shopeepay" class="flex py-4 cursor-pointer rounded bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#007bff] peer-checked:text-white text-lg text-gray-900">E-Money</label>
                </div>
                <div>
                    <input id="gopay" type="radio" value="Gopay" name="payment" class="peer opacity-0 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                    <label for="gopay" class="flex py-4 cursor-pointer rounded bg-gray-200 justify-center items-center text-center h-10 w-full peer-checked:bg-[#007bff] peer-checked:text-white text-lg text-gray-900">Gopay</label>
                </div>

                <div>
                    <input id="ovo" type="radio" value="OVO" name="payment" class="peer opacity-0 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                    <label for="ovo" class="flex py-4 cursor-pointer rounded bg-gray-200 justify-center items-center text-center h-10 w-full peer-checked:bg-[#007bff] peer-checked:text-white text-lg text-gray-900">OVO</label>
                </div>
            </div>
            <hr>
        </section>
        <section class="checkout w-full px-28">
            <div class="content-center">
                <h2 class="section-heading">Customer Information</h2>
            </div>
            <div class="form-group">
                <label>Name</label>
                <input name="nama" class="form-control" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="grid grid-cols-3 gap-6">
                <div class="form-group">
                    <label>Age</label>
                    <input name="age" type="number" class="form-control" placeholder="Enter Age">
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <select class="form-control" aria-label="Default select example">
                        <option selected>Choose Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>City</label>
                    <input name="email" class="form-control" placeholder="Enter City">
                </div>

            </div>


            <hr />
        </section>

    </form>

</div>

@endsection