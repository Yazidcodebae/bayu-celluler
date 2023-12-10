@extends('layout')

@section('title', 'Bayu Celluler | Service')

@section('content')
<main>
  <section class="serviceus">
    <div class="serviceus-image">
      <div class="image">
        <img src="{{ url('images/articlehero.png') }}" alt="hero">
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-xl-5">
          <div class="serviceus-title">
            <h2 class="font-jakarta">Artikel</h2>
            <p>Beberapa tulisan dari tim kami untuk kamu agar semakin memahami perangkat kamu.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Devices -->
  <div class="devices">
    <div class="container">
      <div class="devices-item">
        <div class="row">
          <div class="col-xl-4">
          <a href="{{ url('/articledetail') }}" class="text-decoration-none">  <div class="card border-0 ">
            <img src="{{ url('images/devices1.png') }}" class="card-img-top" alt="devices">
            <div class="card-body p-0">
              <h5 class="card-title font-jakarta">Merawat HP agar Awet</h5>
              <p class="card-text font-jakarta">Handphone menjadi alat yang wajib untuk dibawa kemana mana untuk
                saat ini,
                maka
                dari itu per...</p>
            </div>
            <div class="card-profile">
              <div class="image">
                <img src="{{ url('images/profiledev1.png') }}" alt="profile">
              </div>
              <div class="position">
                <h5>Ralph Edwards</h5>
                <p>5 min read</p>
              </div>
            </div>
          </div></a>
          </div>
          <div class="col-xl-4">
            <a href="{{ url('/articledetail') }}" class="text-decoration-none"> <div class="card border-0 ">
              <img src="{{ url('images/devices2.png') }}" class="card-img-top" alt="devices">
              <div class="card-body p-0">
                <h5 class="card-title font-jakarta">Terhubung dengan HP Off</h5>
                <p class="card-text font-jakarta">Handphone menjadi alat yang wajib untuk dibawa kemana mana untuk
                  saat ini,
                  maka
                  dari itu per...</p>
              </div>
              <div class="card-profile">
                <div class="image">
                  <img src="{{ url('images/profiledev1.png') }}" alt="profile">
                </div>
                <div class="position">
                  <h5>Ralph Edwards</h5>
                  <p>5 min read</p>
                </div>
              </div>
            </div></a>
          </div>
          <div class="col-xl-4">
            <a href="{{ url('/articledetail') }}" class="text-decoration-none">  <div class="card border-0 ">
              <img src="{{ url('images/devices3.png') }}" class="card-img-top" alt="devices">
              <div class="card-body p-0">
                <h5 class="card-title font-jakarta">Merawat HP agar Awet</h5>
                <p class="card-text font-jakarta">Handphone menjadi alat yang wajib untuk dibawa kemana mana untuk
                  saat ini,
                  maka
                  dari itu per...</p>
              </div>
              <div class="card-profile">
                <div class="image">
                  <img src="{{ url('images/profiledev1.png') }}" alt="profile">
                </div>
                <div class="position">
                  <h5>Ralph Edwards</h5>
                  <p>5 min read</p>
                </div>
              </div>
            </div></a>
          
          </div>
          <div class="col-xl-4">
             <a href="{{ url('/articledetail') }}" class="text-decoration-none">  <div class="card border-0 ">
              <img src="{{ url('images/devices3.png') }}" class="card-img-top" alt="devices">
              <div class="card-body p-0">
                <h5 class="card-title font-jakarta">Merawat HP agar Awet</h5>
                <p class="card-text font-jakarta">Handphone menjadi alat yang wajib untuk dibawa kemana mana untuk
                  saat ini,
                  maka
                  dari itu per...</p>
              </div>
              <div class="card-profile">
                <div class="image">
                  <img src="{{ url('images/profiledev1.png') }}" alt="profile">
                </div>
                <div class="position">
                  <h5>Ralph Edwards</h5>
                  <p>5 min read</p>
                </div>
              </div>
            </div></a>
          
          </div>
          <div class="col-xl-4">
             <a href="{{ url('/articledetail') }}" class="text-decoration-none"> <div class="card border-0 ">
              <img src="{{ url('images/devices3.png') }}" class="card-img-top" alt="devices">
              <div class="card-body p-0">
                <h5 class="card-title font-jakarta">Merawat HP agar Awet</h5>
                <p class="card-text font-jakarta">Handphone menjadi alat yang wajib untuk dibawa kemana mana untuk
                  saat ini,
                  maka
                  dari itu per...</p>
              </div>
              <div class="card-profile">
                <div class="image">
                  <img src="{{ url('images/profiledev1.png') }}" alt="profile">
                </div>
                <div class="position">
                  <h5>Ralph Edwards</h5>
                  <p>5 min read</p>
                </div>
              </div>
            </div></a>
           
          </div>
          <div class="col-xl-4">
             <a href="{{ url('/articledetail') }}" class="text-decoration-none"><div class="card border-0 ">
              <img src="{{ url('images/devices3.png') }}" class="card-img-top" alt="devices">
              <div class="card-body p-0">
                <h5 class="card-title font-jakarta">Merawat HP agar Awet</h5>
                <p class="card-text font-jakarta">Handphone menjadi alat yang wajib untuk dibawa kemana mana untuk
                  saat ini,
                  maka
                  dari itu per...</p>
              </div>
              <div class="card-profile">
                <div class="image">
                  <img src="{{ url('images/profiledev1.png') }}" alt="profile">
                </div>
                <div class="position">
                  <h5>Ralph Edwards</h5>
                  <p>5 min read</p>
                </div>
              </div>
            </div></a>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End : devices -->
  <!-- Reservasi -->
  <div class="reservasi  bg-blacker">
    <div class="container">
      <div class="reservasi-wrapper bg-purple">
        <div class="row">
          <div class="col-xl-5">
            <div class="reservasi-cta">
              <div class="title">
                <h5 class="font-jakarta">Konsultasikan & Reservasi</h5>
                <p class="font-jakarta">Hubungi admin kami untuk melakukan konsultasi sebelum melakukan reservasi
                  layanan kami!</p>
              </div>
              <div class="button">
                <button>Hubungi Kami</button>
              </div>
            </div>
          </div>
          <div class="col-xl-7">
            <div class="reservasi-image">
              <img src="{{ url('images/mmockup.png') }}" alt="mmockup">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End : reservasi -->
</main>
@endsection
  