@extends('layouts.app')

@section('title', 'NALO')

@section('content')
    
  <!-- Header -->
  <header class="text-center">
    <h1>Exprole The Beautiful  World 
      <br>
      As Easy One Click
    </h1>
    <p class="mt-3">
      You will see Beautiful
      <br>
      Moment You Never See Before
    </p>
    <a href="#" class="btn btn-get-started px-4 mt-4">
      Get Started
    </a>
  </header>
  <!-- Akhir Header -->

  <!-- Main -->
  <main>
    <div class="container">
      <section class="section-stats row justify-content-center">
        <div class="col-3 col-md-2 stats-detail">
          <h2>20k</h2>
          <p>Member</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>12k</h2>
          <p>Countries</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>3k</h2>
          <p>Hotel</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>72</h2>
          <p>Partners</p>
        </div>
      </section>
    </div>

    <section class="section-popular" id="popular">
      <div class="container">
        <div class="row">
          <div col class="text-center section-popular-heading">
            <h2>Wisata Popular</h2>
            <p>Something that you never try
              <br>
              before in this world
            </p>
          </div>
        </div>
      </div>
    </section>


    <section class="section-popular-content" id="PopularContent">
      <div class="container">
        <div class="section-popular-travel row justify-content-center">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column" style="background-image: url('FrontEnd/images/bali.jpg');">
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">DERETAN BALI</div>
              <div class="travel-button mt-auto">
                <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column" style="background-image: url('FrontEnd/images/bromo.jpg');">
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">BROMO, MALANG</div>
              <div class="travel-button mt-auto">
                <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column" style="background-image: url('FrontEnd/images/nusapeninda.jpg');">
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">NUSA PENINDA</div>
              <div class="travel-button mt-auto">
                <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column" style="background-image: url('FrontEnd/images/dubai.webp');">
              <div class="travel-country">MIDDLE EAST</div>
              <div class="travel-location">DUBAI</div>
              <div class="travel-button mt-auto">
                <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-networks">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2>Our Network</h2>
            <p>Compains are trusted us <br> more tahn just a trip</p>
          </div>
          <div class="col-md-8 text-center">
            <img src="{{ url('FrontEnd/images/partner.png') }}" alt="" class="img-partner">
          </div>
        </div>
      </div>
    </section>

    <section class="section-testimonial-heading id="testimonialHeading">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h2>They Are Loving Us</h2>
            <p> Moments were giving them <br> the best experience</p>
          </div>
        </div>
      </div>
    </section>

    <section class="section-testimonial-content">
      <div class="container">
        <div class="section-popular-travel row justify-content-center">
          <div class="col-sm-6 col-sm-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img src="FrontEnd/images/img1.png" alt="" class="mb-4 rounded-circle">
                <h3 class="mb-4"> Angga Risky</h3>
                <p class="testimonial">"It was glorious and I could not stop to say wohooo for every single moment Dankeeeee"</p>
              </div>
              <hr>
              <p class="trip-to mt-2">Trip to Ubud</p>
            </div>
          </div>
          <div class="col-sm-6 col-sm-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img src="{{ url('FrontEnd/images/img2.png') }}" alt="" class="mb-4 rounded-circle">
                <h3 class="mb-4">Shayna</h3>
                <p class="testimonial">"It was glorious and I could not stop to say wohooo for every single moment Dankeeeee"</p>
              </div>
              <hr>
              <p class="trip-to mt-2">Trip to Nusa Penida</p>
            </div>
          </div>
          <div class="col-sm-6 col-sm-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img src="FrontEnd/images/img3.png" alt="" class="mb-4 rounded-circle">
                <h3 class="mb-4">Shabrina</h3>
                <p class="testimonial">"It was glorious and I could not stop to say wohooo for every single"</p>
              </div>
              <hr>
              <p class="trip-to mt-2">Trip to Karimun Jawa</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
              I Need Help
            </a>
            <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">
              Get Started
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>
<!-- Akhir Main -->

@endsection