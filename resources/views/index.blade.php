@extends('/base/base_pelanggan')
@section('content')
    <!-- Carousel Start -->
    <div class="carousel">
      <div class="container-fluid">
        <div class="owl-carousel">
          <div class="carousel-item">
            <div class="carousel-img">
              <img src="img/carousel-1.jpg" alt="Image" />
            </div>
            <div class="carousel-text">
              <h1>Best <span>Quality</span> Ingredients</h1>
              <div class="carousel-btn">
                <a href="{{url('/menu')}}" class="btn custom-btn" href=""
                  >Order Food</a
                >
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="carousel-img">
              <img src="img/carousel-3.jpg" alt="Image" />
            </div>
            <div class="carousel-text">
              <h1>Fastest Order <span>Delivery</span></h1>
              <div class="carousel-btn">
                <a href="{{url('/menu')}}" class="btn custom-btn" href=""
                  >Order Food</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Carousel End -->

    @endsection