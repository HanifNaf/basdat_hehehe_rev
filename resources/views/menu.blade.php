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

<!-- Food Start -->
<div class="food mt-0">
  <div class="container">
    <div class="section-header text-center">
      <p>Food Menu</p>
      <h2>Delicious Food Menu</h2>
    </div>
    <div class="row align-items-center">
      <div class="col-md-4">
        <a href="{{url('/sandwiches')}}" class="hvnb">
          <div class="food-item">
            <i class="flaticon-burger"></i>
            <h2>Sandwiches</h2>
            <p>
              A sandwich is a food typically consisting of vegetables, sliced
              cheese or meat, placed on or between slices of bread, or more
              generally any dish wherein bread serves as a container or wrapper
              for another food type.
            </p>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="{{url('/sides')}}" class="hvnb">
          <div class="food-item">
            <i class="flaticon-snack"></i>
            <h2>Sides</h2>
            <p>
              A snack is a small portion of food generally eaten between meals.
              Snacks come in a variety of forms including packaged snack foods
              and other processed foods, as well as items made from fresh
              ingredients at home.
            </p>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="{{url('/beverages')}}" class="hvnb">
          <div class="food-item">
            <i class="flaticon-cocktail"></i>
            <h2>Beverage</h2>
            <p>
              A drink or beverage is a liquid intended for human consumption.
              In addition to their basic function of satisfying thirst, drinks
              play important roles in human culture.
            </p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
@endsection
<!-- Food End -->