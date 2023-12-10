<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">
    <title>@yield('title')</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ url('css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ url('css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>

<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand font-jakarta" href="#"><img src="{{ url('images/logo.png') }}" alt="logo">Bayu Tirta</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ url('/service') }}">Layanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/#working">Cara Kerja</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/#testimonial">Testimonial</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/#question">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/article') }}">Artikel</a>
          </li>
        </ul>
        <button class="ms-auto" ><a href="/#consultation">Book Konsultasi</a></button>
      </div>
    </div>
  </nav>
  <main>
    @yield('content')
</main>
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-xl-10">
          <div class="footer-logo">
            <div class="image">
              <img src="{{ url('images/logo.png') }}" alt="logo">
            </div>
            <h5>Bayu Tirta</h5>
          </div>
          <div class="footer-desc">
            <p class="font-jakartas">Bayu Tirta Cell adalah konter resmi di Malang yang melayani service untuk segala
              jenis handphone android
              yang sudah beroperasi selama
              7 tahun dari tahun 2016 sampai kini.</p>
          </div>
        </div>
      </div>
      <div class="footer-information">
        <div class="row">
          <div class="col-xl-2">
            <div class="telp">
              <svg width="32" height="32" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M5.97942 6.0368C5.59787 6.41877 5.24802 6.88731 5.02182 7.29531C4.73771 7.79396 4.52797 8.34078 4.40152 8.90931L4.33572 9.25282C3.29871 14.5141 4.6157 19.2207 8.96325 23.5373C11.8158 26.3695 13.9788 27.5333 16.9406 27.9582C17.4205 28.0271 17.9218 28.0788 18.5183 28.123L19.7446 28.1975C20.429 28.2329 21.5693 28.2897 21.9586 28.3118C22.4713 28.3411 23.1496 28.243 24.0612 28.0294L24.1993 27.989C24.9951 27.7079 25.7217 27.2518 26.3301 26.6427C28.5566 24.4138 28.5566 20.8 26.3301 18.5711L26.1318 18.3817C23.9795 16.4218 20.6882 16.4039 18.5158 18.3375L18.2582 18.5707L16.8817 19.9486C16.5801 20.2506 16.1051 20.2915 15.7564 20.0456C15.0309 19.5339 13.1032 17.6473 12.6327 17.0043C12.3769 16.6547 12.414 16.1706 12.7201 15.8643L13.9329 14.651L14.0366 14.5666L14.1906 14.4239C14.2184 14.3971 14.2467 14.3693 14.2748 14.3413C16.5655 12.048 16.5655 8.33001 14.2748 6.0368C11.9841 3.74359 8.27012 3.74359 5.97942 6.0368ZM7.84006 7.89948C9.10315 6.635 11.151 6.635 12.4141 7.89948C13.6772 9.16396 13.6772 11.2141 12.4141 12.4786C12.336 12.5568 12.2546 12.6305 12.1701 12.6996L10.86 14.0012C9.63541 15.2266 9.48685 17.1629 10.51 18.5611C11.1504 19.4361 13.2835 21.5238 14.2409 22.1991L14.4256 22.3209C15.7998 23.1667 17.5882 22.9667 18.7424 21.8113L20.0149 20.537L20.0323 20.5281L20.1549 20.4082C21.3559 19.2328 23.2803 19.2432 24.4695 20.4338C25.6684 21.634 25.6684 23.5798 24.4695 24.78L24.265 24.9674C24.0536 25.1445 23.822 25.2904 23.5753 25.4032L23.3762 25.4833L23.0379 25.5578L22.6807 25.6247C22.412 25.6697 22.2173 25.6881 22.1082 25.6819L19.4364 25.5431L18.7286 25.4971L18.1146 25.4454C17.8268 25.4176 17.5647 25.3866 17.3138 25.3506C14.9428 25.0105 13.2858 24.1189 10.8162 21.6669C7.2278 18.1041 6.11555 14.4186 6.84874 10.1338L6.92544 9.71722C6.99495 9.29059 7.12368 8.92297 7.3151 8.58692C7.43164 8.37689 7.63432 8.10545 7.84006 7.89948Z"
                  fill="#D8DCDF" />
              </svg>
              <div class="desc">
                <h5>No. Telp</h5>
                <p>310-437-2766</p>
              </div>
            </div>
          </div>
          <div class="col-xl-1"></div>
          <div class="col-xl-2">
            <div class="whatsapp">
              <svg width="32" height="32" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M26.6119 5.66101C23.8052 2.85107 20.0726 1.30292 16.0961 1.30127C7.90216 1.30127 1.23346 7.96979 1.23016 16.166C1.22906 18.786 1.91351 21.3436 3.21448 23.598L1.10547 31.3013L8.98615 29.234C11.1576 30.4185 13.6022 31.0427 16.0901 31.0435H16.0963C24.2894 31.0435 30.9588 24.3744 30.9619 16.1779C30.9636 12.2056 29.4187 8.47076 26.6119 5.66101ZM16.0961 28.5329H16.091C13.874 28.532 11.6996 27.9362 9.80225 26.8106L9.35126 26.5427L4.67474 27.7695L5.92297 23.21L5.62909 22.7426C4.39221 20.7753 3.73907 18.5015 3.74017 16.1669C3.74274 9.35443 9.28571 3.81201 16.1011 3.81201C19.4014 3.81311 22.5037 5.09998 24.8365 7.43549C27.1693 9.771 28.4532 12.8754 28.4521 16.1769C28.4492 22.9899 22.9066 28.5329 16.0961 28.5329ZM22.8736 19.2789C22.5023 19.0929 20.676 18.1946 20.3354 18.0704C19.9952 17.9465 19.7473 17.8848 19.4999 18.2565C19.2521 18.6282 18.5404 19.465 18.3236 19.7127C18.1068 19.9606 17.8904 19.9918 17.5189 19.8057C17.1473 19.6199 15.9506 19.2275 14.5317 17.962C13.4276 16.9771 12.6821 15.7607 12.4653 15.389C12.2489 15.017 12.4635 14.8353 12.6283 14.631C13.0304 14.1317 13.433 13.6082 13.5568 13.3604C13.6808 13.1125 13.6187 12.8955 13.5257 12.7097C13.433 12.5238 12.6902 10.6955 12.3807 9.95154C12.079 9.22754 11.773 9.32532 11.5449 9.31396C11.3284 9.30316 11.0807 9.30096 10.8329 9.30096C10.5854 9.30096 10.1829 9.3938 9.84235 9.76587C9.50195 10.1378 8.54248 11.0363 8.54248 12.8646C8.54248 14.6929 9.87347 16.4591 10.0591 16.707C10.2448 16.955 12.6785 20.7068 16.4045 22.3156C17.2907 22.6986 17.9825 22.9269 18.5221 23.0981C19.412 23.3809 20.2215 23.3409 20.8616 23.2454C21.5754 23.1386 23.0591 22.3467 23.3689 21.4791C23.6783 20.6114 23.6783 19.8678 23.5853 19.7127C23.4927 19.5578 23.2449 19.465 22.8736 19.2789Z"
                  fill="#D8DCDF" />
              </svg>

              <div class="desc">
                <h5>WhatsApp</h5>
                <p>081223484576</p>
              </div>
            </div>
          </div>
          <div class="col-xl-1"></div>
          <div class="col-xl-3">
            <div class="email">
              <svg width="32" height="32" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M6.66675 5.65039C4.45761 5.65039 2.66675 7.44125 2.66675 9.65039V22.9837C2.66675 25.1929 4.45761 26.9837 6.66675 26.9837H25.3334C27.5426 26.9837 29.3334 25.1929 29.3334 22.9837V9.65039C29.3334 7.44125 27.5426 5.65039 25.3334 5.65039H6.66675ZM6.4341 8.33728C6.50965 8.32399 6.58739 8.31706 6.66675 8.31706H25.3334C25.4128 8.31706 25.4905 8.32399 25.5661 8.33729L16.0001 14.7146L6.4341 8.33728ZM5.33341 10.8084V22.9837C5.33341 23.7201 5.93037 24.3171 6.66675 24.3171H25.3334C26.0698 24.3171 26.6667 23.7201 26.6667 22.9837V10.8085L16.7397 17.4265C16.2918 17.7251 15.7084 17.7251 15.2605 17.4265L5.33341 10.8084Z"
                  fill="#D8DCDF" />
              </svg>


              <div class="desc">
                <h5>Email</h5>
                <p>unreal@outlook.com</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3">
            <div class="address">
              <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M16.0001 5.65007C12.3182 5.65007 9.33341 8.63483 9.33341 12.3167C9.33341 16.0339 11.4823 21.4731 16.0001 26.3905C20.5178 21.4731 22.6667 16.0339 22.6667 12.3167C22.6667 8.63483 19.682 5.65007 16.0001 5.65007ZM6.66675 12.3167C6.66675 7.16207 10.8454 2.9834 16.0001 2.9834C21.1547 2.9834 25.3334 7.16207 25.3334 12.3167C25.3334 17.1863 22.4475 23.7549 16.9429 29.2595C16.4222 29.7802 15.578 29.7802 15.0573 29.2595C9.55267 23.7549 6.66675 17.1863 6.66675 12.3167Z"
                  fill="#D8DCDF" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M16.0001 13.6501C16.7365 13.6501 17.3334 13.0531 17.3334 12.3167C17.3334 11.5804 16.7365 10.9834 16.0001 10.9834C15.2637 10.9834 14.6667 11.5804 14.6667 12.3167C14.6667 13.0531 15.2637 13.6501 16.0001 13.6501ZM16.0001 16.3167C18.2092 16.3167 20.0001 14.5259 20.0001 12.3167C20.0001 10.1076 18.2092 8.31673 16.0001 8.31673C13.7909 8.31673 12.0001 10.1076 12.0001 12.3167C12.0001 14.5259 13.7909 16.3167 16.0001 16.3167Z"
                  fill="#D8DCDF" />
              </svg>

              <div class="desc">
                <h5>Alamat</h5>
                <p>706 Campfire Ave. Meriden, CT 06450</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-copyright">
        <div class="row justify-content-xl-between">
          <div class="col-xl-6">
            <div class="navigation">
              <p>About us</p>
              <p>Contact</p>
              <p>Privacy policy</p>
              <p>Sitemap</p>
              <p>Terms of Use</p>
            </div>
          </div>
          <div class="col-xl-3">
            <div class="copyright">
              <p>© 2000-2021, All Rights Reserved</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="{{ url('js/owl.carousel.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script>
    $(document).ready(function () {
      $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,

      })
    });
  </script>
</body>

</html>