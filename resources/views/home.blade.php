@extends('layout')

@section('title', 'Bayu Celluler | ServiceDetail')

@section('content')
<main>
  <!-- Hero -->
  <section class="hero">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 align-self-center">
          <div class="hero-desc">
            <h1 class="font-jakarta">Service Handphone dalam Genggaman</h1>
            <p>Menerima segala permintaan service atau konsultasi hanya dari rumah kamu. Terpercaya dan cepat!</p>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="hero-image">
            <img src="{{ url('images/herosection.png') }}" alt="hero">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <!-- Service -->
  <section class="service">
    <div class="container">
      <div class="service-wrapper">
        <div class="row">
          <div class="col-xl-7">
            <div class="row">
              <div class="col-xl-6">
                <div class="service-item">
                  <div class="icon">
                    <svg width="32" height="32" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M33 21.3636V17C33 8.16364 25.8364 1 17 1C8.16364 1 1 8.16364 1 17V21.3636"
                        stroke="#161616" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M9.72727 21.3636H1V30.0909C1 31.6975 2.30255 33 3.90909 33H9.72727V21.3636Z"
                        fill="#D4D4D8" stroke="#161616" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M33 21.3636H24.2727V33H30.0909C31.6974 33 33 31.6975 33 30.0909V21.3636Z"
                        fill="#D4D4D8" stroke="#161616" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>

                  </div>
                  <div class="desc">
                    <h5 class="font-jakarta">Support</h5>
                    <p class="font-jakarta">Layanan support service bisa
                      diakses 24/7 dimanapun.</p>
                    <span class="font-jakarta"><svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M5.97942 5.71991C5.59787 6.10188 5.24802 6.57042 5.02182 6.97841C4.73771 7.47707 4.52797 8.02389 4.40152 8.59241L4.33572 8.93592C3.29871 14.1972 4.6157 18.9038 8.96325 23.2204C11.8158 26.0526 13.9788 27.2164 16.9406 27.6413C17.4205 27.7102 17.9218 27.7619 18.5183 27.8061L19.7446 27.8806C20.429 27.916 21.5693 27.9728 21.9586 27.995C22.4713 28.0242 23.1496 27.9261 24.0612 27.7126L24.1993 27.6721C24.9951 27.391 25.7217 26.9349 26.3301 26.3258C28.5566 24.0969 28.5566 20.4831 26.3301 18.2542L26.1318 18.0648C23.9795 16.1049 20.6882 16.087 18.5158 18.0207L18.2582 18.2538L16.8817 19.6318C16.5801 19.9337 16.1051 19.9746 15.7564 19.7287C15.0309 19.217 13.1032 17.3304 12.6327 16.6874C12.3769 16.3378 12.414 15.8537 12.7201 15.5474L13.9329 14.3341L14.0366 14.2497L14.1906 14.107C14.2184 14.0802 14.2467 14.0524 14.2748 14.0244C16.5655 11.7311 16.5655 8.01312 14.2748 5.71991C11.9841 3.4267 8.27012 3.4267 5.97942 5.71991ZM7.84006 7.58259C9.10315 6.31811 11.151 6.31811 12.4141 7.58259C13.6772 8.84707 13.6772 10.8972 12.4141 12.1617C12.336 12.2399 12.2546 12.3136 12.1701 12.3827L10.86 13.6843C9.63541 14.9097 9.48685 16.846 10.51 18.2442C11.1504 19.1192 13.2835 21.2069 14.2409 21.8822L14.4256 22.004C15.7998 22.8498 17.5882 22.6499 18.7424 21.4944L20.0149 20.2201L20.0323 20.2113L20.1549 20.0913C21.3559 18.9159 23.2803 18.9263 24.4695 20.1169C25.6684 21.3171 25.6684 23.2629 24.4695 24.4631L24.265 24.6505C24.0536 24.8276 23.822 24.9735 23.5753 25.0863L23.3762 25.1664L23.0379 25.2409L22.6807 25.3078C22.412 25.3528 22.2173 25.3712 22.1082 25.365L19.4364 25.2262L18.7286 25.1802L18.1146 25.1285C17.8268 25.1007 17.5647 25.0697 17.3138 25.0337C14.9428 24.6936 13.2858 23.802 10.8162 21.35C7.2278 17.7872 6.11555 14.1017 6.84874 9.81688L6.92544 9.40033C6.99495 8.9737 7.12368 8.60608 7.3151 8.27002C7.43164 8.05999 7.63432 7.78856 7.84006 7.58259Z"
                          fill="#D8DCDF" />
                      </svg>
                      310-437-2766
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-xl-6">
                <div class="service-item">
                  <div class="icon">
                    <svg width="32" height="32" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M33 1H1V33H33V1Z" stroke="#161616" stroke-width="2" stroke-miterlimit="10"
                        stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M14.6 5.80005H5.80005V16.2H14.6V5.80005Z" stroke="#161616" stroke-width="2"
                        stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M14.6 21H5.80005V28.2H14.6V21Z" stroke="#161616" stroke-width="2"
                        stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M28.1999 5.80005H19.3999V28.2H28.1999V5.80005Z" fill="#D4D4D8" stroke="#161616"
                        stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                  </div>
                  <div class="desc">
                    <h5 class="font-jakarta">Lokasi</h5>
                    <p class="font-jakarta">Hadir dengan akses terdekat
                      untuk warga Jawa Timur</p>
                    <span class="font-jakarta">
                      <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M16.0001 5.33329C12.3182 5.33329 9.33341 8.31806 9.33341 12C9.33341 15.7172 11.4823 21.1564 16.0001 26.0737C20.5178 21.1564 22.6667 15.7172 22.6667 12C22.6667 8.31806 19.682 5.33329 16.0001 5.33329ZM6.66675 12C6.66675 6.8453 10.8454 2.66663 16.0001 2.66663C21.1547 2.66663 25.3334 6.8453 25.3334 12C25.3334 16.8696 22.4475 23.4382 16.9429 28.9428C16.4222 29.4635 15.578 29.4635 15.0573 28.9428C9.55267 23.4382 6.66675 16.8696 6.66675 12Z"
                          fill="#D8DCDF" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M16.0001 13.3333C16.7365 13.3333 17.3334 12.7363 17.3334 12C17.3334 11.2636 16.7365 10.6666 16.0001 10.6666C15.2637 10.6666 14.6667 11.2636 14.6667 12C14.6667 12.7363 15.2637 13.3333 16.0001 13.3333ZM16.0001 16C18.2092 16 20.0001 14.2091 20.0001 12C20.0001 9.79082 18.2092 7.99996 16.0001 7.99996C13.7909 7.99996 12.0001 9.79082 12.0001 12C12.0001 14.2091 13.7909 16 16.0001 16Z"
                          fill="#D8DCDF" />
                      </svg>

                      Google Maps
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-5">
            <div class="service-desc">
              <div class="title">
                <h5 class="font-jakarta">Reservasi Gratis</h5>
                <p class="font-jakarta">Gratis Diagnosa, konsultasi & reservasi dengan dukungan
                  pesan foto.</p>
              </div>
              <button>Reservasi Sekarang</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End : Service -->

  <!-- Transaction -->
  <div class="transaction" id="transaction">
    <div class="container">
      <div class="row justify-content-xl-center">
        <div class="col-xl-6">
          <div class="transaction-title">
            <h2 class="font-jakarta">Mudah, Simple, Terjangkau</h2>
            <p class="font-jakarta">Nikmati Kemudahan Layanan Service Handphone di dalam
              satu platform Bayu Tirta Cell.</p>
          </div>
        </div>
      </div>
      <div class="row gap-lg-1 align-items-center">
        <div class="col-xl-6">
          <div class="transaction-image">
            <img src="{{ url('images/content.png') }}" alt="content">
          </div>
        </div>
        <div class="col-xl-5">
          <div class="transaction-item">
            <svg width="50" height="50" viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect y="0.5" width="50" height="50" rx="12" fill="#4F46E5" />
              <path
                d="M18 28.5C17.06 28.5 16.19 28.83 15.5 29.38C14.58 30.11 14 31.24 14 32.5C14 34.71 15.79 36.5 18 36.5C19.01 36.5 19.93 36.12 20.64 35.5C21.47 34.77 22 33.7 22 32.5C22 30.29 20.21 28.5 18 28.5ZM19 32.75C19 33.01 18.86 33.26 18.64 33.39L17.39 34.14C17.27 34.22 17.13 34.25 17 34.25C16.75 34.25 16.5 34.12 16.36 33.89C16.15 33.53 16.26 33.07 16.62 32.86L17.51 32.33V31.25C17.5 30.84 17.84 30.5 18.25 30.5C18.66 30.5 19 30.84 19 31.25V32.75Z"
                fill="white" />
              <path
                d="M27.85 17.45V21.25H26.35V17.45C26.35 17.18 26.11 17.05 25.95 17.05C25.9 17.05 25.85 17.06 25.8 17.08L17.87 20.07C17.34 20.27 17 20.77 17 21.34V22.01C16.09 22.69 15.5 23.78 15.5 25.01V21.34C15.5 20.15 16.23 19.09 17.34 18.67L25.28 15.67C25.5 15.59 25.73 15.55 25.95 15.55C26.95 15.55 27.85 16.36 27.85 17.45Z"
                fill="white" />
              <path
                d="M34.4999 28V29C34.4999 29.27 34.2899 29.49 34.0099 29.5H32.5499C32.0199 29.5 31.5399 29.11 31.4999 28.59C31.4699 28.28 31.5899 27.99 31.7899 27.79C31.9699 27.6 32.2199 27.5 32.4899 27.5H33.9999C34.2899 27.51 34.4999 27.73 34.4999 28Z"
                fill="white" />
              <path
                d="M32.48 26.45H33.5C34.05 26.45 34.5 26 34.5 25.45V25.01C34.5 22.94 32.81 21.25 30.74 21.25H19.26C18.41 21.25 17.63 21.53 17 22.01C16.09 22.69 15.5 23.78 15.5 25.01V26.79C15.5 27.17 15.9 27.41 16.26 27.29C16.82 27.1 17.41 27 18 27C21.03 27 23.5 29.47 23.5 32.5C23.5 33.22 23.31 34.01 23.01 34.71C22.85 35.07 23.1 35.5 23.49 35.5H30.74C32.81 35.5 34.5 33.81 34.5 31.74V31.55C34.5 31 34.05 30.55 33.5 30.55H32.63C31.67 30.55 30.75 29.96 30.5 29.03C30.3 28.27 30.54 27.53 31.04 27.05C31.41 26.67 31.92 26.45 32.48 26.45ZM27 26.25H22C21.59 26.25 21.25 25.91 21.25 25.5C21.25 25.09 21.59 24.75 22 24.75H27C27.41 24.75 27.75 25.09 27.75 25.5C27.75 25.91 27.41 26.25 27 26.25Z"
                fill="white" />
            </svg>
            <div class="desc">
              <h5 class="font-jakarta">Harga Ramah di Kantong</h5>
              <p class="font-jakarta">Kami memastikan transparansi biaya di setiap layanan untuk kamu.</p>
            </div>
          </div>
          <div class="transaction-item">
            <svg width="50" height="50" viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect y="0.5" width="50" height="50" rx="12" fill="#4F46E5" />
              <path
                d="M29 15.5H21C17.5 15.5 16 17.5 16 20.5V30.5C16 33.5 17.5 35.5 21 35.5H29C32.5 35.5 34 33.5 34 30.5V20.5C34 17.5 32.5 15.5 29 15.5ZM21 25.75H25C25.41 25.75 25.75 26.09 25.75 26.5C25.75 26.91 25.41 27.25 25 27.25H21C20.59 27.25 20.25 26.91 20.25 26.5C20.25 26.09 20.59 25.75 21 25.75ZM29 31.25H21C20.59 31.25 20.25 30.91 20.25 30.5C20.25 30.09 20.59 29.75 21 29.75H29C29.41 29.75 29.75 30.09 29.75 30.5C29.75 30.91 29.41 31.25 29 31.25ZM31.5 22.75H29.5C27.98 22.75 26.75 21.52 26.75 20V18C26.75 17.59 27.09 17.25 27.5 17.25C27.91 17.25 28.25 17.59 28.25 18V20C28.25 20.69 28.81 21.25 29.5 21.25H31.5C31.91 21.25 32.25 21.59 32.25 22C32.25 22.41 31.91 22.75 31.5 22.75Z"
                fill="white" />
            </svg>

            <div class="desc">
              <h5 class="font-jakarta">Layanan yang Lengkap</h5>
              <p class="font-jakarta">Melayani berbagai jenis service handphone untuk dengan kualitas yang baik.</p>
            </div>
          </div>
          <div class="transaction-item">
            <svg width="50" height="51" viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect y="0.5" width="50" height="50" rx="12" fill="#4F46E5" />
              <path
                d="M28.22 20.05H18.78C18.5 20.05 18.24 20.06 18 20.07C15.63 20.21 15 21.08 15 23.78V24.36C15 24.91 15.45 25.36 16 25.36H31C31.55 25.36 32 24.91 32 24.36V23.78C32 20.8 31.24 20.05 28.22 20.05Z"
                fill="white" />
              <path
                d="M16 26.86C15.45 26.86 15 27.31 15 27.86V30.77C15 33.75 15.76 34.5 18.78 34.5H28.22C31.19 34.5 31.97 33.78 32 30.93V27.86C32 27.31 31.55 26.86 31 26.86H16ZM19.96 32.06H18.25C17.84 32.06 17.5 31.72 17.5 31.31C17.5 30.9 17.84 30.56 18.25 30.56H19.97C20.38 30.56 20.72 30.9 20.72 31.31C20.72 31.72 20.38 32.06 19.96 32.06ZM25.55 32.06H22.11C21.7 32.06 21.36 31.72 21.36 31.31C21.36 30.9 21.7 30.56 22.11 30.56H25.55C25.96 30.56 26.3 30.9 26.3 31.31C26.3 31.72 25.97 32.06 25.55 32.06Z"
                fill="white" />
              <path
                d="M35.0001 26.83V21.59C35.0001 18.46 33.2101 17.1 30.5101 17.1H21.5801C20.8201 17.1 20.1401 17.21 19.5401 17.44C19.0701 17.61 18.6501 17.86 18.3101 18.19C18.1301 18.36 18.2701 18.64 18.5301 18.64H29.4001C31.6501 18.64 33.4701 20.46 33.4701 22.71V29.88C33.4701 30.13 33.7401 30.27 33.9201 30.09C34.6101 29.36 35.0001 28.29 35.0001 26.83Z"
                fill="white" />
            </svg>

            <div class="desc">
              <h5 class="font-jakarta">Hasil dan Garansi</h5>
              <p class="font-jakarta">Hasil yang kami jamin terbaik akan kami tambahkan juga garansi 1 minggu setelah
                barang diterima.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End : Transaction -->
  <!-- Part -->
  <section class="part">
    <div class="container">
      <div class="part-title">
        <h2 class="font-jakarta">Layanan Kami</h2>
      </div>
      <div class="row">
        <div class="col-xl-4">
          <div class="part-card">
            <div class="image">
              <img src="{{ url('images/service2.png') }}" alt="part">
            </div>
            <div class="body">
              <h5 class="title font-jakarta">Service Mesin Handphone</h5>
              <p class="text">Kamera, kelistrikan, dan lainnya</p>
            </div>
            <div class="logo">
              <div class="brand">
                <img src="{{ url('images/xiaomi.png') }}" alt="brand">
              </div>
              <div class="brand">
                <img src="{{ url('images/samsung.png') }}" alt="brand">
              </div>
              <div class="brand">
                <img src="{{ url('images/oppo.png') }}" alt="brand">
              </div>
              <div class="brand">
                <img src="{{ url('images/vivo.png') }}" alt="brand">
              </div>
            </div>

          </div>
        </div>

        <div class="col-xl-4">
          <div class="part-card">
            <div class="image">
              <img src="{{ url('images/service1.png') }}" alt="part">
            </div>
            <div class="body">
              <h5 class="title font-jakarta">Service Baterai</h5>
              <p class="text">Ganti, perbaiki baterai dan lainnya</p>
            </div>
            <div class="logo">
              <div class="brand">
                <img src="{{ url('images/xiaomi.png') }}" alt="brand">
              </div>
              <div class="brand">
                <img src="{{ url('images/samsung.png') }}" alt="brand">
              </div>
              <div class="brand">
                <img src="{{ url('images/oppo.png') }}" alt="brand">
              </div>
              <div class="brand">
                <img src="{{ url('images/vivo.png') }}" alt="brand">
              </div>
            </div>

          </div>
        </div>
        <div class="col-xl-4">
          <div class="part-card">
            <div class="image">
              <img src="{{ url('images/service3.png') }}" alt="part">
            </div>
            <div class="body">
              <h5 class="title font-jakarta">Service Layar LCD</h5>
              <p class="text">Layar LCD, layar dalam, dan lainnya</p>
            </div>
            <div class="logo">
              <div class="brand">
                <img src="{{ url('images/xiaomi.png') }}" alt="brand">
              </div>
              <div class="brand">
                <img src="{{ url('images/samsung.png') }}" alt="brand">
              </div>
              <div class="brand">
                <img src="{{ url('images/oppo.png') }}" alt="brand">
              </div>
              <div class="brand">
                <img src="{{ url('images/vivo.png') }}" alt="brand">
              </div>
            </div>

          </div>
        </div>
        <button>Selengkapnya</button>

      </div>
    </div>
  </section>
  <!-- End : Part -->
  <!-- Working -->
  <div class="working" id="working">
    <div class="container">
      <div class="row justify-content-xl-between align-items-xl-center">
        <div class="col-xl-4">
          <div class="working-way">
            <p class="font-jakarta">Cara Kerja</p>
            <h5 class="font-jakarta">Langkah Sederhana Untuk Perbaikan</h5>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="row">
            <div class="col-xl-6">
              <div class="working-count">
                <h5>5,910+</h5>
                <p>Customers yang menggunakan layanan</p>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="working-count">
                <h5>240+</h5>
                <p>Jenis handphone yang sudah pernah kami layani</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="step-wrapper">
        <div class="row justify-content-center">
          <div class="col-xl-3">
            <div class="working-step">
              <div class="image step-1">
                <img src="{{ url('images/work1.png') }}" alt="working">
                <div class="body">
                  <p class="text">Isi formulir reservasi yang disediakan.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3">
            <div class="working-step">
              <div class="image step-2">
                <img src="{{ url('images/work2.png') }}" alt="working">
                <div class="body">
                  <p class="text">Admin akan mendiagnosa dan melakukan perbaikan</p>
                </div>
              </div>
            </div>

          </div>
          <div class="col-xl-3">
            <div class="working-step">
              <div class="image step-3">
                <img src="{{ url('images/work3.png') }}" alt="working">
                <div class="body">
                  <p class="text">Selesai, dan ada garansi 2 minggu</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End : Working -->
  <!-- Technician -->
  <div class="technician">
    <div class="container">
      <div class="row align-items-xl-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="row">
            <div class="col-xl-4">
              <div class="technician-image ">
                <img src="{{ url('images/teknisi1.png') }}" alt="technician">
              </div>
            </div>
            <div class="col-xl-4">
              <div class="technician-image">
                <img src="{{ url('images/teknisi2.png') }}" alt="technician">
              </div>
            </div>
            <div class="col-xl-4">
              <div class="technician-image">
                <img src="{{ url('images/teknisi3.png') }}" class="rounded-circle" alt="technician">
              </div>
            </div>
            <div class="col-xl-4">
              <div class="technician-image">
                <img src="{{ url('images/teknisi4.png') }}" class="rounded-circle" alt="technician">
              </div>
            </div>
            <div class="col-xl-4">
              <div class="technician-image">
                <img src="{{ url('images/teknisi5.png') }}" alt="technician">
              </div>
            </div>
            <div class="col-xl-4">
              <div class="technician-image">
                <img src="{{ url('images/teknisi6.png') }}" alt="technician">
              </div>
            </div>

          </div>
        </div>
        <div class="col-xl-5">
          <div class="technician-desc">
            <h5 class="font-jakarta">Teknisi Kami</h5>
            <p>Discover the brilliance behind Embrace. Our team blends innovation and artistry to
              craft digital wonders that captivate</p>
          </div>
          <div class="technician-count font-jakarta">6 teknisi</div>
        </div>
      </div>
    </div>
  </div>
  <!-- End : Technician -->
  <!-- Testimonial -->
  <div class="testimonial" id="testimonial">
    <div class="container">
      <div class="row justify-content-xl-center">
        <div class="col-xl-6">
          <div class="testimonial-title">
            <h5 class="font-jakarta">Apa kata Mereka</h5>
            <p class="font-jakarta">Ini adalah beberapa testimoni dari pelanggan kami setelah memperbaiki handphone
              nya di Bayu Tirta Cell</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-xl-center text-center">
        <div class="testimonial-carousel owl-carousel owl-theme">
          <div class="item text-start">
            <span class="font-jakarta title">It’s just incredible!</span>
            <p class="font-jakarta desc">It’s just 1 month since I’m using Spend.In to manage my business expenses,
              but
              the result is very
              satisfying! My business finance now more neat than before, thanks to Spend.In!</p>
            <hr>

            <div class="profile">
              <div class="image">
                <img src="{{url('images/profile1.png') }}" alt="profile">
              </div>
              <div class="position">
                <h5 class="font-jakarta">Jimmy Bartney</h5>
                <p class="font-jakarta">Product Manager at Picko Lab</p>
              </div>
            </div>
          </div>
          <div class="item text-start">
            <span class="font-jakarta title">Satisfied User Here!</span>
            <p class="font-jakarta desc">Never thought that with Spend.In managing my business expenses is so easy!
              Been using this platform for 3 months and still counting!</p>
            <hr>

            <div class="profile">
              <div class="image">
                  <img src="{{ url('images/profile2.png') }}" alt="profile">
              </div>
              <div class="position">
                <h5 class="font-jakarta">Natasha Romanoff</h5>
                <p class="font-jakarta">Black Widow</p>
              </div>
            </div>
          </div>
          <div class="item text-start">
            <span class="font-jakarta title">No doubt, Spend.In is the best!</span>
            <p class="font-jakarta desc">“The best”! That’s what I want to say to this platform, didn’t know that
              there’s a platform to help you manage your business expenses like this! Very recommended to you who
              have a big business!</p>
            <hr>
            <div class="profile">
              <div class="image">
                  <img src="{{ url('images/profile3.png') }}" alt="profile">
              </div>
              <div class="position">
                <h5 class="font-jakarta">Moritika Kazuki</h5>
                <p class="font-jakarta">Finance Manager at Mangan</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- End : Testimonial -->
  <!-- Question -->
  <div class="question" id="question">
    <div class="container">
      <div class="row justify-content-xl-between ">
        <div class="col-xl-3 align-self-center">
          <div class="question-desc">
            <h5 class="font-jakarta">Hal yang sering Ditanyakan</h5>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="question-accordion">
            <div class="accordion " id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    How do i sign up for the project?
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the
                    collapse plugin adds the appropriate classes that we use to style each element. These classes
                    control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                    modify any of this with custom CSS or overriding our default variables. It's also worth noting
                    that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                    does limit overflow.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    What thing that i should prepare before starting?
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                    collapse plugin adds the appropriate classes that we use to style each element. These classes
                    control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                    modify any of this with custom CSS or overriding our default variables. It's also worth noting
                    that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                    does limit overflow.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Does my company need help for marketing advices?
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                    collapse plugin adds the appropriate classes that we use to style each element. These classes
                    control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                    modify any of this with custom CSS or overriding our default variables. It's also worth noting
                    that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                    does limit overflow.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End : Question -->
  <!-- Devices -->
  <div class="devices mt-7rem">
    <div class="container">
      <div class="row justify-content-xl-center">
        <div class="col-xl-6">
          <div class="devices-title">
            <h5 class="font-jakarta">Cari Tahu Seputar Perangkat Kamu</h5>
            <p class="font-jakarta">Beberapa tulisan dari tim kami untuk kamu agar semakin memahami perangkat kamu.
            </p>
          </div>
        </div>
      </div>
      <div class="devices-item">
        <div class="row">
          <div class="col-xl-4">
            <div class="card border-0 ">
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
                  <img src="{{ url('images/profiledev1.png') }}" class="card-img-top" alt="devices">
              </div>
                <div class="position">
                  <h5>Ralph Edwards</h5>
                  <p>5 min read</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4">
            <div class="card border-0 ">
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
            </div>
          </div>
          <div class="col-xl-4">
            <div class="card border-0 ">
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
            </div>
          </div>

        </div>
        <div class="devices-button">
          <button>Selengkapnya</button>
        </div>
      </div>
    </div>
  </div>
  <!-- End : devices -->
  <!-- consultation -->
  <div class="consultation" id="consultation">
    <div class="container">
      <div class="row justify-content-lg-between">
        <div class="col-xl-5">
          <div class="consultation-title">
            <h2 class="font-jakarta">Ragu dengan kerusakan? Konsultasikan Sekarang!</h2>
          </div>
          <div class="consultation-image">
            <img src="{{ url('images/form.png') }}" alt="phone">
          </div>
        </div>
        <div class="col-xl-6">
          <div class="consultation-form">
            <div class="form">
              <label for="name">Nama <span>*</span></label>
              <div class="input">
                <input type="text" name="name" placeholder="Masukkan nama kamu">
              </div>
            </div>
            <div class="form mt-xl-4">
              <label for="name">Nomor WhatsApp <span>*</span></label>
              <div class="input">
                <input type="text" name="name" placeholder="Masukkan nomor whatsapp kamu">
              </div>
            </div>
            <div class="form mt-xl-4">
              <label for="name">Merk HP <span>*</span></label>
              <div class="input">
                <input type="text" name="name" placeholder="Tulis merk HP kamu">
              </div>
            </div>
            <div class="form mt-xl-4">
              <label for="name">Deskripsikan Kasus <span>*</span></label>
              <div class="input">
                <textarea name="" id="" cols="10" rows="5" placeholder="Ceritakan keluhan Handphone"></textarea>
              </div>
            </div>
            <div class="form-file mt-xl-4">
              <label for="name">Upload foto / video pendukung <span>*</span></label>
              <div class="box">
                <input type="file" name="file-5[]" id="file-5" class="inputfile inputfile-4"
                  data-multiple-caption="{count} files selected" multiple />
                <label for="file-5">
                  <figure class="text-xl-center"><img src="{{ url('images/copas.png') }}" alt=""></figure>
                  <p>Tarik file kesini atau <span>cari di file</span></p>

                </label>
              </div>
            </div>
            <div class="button-form">
              <button>Kirim</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End : consultation -->
</main>

@endsection
