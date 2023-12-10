@extends('layout')

@section('title', 'Bayu Celluler | Service')

@section('content')
  
<main>
  <div class="article-detail">
    <div class="container">
      <div class="title">
        <span class="tag">
          article
        </span>
        <div class="desc">
          <h5 class="text font-jakarta">Merawat HP agar Awet</h5>
          <div class="user">
            <div class="profile">
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
      <div class="row">
        <div class="col-xl-12">
          <div class="article-detail-image">
            <img src="{{ url('images/articledetail.png') }}" alt="detail">
          </div>
          <div class="article-detail-desc">
            <p class="font-jakarta">Merawat ponsel agar tetap awet dan berfungsi baik dalam jangka waktu yang lama
              memerlukan beberapa
              langkah sederhana namun penting. Berikut adalah beberapa tips untuk merawat ponsel Anda</p>
          </div>
          <div class="article-detail-list">
            <ol type="1">
              <li>
                <div>
                  <h5 class="font-jakarta">Gunakan Pelindung Layar dan Casing</h5>
                  <p class="font-jakarta">Pelindung layar dapat mencegah goresan dan kerusakan pada layar, sedangkan
                    casing dapat
                    melindungi bodi ponsel dari benturan dan goresan.</p>
                </div>
              </li>
              <li>
                <div>
                  <h5 class="font-jakarta">Hindari Paparan Suhu Ekstrem</h5>
                  <p class="font-jakarta">Jangan meninggalkan ponsel di tempat yang terlalu panas atau terlalu dingin,
                    karena suhu ekstrem
                    dapat merusak baterai dan komponen internal.</p>
                </div>
              </li>
              <li>
                <div>
                  <h5 class="font-jakarta">Jauhkan dari Air dan Kelembapan</h5>
                  <p class="font-jakarta">Air dapat merusak komponen elektronik. Gunakan ponsel dengan hati-hati di
                    dekat air dan
                    pertimbangkan penggunaan casing tahan air jika Anda sering berada di lingkungan lembap</p>
                </div>
              </li>
              <li>
                <div>
                  <h5 class="font-jakarta">Charger dengan Benar</h5>
                  <p class="font-jakarta">Gunakan charger asli atau yang berkualitas baik. Jangan biarkan baterai
                    terlalu lama di-charge
                    setelah penuh, dan hindari menggunakan ponsel saat sedang di-charge untuk menghindari panas
                    berlebih</p>
                </div>
              </li>
              <li>
                <div>
                  <h5 class="font-jakarta">Bersihkan secara Berkala</h5>
                  <p class="font-jakarta">Gunakan lap mikrofiber untuk membersihkan layar dan bodi ponsel. Hindari
                    penggunaan cairan
                    pembersih yang keras.</p>
                </div>
              </li>
              <li>
                <div>
                  <h5 class="font-jakarta">Pembaruan Software</h5>
                  <p class="font-jakarta">Selalu perbarui sistem operasi dan aplikasi ke versi terbaru untuk
                    memastikan keamanan dan
                    performa terbaik</p>
                </div>
              </li>
              <li>
                <div>
                  <h5 class="font-jakarta">Hindari Penyimpanan Berlebih</h5>
                  <p class="font-jakarta">Jangan memenuhi memori ponsel dengan data yang tidak perlu. Bersihkan cache
                    dan uninstall
                    aplikasi yang tidak digunakan.</p>
                </div>
              </li>
              <li>
                <div>
                  <h5 class="font-jakarta">Penggunaan Baterai yang Bijak</h5>
                  <p class="font-jakarta"> Hindari membiarkan baterai ponsel Anda terlalu sering terkuras habis
                    sebelum di-charge kembali.
                  </p>
                </div>
              </li>
              <li>
                <div>
                  <h5 class="font-jakarta">Lindungi dari Virus dan Malware</h5>
                  <p class="font-jakarta"> Pasang aplikasi antivirus yang terpercaya dan jangan mengunduh aplikasi
                    atau konten dari sumber
                    yang tidak dikenal.</p>
                </div>
              </li>
              <li>
                <div>
                  <h5 class="font-jakarta">Hindari Jatuh dan Benturan</h5>
                  <p class="font-jakarta">Meskipun menggunakan casing, usahakan agar ponsel tidak sering terjatuh atau
                    terbentur.</p>
                </div>
              </li>
          </div>
          <div class="article-detail-desc">
            <p class="font-jakarta">Dengan mengikuti tips ini, Anda dapat membantu memperpanjang umur ponsel Anda dan
              menjaganya agar tetap berfungsi dengan baik untuk waktu yang lebih lama.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Devices -->
  <div class="devices">
    <div class="container">
      <div class="row">
        <div class="col-xl-6">
          <div class="details-title">
            <h5 class="font-jakarta">Baca Artikel lainnya</h5>
            </p>
          </div>
        </div>
      </div>
      <div class="devices-item m-0">
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
      </div>
    </div>
  </div>
  <!-- End : devices -->
</main>
@endsection
