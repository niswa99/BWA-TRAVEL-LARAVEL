@extends('layouts.checkout')

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
                  <li class="breadcrumb-item">Details</li>
                  <li class="breadcrumb-item active">Checkout</li>
                </ol>
              </nav>
            </div>
          </div>
          <!-- Bagian  Utama-->
          <div class="row">
            <div class="col-lg-8 pl-lg-0">
              <div class="card card-details">
                <h1>Who Is Going</h1>
                <p>Trip to Ubud, Bali, Indonesia</p>
                <div class="attendee">
                  <table
                    class="table table-responsive-sm text-center"
                  >
                    <thead>
                      <tr>
                        <td>Picture</td>
                        <td>Name</td>
                        <td>Nationality</td>
                        <td>Visa</td>
                        <td>Passport</td>
                        <td></td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <img
                            src="{{ url('FrontEnd/images/img1.png') }}"
                            height="60"
                            class="rounded-circle"
                          />
                        </td>
                        <td class="align-middle">Angga Risky</td>
                        <td class="align-middle">CN</td>
                        <td class="align-middle">N/A</td>
                        <td class="align-middle">Active</td>
                        <td class="align-middle">
                          <a href="#">
                            <img
                              src="{{ url('FrontEnd/images/cancel.png') }}"
                              class="img-remove"
                            />
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <img
                            src="{{ url ('Frontend/images/img2.png') }}"
                            height="60"
                            class="rounded-circle"
                          />
                        </td>
                        <td class="align-middle">Galih Pratama</td>
                        <td class="align-middle">SG</td>
                        <td class="align-middle">30 Days</td>
                        <td class="align-middle">Active</td>
                        <td class="align-middle">
                          <a href="#">
                            <img
                              src="{{ url('FrontEnd/images/cancel.png') }}"
                              class="img-remove"
                            />
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="member mt-3">
                  <h2>Add Member</h2>
                  <form action="" class="form-inline">
                    <label for="inputUsername" class="sr-only"
                      >Name</label
                    >
                    <input
                      type="text"
                      name="inputUsername"
                      class="from-control mb-2 me-sm-2"
                      id="inputUsername"
                      placeholder="Username"
                    />
                    <label for="inputVisa" class="sr-only"
                      >Visa</label
                    >
                    <select
                      name="inputVisa"
                      id="inputVisa"
                      class="custom-select mb-2 me-sm-2"
                    >
                      <option value="VISA" selected>VISA</option>
                      <option value="30 Days">30 Days</option>
                      <option value="N/A">N/A</option>
                    </select>
                    <label for="doePassport" class="sr-only"
                      >DOE Passport</label
                    >
                    <div class="input-group mb-2 me-sm-2">
                      <input
                        type="text"
                        class="datepicker"
                        id="doePassport"
                        placeholder="DOE Passport"
                        width="250"
                      />
                    </div>
                    <button
                      type="submit"
                      class="btn btn-add-now mb-2 px-4"
                    >
                      Add Now
                    </button>
                  </form>
                  <h3 class="mt-2 mb-0">Note</h3>
                  <p class="disclaimer mb-2">
                    Get the content and creative tools you need with
                    an All-in-One plan and your first month free
                  </p>
                </div>
              </div>
            </div>
            <!--  Akhir Bagian  Utama-->

            <!-- Card Bagian Kanan -->
            <div class="col-lg-4">
              <div class="card card-details card-right">
                <h2>Member are going</h2>
                <div class="member my-2">
                  <img
                    src="{{ url('FrontEnd/images/bali.jpg') }}"
                    class="member-image"
                  />
                  <img
                    src="{{ url('FrontEnd/images/bali.jpg') }}"
                    class="member-image"
                  />
                  <img
                    src="{{ url('FrontEnd/images/bali.jpg') }}"
                    class="member-image"
                  />
                  <img
                    src="{{ url('FrontEnd/images/bali.jpg') }}"
                    class="member-image"
                  />
                  <img
                    src="{{ url('FrontEnd/images/bali.jpg') }}"
                    class="member-image"
                  />
                </div>
                <hr />
                <h2>Checkout Information</h2>
                <table class="trip-information">
                  <tr>
                    <th width="50%">Members</th>
                    <td width="50%" class="text-end">
                      2 Person
                    </td>
                  </tr>
                  <tr>
                    <th width="50%">Additional VISA</th>
                    <td width="50%" class="text-end">$ 190,00</td>
                  </tr>
                  <tr>
                    <th width="50%">Trip Price</th>
                    <td width="50%" class="text-end">$ 80,00 / person</td>
                  </tr>
                  <tr>
                    <th width="50%">Sub Total</th>
                    <td width="50%" class="text-end">
                      $280,00
                    </td>
                  </tr>
                  <tr>
                    <th width="50%">Total (+Unique)</th>
                    <td width="50%" class="text-end text-total">
                      <span class="text-blue">$ 279,</span>
                      <span class="text-orange">33</span>
                    </td>
                  </tr>
                </table>
                <hr />
                <h2>Payment Instructions</h2>
                <p class="payment-instructions">
                  Get the content and creative tools you need with an
                  All-in-One plan and your first month free
                </p>
                <div class="bank">
                  <div class="bank-item pb-3">
                    <img src="{{ url('FrontEnd/images/kalender.png') }}" alt="" class="bank-image">
                    <div class="description">
                      <h3>PT Nomands ID</h3>
                      <p>0881 888 09
                      <br>
                      Bank Central Asia
                      </p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="bank-item pb-3">
                    <img src="{{ url('FrontEnd/images/kalender.png') }}" alt="" class="bank-image">
                    <div class="description">
                      <h3>PT Nomands ID</h3>
                      <p>0889 888 09
                      <br>
                      Bank HSBC
                      </p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              <div class="join-container">
                <a href="{{ route('checkout-success') }}" class="btn btn-join-now mt-3 py-2">
                  I Have Made Payment
                </a>
              </div>
              <div class="text-center mt-3">
                <a href="{{ route('detail') }}" class="text-muted"> Cancel Booking</a>
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
      href="{{ url('FrontEnd/libraries/gijgo/css/gijgo.min.css') }}"
    />
@endpush

@push('addon-script')
   <script src="{{ url('FrontEnd/libraries/gijgo/js/gijgo.min.js') }}"></script>
    <script>
      $(".datepicker").datepicker({
        uiLibrary: "bootstrap4",
        icons: {
          rightIcon: '<img src="{{ url('Frontend/images/kalender.png') }}">',
        },
      });
    </script>
@endpush
