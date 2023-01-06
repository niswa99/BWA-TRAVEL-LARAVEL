@extends('layouts.app')

@section('title', 'Detail Travel')

@section('content')
    <!-- Main -->
    <main>
      <section class="section-details-header"></section>
      <section class="section-details-content">
        <div class="container">
          <div class="row">
            <div class="col ps-3">
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">Paket Travel</li>
                  <li class="breadcrumb-item active">Details</li>
                </ol>
              </nav>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8 pl-lg-0">
              <div class="card card-details">
                <h1>Nusa Peninda</h1>
                <p>Republic Of Indonesia Raya</p>

                <!-- Gambar Besar -->
                <div class="gallery">
                  <div class="xzoom-container">
                    <img
                      src="FrontEnd/images/nusapeninda.jpg"
                      class="xzoom"
                      id="xzoom-default"
                      xoriginal="FrontEnd/images/nusapeninda.jpg"
                    />
                  </div>
                  <div class="xzoom-thumbs">
                    <!-- untuk gambar gambar kecilnya -->
                    <a href="FrontEnd/images/nusapeninda.jpg">
                      <img
                        src="FrontEnd/images/nusapeninda.jpg"
                        class="xzoom-gallery"
                        width="125"
                        xpreview="FrontEnd/images/nusapeninda.jpg"
                      />
                    </a>
                    <a href="FrontEnd/images/nusapeninda.jpg">
                      <img
                        src="FrontEnd/images/nusapeninda.jpg"
                        class="xzoom-gallery"
                        width="125"
                        xpreview="FrontEnd/images/nusapeninda.jpg"
                      />
                    </a>
                    <a href="FrontEnd/images/nusapeninda.jpg">
                      <img
                        src="FrontEnd/images/nusapeninda.jpg"
                        class="xzoom-gallery"
                        width="125"
                        xpreview="FrontEnd/images/nusapeninda.jpg"
                      />
                    </a>
                    <a href="FrontEnd/images/nusapeninda.jpg">
                      <img
                        src="FrontEnd/images/nusapeninda.jpg"
                        class="xzoom-gallery"
                        width="125"
                        xpreview="FrontEnd/images/nusapeninda.jpg"
                      />
                    </a>
                    <a href="FrontEnd/images/nusapeninda.jpg">
                      <img
                        src="FrontEnd/images/nusapeninda.jpg"
                        class="xzoom-gallery"
                        width="125"
                        xpreview="FrontEnd/images/nusapeninda.jpg"
                      />
                    </a>
                  </div>
                  <!-- akhir untuk gambar gambar kecilnya -->
                </div>
                <h2>Tentang wisata</h2>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing
                  elit. Delectus iusto quidem reiciendis nisi ut
                  ratione provident, unde ipsum tempore! Vel a fuga
                  accusamus sint, amet reprehenderit facere inventore
                  magnam id.
                </p>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing
                  elit. Deleniti dolores architecto eum tempore
                  quibusdam.
                </p>
                <div class="features row">
                  <div class="col-md-4">
                    <img
                      src="frontend/images/monument.png"
                      alt=""
                      class="features-image"
                    />
                    <div class="description">
                      <h3>Featured Event</h3>
                      <p>Tari Kecak</p>
                    </div>
                  </div>
                  <div class="col-md-4 border-start">
                    <img
                      src="frontend/images/monument.png"
                      alt=""
                      class="features-image"
                    />
                    <div class="description">
                      <h3>Language</h3>
                      <p>Bahas Indonesia</p>
                    </div>
                  </div>
                  <div class="col-md-4 border-start">
                    <img
                      src="frontend/images/monument.png"
                      alt=""
                      class="features-image"
                    />
                    <div class="description">
                      <h3>Foods</h3>
                      <p>Local Food</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Card Bagian Kanan -->
            <div class="col-lg-4">
              <div class="card card-details card-right">
                <h2>Member are going</h2>
                <div class="member my-2">
                  <img
                    src="FrontEnd/images/bali.jpg"
                    class="member-image"
                  />
                  <img
                    src="FrontEnd/images/bali.jpg"
                    class="member-image"
                  />
                  <img
                    src="FrontEnd/images/bali.jpg"
                    class="member-image"
                  />
                  <img
                    src="FrontEnd/images/bali.jpg"
                    class="member-image"
                  />
                  <img
                    src="FrontEnd/images/bali.jpg"
                    class="member-image"
                  />
                </div>
                <hr />
                <h2>Trip Information</h2>
                <table class="trip-information">
                  <tr>
                    <th width="50%">Date of Departure</th>
                    <td width="50%" class="text-right">
                      22 Aug, 2019
                    </td>
                  </tr>
                  <tr>
                    <th width="50%">Duration</th>
                    <td width="50%" class="text-right">4D 3N</td>
                  </tr>
                  <tr>
                    <th width="50%">Type</th>
                    <td width="50%" class="text-right">Open Trip</td>
                  </tr>
                  <tr>
                    <th width="50%">Price</th>
                    <td width="50%" class="text-right">
                      $80,00/persen
                    </td>
                  </tr>
                </table>
              </div>
              <div class="join-container">
                <a href="{{ route('checkout') }}" class="btn btn-join-now mt-3 py-2">
                  Join Now
                </a>
              </div>
            </div>
            <!--  Akhir Card Bagian Kanan -->
          </div>
        </div>
      </section>
    </main>
    <!-- Akhir Main -->
@endsection

@push('prepend-style')
    <link
      rel="stylesheet"
      href="{{ url('FrontEnd/libraries/xzoom/xzoom.css') }}"
    />
@endpush

@push('addon-script')
   <script src="{{ url('FrontEnd/libraries/xzoom/xzoom.min.js') }}"></script>
    <script>
      $(document).ready(function () {
        $(".xzoom, .xzoom-gallery").xzoom({
          zoomWidth: 500,
          title: false,
          tint: "#333",
          Xoffset: 15,
        });
      });
    </script>
@endpush