@extends('layouts.webapp')
@section('content')
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="/">Harmoni Kost</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="/">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto " href="/ikost/daftarkos">Kos</a></li>
                    <li><a class="nav-link scrollto " href="/ikost/rekomendasi">Recomendation System</a></li>
                    <li><a class="nav-link scrollto" href="/sesi">Login</a></li>
                </ul>

            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Sedang bingung mencari kos yang sesuai? Tenang, kami punya solusinya!</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Tidak perlu repot-repot keliling kota lagi. Dengan platform kami, Anda bisa menemukan kos impian hanya dengan beberapa klik. Temukan berbagai pilihan kos yang sesuai dengan kebutuhan dan anggaran Anda, lengkap dengan foto, fasilitas, dan ulasan dari penghuni sebelumnya. Hemat waktu dan tenaga, dan dapatkan kos yang tepat untuk Anda. Ayo, mulai pencarian kos Anda sekarang juga dan nikmati kemudahan yang kami tawarkan!</h2>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                    <img src="{{ 'assets/img/hero-img.jpg' }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->
    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="testimonials section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>About Us</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                        <p style="text-align: justify">
                        Harmoni Kost adalah platform yang menyediakan informasi lengkap tentang tempat kos dan membantu merekomendasikan kos sesuai dengan kriteria seperti harga, fasilitas, lokasi, luas kamar, dan tingkat keamanan yang tersedia.
                        </p>
                        <ul>
                            <li><i class="double-line"></i> Pilih Menu Sistem Rekomendasi: Mulailah dengan memilih menu ini untuk mendapatkan rekomendasi kos.</li>
                            <li><i class="double-line"></i> Masukkan Bobot Kriteria: Sesuaikan bobot kriteria kos sesuai dengan kebutuhan Anda, seperti harga, fasilitas, dan lokasi.</li>
                            <li><i class="double-line"></i> Lihat Rekomendasi: Sistem akan menampilkan daftar kos dengan peringkat tertinggi berdasarkan kriteria yang Anda masukkan.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <p style="text-align: justify">
                        Dengan banyaknya pekerja dan mahasiswa yang datang dari luar kota untuk bekerja atau menuntut ilmu, kebutuhan akan tempat kos sangat tinggi. Kos sering menjadi pilihan utama karena lebih efisien dari segi biaya, waktu, dan tenaga. Namun, beragam pilihan kos dengan variasi harga, fasilitas, dan lokasi bisa membingungkan bagi mereka yang mencari tempat tinggal sementara. Oleh karena itu, diperlukan sebuah sistem yang dapat membantu menemukan informasi tentang tempat kos dan memberikan rekomendasi kos yang sesuai dengan kriteria seperti harga, fasilitas, dan lokasi untuk memastikan kenyamanan penghuninya.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Kost</h2>
                    <p>Informasi pilihan Kos yang tersedia</p>
                </div>

                <div class="py-5">
                    <div class="container">
                        <div class="row">
                            @foreach ($tabelkos as $item)
                                <div class="col-md-3 mt-3">
                                    <div class="card">
                                        <img src="{{ asset('images/' . $item->image) }}" alt="kos image" width="300px"
                                            height="300px">
                                        <div class="card-body">
                                            <h5>{{ $item->nama_kos }}</h5>
                                            <p>biaya sewa: {{ $item->harga_sewa }} /bulan</p>
                                            <p>luas kamar: {{ $item->luas_kamar }} m<sup>2</sup></p>
                                            <small>{{ $item->keterangan }}</small>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-3 d-flex justify-content-center">
                            <a href="/ikost/daftarkos" class="btn btn-primary btn-lg btn-block " role="button"
                                aria-pressed="true">Selengkapnya</a>
                        </div>
                    </div>
                </div>



            </div>
        </section><!-- End Features Section -->





    </main><!-- End #main -->
@endsection
