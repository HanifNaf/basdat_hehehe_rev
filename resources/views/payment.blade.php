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
    <div class="px-24">
        <div class="content-center">
            <h2 class="section-heading">Payment Type</h2>
        </div>

        <div class="grid grid-cols-3 gap-6">
            <div>
                <input id="e-money" type="radio" value="E-Money" name="payment" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                <label for="e-money" class="flex py-5 cursor-pointer rounded bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#007bff] peer-checked:text-white text-lg text-gray-900">E-Money</label>
            </div>
            <div>
                <input id="gopay" type="radio" value="Gopay" name="payment" class="peer opacity-0 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                <label for="gopay" class="flex py-5 cursor-pointer rounded bg-gray-200 justify-center items-center text-center h-10 w-full peer-checked:bg-[#007bff] peer-checked:text-white text-lg text-gray-900">Gopay</label>
            </div>

            <div>
                <input id="ovo" type="radio" value="OVO" name="payment" class="peer opacity-0 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                <label for="ovo" class="flex py-5 cursor-pointer rounded bg-gray-200 justify-center items-center text-center h-10 w-full peer-checked:bg-[#007bff] peer-checked:text-white text-lg text-gray-900">OVO</label>
            </div>
        </div>
        <hr>

        <button class="btn btn-primary mb-3" disabled>
            <span>
                # ID
            </span>
        </button>
        


    </div>

</div>

@endsection