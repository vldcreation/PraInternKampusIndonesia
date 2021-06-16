@extends('layouts.app')

@section('content')
<!--Rekmoendasi Kampus-->
<div class="recomendation-container">
        <div id="recomendation-banner">
            <h1>Website Untuk Mencari Informasi <br> Seputar Kuliah</h1> <br>
            <p>Dapatkan informasi seputar dunia perkuliahan secara terupdate dari <br> kami melalui aplikasi Kampus <br> Indonesia</p>
            <button type="button" id="search-another-campus">Cari Kampus Lainnya</button>
        </div>
        <h4>Rekomendasi Kampus Terbaik</h4>
        <button type="button" class="lihat-semua-kampus">Lihat Kampus Lain ></button>
        <div class="rekomendasi-kampus-terbaik">
        @if(!is_null($data))
            @foreach($data['campus'] as $key => $obj)
            <div class="kampus-card">
                <div class="ava-campus" id="campus1">
                    <button type="button" class="love-button">
                <img src="{{ asset('kampusindonesia/assets/iconlove.png')}}">
              </button>
                    <img class="logo-campus" src="{{ asset('kampusindonesia/assets/'.$obj['path_logo'])}}">
                </div>

                <h6 class="label-akreditasi">
                    Akreditasi : {{ $obj['akreditasi']}}
                </h6>
                <h5 class="Nama-kampus">
                {{ $obj['nama']}}
                </h5>
                <p class="title-kampus">
                    <img class="pin" src="{{ asset('kampusindonesia/assets/medal.png')}}"> {{ $obj['jenis']}}
                </p>
                <button type="button" class="lihat-detail">Lihat Detail</button>
            </div>
            @endforeach
        @endif
            <!-- <div class="kampus-card">
                <div class="ava-campus" id="campus2">
                    <button type="button" class="love-button">
                <img src="{{ asset('kampusindonesia/assets/iconlove.png')}}">
              </button>
                    <img class="logo-campus" src="{{ asset('kampusindonesia/assets/logokampusUGM.png')}}">
                </div>

                <h6 class="label-akreditasi">
                    Akreditasi : A
                </h6>
                <h5 class="Nama-kampus">
                    Universitas Gadjah Mada
                </h5>
                <p class="title-kampus">
                    <img class="pin" src="{{ asset('kampusindonesia/assets/medal.png')}}"> Negeri
                </p>
                <button type="button" class="lihat-detail">Lihat Detail</button>
            </div>

            <div class="kampus-card">
                <div class="ava-campus" id="campus3">
                    <button type="button" class="love-button">
                <img src="{{ asset('kampusindonesia/assets/iconlove.png')}}">
              </button>
                    <img class="logo-campus" src="{{ asset('kampusindonesia/assets/logokampusUGM.png')}}">
                </div>

                <h6 class="label-akreditasi">
                    Akreditasi : A
                </h6>
                <h5 class="Nama-kampus">
                    Universitas Gadjah Mada
                </h5>
                <p class="title-kampus">
                    <img class="pin" src="{{ asset('kampusindonesia/assets/medal.png')}}"> Negeri
                </p>
                <button type="button" class="lihat-detail">Lihat Detail</button>
            </div>
             
            <div class="kampus-card">
                <div class="ava-campus" id="campus3">
                    <button type="button" class="love-button">
                <img src="{{ asset('kampusindonesia/assets/iconlove.png')}}">
              </button>
                    <img class="logo-campus" src="{{ asset('kampusindonesia/assets/logokampusUGM.png')}}">
                </div>

                <h6 class="label-akreditasi">
                    Akreditasi : A
                </h6>
                <h5 class="Nama-kampus">
                    Universitas Gadjah Mada
                </h5>
                <p class="title-kampus">
                    <img class="pin" src="{{ asset('kampusindonesia/assets/medal.png')}}"> Negeri
                </p>
                <button type="button" class="lihat-detail">Lihat Detail</button>
            </div> -->

        </div>
    </div>

    @if(!is_null($data))
    <div class="location">
        <h2>Lokasi Kampus Terpopuler</h2>
        <div class="location-container">
            <div class="location-container-row1">  <!-- Currently only 4 images , not master on Front End :v -->
                @foreach($data['locations'] as $key => $obj)
                    <img src="{{ asset('kampusindonesia/assets/'.$obj['path_logo'])}}">
                @endforeach
            </div>
            <!-- <div class="location-container-row2">
                <img src="{{ asset('kampusindonesia/assets/cardmedan.png')}}">
                <img src="{{ asset('kampusindonesia/assets/cardsemarang.png')}}">
                <img src="{{ asset('kampusindonesia/assets/cardmalang.png')}}">
                <img src="{{ asset('kampusindonesia/assets/cardbali.png')}}">
            </div> -->
        </div>
    </div>
    @endif

    <div class="available-feature">
        <img src="{{ asset('kampusindonesia/assets/Vector%202.png')}}">
        <h1>Fitur Yang Tersedia Di Kampus Indonesia</h1>

        <div class="available-feature-row1">

            <div class="feature-item">
                <img src="{{ asset('kampusindonesia/assets/school%203.png')}}" class="image-available-feature">
                <p>Kampus</p>
            </div>

            <div class="feature-item">
                <img src="{{ asset('kampusindonesia/assets/graduation%201.png')}}" class="image-available-feature">
                <p>Beasiswa</p>
            </div>

            <div class="feature-item">
                <img src="{{ asset('kampusindonesia/assets/conference_presentation__monochromatic%202.png')}}" class="image-available-feature">
                <p>Seminar dan Workshop</p>
            </div>

        </div>

        <div class="available-feature-row2">

            <div class="feature-item">
                <img src="{{ asset('kampusindonesia/assets/lomba.png')}}" class="image-available-feature">
                <p>Lomba</p>
            </div>

            <div class="feature-item">
                <img src="{{ asset('kampusindonesia/assets/career__monochromatic%202.png')}}" class="image-available-feature">
                <p>Lowongan</p>
            </div>

            <div class="feature-item">
                <img src="{{ asset('kampusindonesia/assets/checklist__monochromatic%202.png')}}" class="image-available-feature">
                <p>UTBK</p>
            </div>

        </div>

        <button type="button" id="available-feature-button">
            <a href="#">Lihat Fitur Lainnya</a>
            </button>
    </div>

    <div class="container-lowongan">
        <img src="{{ asset('kampusindonesia/assets/ilustrasilowongan.png')}}">
        <div class="caption">
            <h1>Apakah Kamu Sedang Mencari Pekerjaan ? </h1>
            <p>Temukan Pekerjaan Terbaik Mu Disini</p>
            <button type="button">Cari Lowongan</button>
        </div>
    </div>
    <div class="illustrasi">
        <img src="{{ asset('kampusindonesia/assets/elipse1.png')}}" id="above-elipse">
        <img src="{{ asset('kampusindonesia/assets/elipse1.png')}}" id="bottom-elipse">
    </div>

    
    <div class="container-seminar-beasiswa">
        <h1>Informasi Seminar dan Beasiswa</h1>
        <ul>
            <li>
                <a href="#seminar" id="ButtonSeminar">Seminar</a>
            </li>
            <li>
                <a href="#beasiswa" id="ButtonBeasiswa">Beasiswa</a>
            </li>
            <li>
                <button type="button" id="container-seminar-beasiswa-button">Lihat Semua > </button>
            </li>
        </ul>

        <div id="seminar">
            <div class="first-banner">
                <img src="{{ asset('kampusindonesia/assets/BannerSeminar.png')}}" class="foto-banner-first">
                <h6 class="label">Seminar</h6>
                <h3 class="title">Sharing About UI/UX Design</h3>
                <p class="date">
                    <img src="{{ asset('kampusindonesia/assets/kalender.png')}}"> 16 September 2020
                </p>
                <p class="place">
                    <img src="{{ asset('kampusindonesia/assets/map-pin.png')}}"> Zoom Meeting
                </p>
            </div>
            <div class="banner">
                <img src="{{ asset('kampusindonesia/assets/bannerseminar2.png')}}" class="foto-banner">
                <h6 class="label">Seminar</h6>
                <h3 class="title">Introduction UI/UX Design</h3>
                <p class="date">
                    <img src="{{ asset('kampusindonesia/assets/kalender.png')}}"> 16 September 2020
                </p>
                <p class="place">
                    <img src="{{ asset('kampusindonesia/assets/map-pin.png')}}"> Zoom Meeting
                </p>
            </div>
            <div class="banner">
                <img src="{{ asset('kampusindonesia/assets/BannerSeminar.png')}}" class="foto-banner">
                <h6 class="label">Workshop</h6>
                <h3 class="title">Sharing About UI/UX Design</h3>
                <p class="date">
                    <img src="{{ asset('kampusindonesia/assets/kalender.png')}}"> 16 September 2020
                </p>
                <p class="place">
                    <img src="{{ asset('kampusindonesia/assets/map-pin.png')}}"> Zoom Meeting
                </p>
            </div>
            <div class="banner">
                <img src="{{ asset('kampusindonesia/assets/bannerseminar2.png')}}" class="foto-banner">
                <h6 class="label">Workshop</h6>
                <h3 class="title">Sharing About UI/UX Design</h3>
                <p class="date">
                    <img src="{{ asset('kampusindonesia/assets/kalender.png')}}"> 16 September 2020
                </p>
                <p class="place">
                    <img src="{{ asset('kampusindonesia/assets/map-pin.png')}}"> Zoom Meeting
                </p>
            </div>
            <div class="banner">
                <img src="{{ asset('kampusindonesia/assets/BannerSeminar.png')}}" class="foto-banner">
                <h6 class="label">Workshop
                </h6>
                <h3 class="title">Sharing About UI/UX Design</h3>
                <p class="date">
                    <img src="{{ asset('kampusindonesia/assets/kalender.png')}}"> 16 September 2020
                </p>
                <p class="place">
                    <img src="{{ asset('kampusindonesia/assets/map-pin.png')}}"> Zoom Meeting
                </p>
                </p>
            </div>
        </div>

        <div id="beasiswa">
            <div class="first-banner">
                <img src="{{ asset('kampusindonesia/assets/oxford.jpg')}}" class="foto-banner-first">
                <h6 class="label">Seminar</h6>
                <h3 class="title">Oxford University Membuka Kesempatan Beasiswa</h3>
                <p class="date">
                    <img src="{{ asset('kampusindonesia/assets/kalender.png')}}"> 16 September 2020
                </p>
                <p class="place">
                    <img src="{{ asset('kampusindonesia/assets/map-pin.png')}}"> Zoom Meeting
                </p>
                </p>
            </div>
            <div class="banner">
                <img src="{{ asset('kampusindonesia/assets/oxford.jpg')}}" class="foto-banner">
                <h6 class="label">Seminar</h6>
                <h3 class="title">Oxford University Membuka Kesempatan Beasiswa</h3>
                <p class="date">
                    <img src="{{ asset('kampusindonesia/assets/kalender.png')}}"> 16 September 2020
                </p>
                <p class="place">
                    <img src="{{ asset('kampusindonesia/assets/map-pin.png')}}"> Zoom Meeting
                </p>
                </p>
            </div>
            <div class="banner">
                <img src="{{ asset('kampusindonesia/assets/oxford.jpg')}}" class="foto-banner">
                <h6 class="label">Workshop</h6>
                <h3 class="title">Oxford University Membuka Kesempatan Beasiswa</h3>
                <p class="date">
                    <img src="{{ asset('kampusindonesia/assets/kalender.png')}}"> 16 September 2020
                </p>
                <p class="place">
                    <img src="{{ asset('kampusindonesia/assets/map-pin.png')}}"> Zoom Meeting
                </p>
                </p>
            </div>
            <div class="banner">
                <img src="{{ asset('kampusindonesia/assets/oxford.jpg')}}" class="foto-banner">
                <h6 class="label">Workshop</h6>
                <h3 class="title">Oxford University Membuka Kesempatan Beasiswa</h3>
                <p class="date">
                    <img src="{{ asset('kampusindonesia/assets/kalender.png')}}"> 16 September 2020
                </p>
                <p class="place">
                    <img src="{{ asset('kampusindonesia/assets/map-pin.png')}}"> Zoom Meeting
                </p>
            </div>
            <div class="banner">
                <img src="{{ asset('kampusindonesia/assets/oxford.jpg')}}" class="foto-banner">
                <h6 class="label">Workshop
                </h6>
                <h3 class="title">Oxford University Membuka Kesempatan Beasiswa</h3>
                <p class="date">
                    <img src="{{ asset('kampusindonesia/assets/kalender.png')}}"> 16 September 2020
                </p>
                <p class="place">
                    <img src="{{ asset('kampusindonesia/assets/map-pin.png')}}"> Zoom Meeting
                </p>
                </p>
            </div>
        </div>
    </div>
    </div>

    <div class="article-container">

        <h2>Artikel Terbaru Kampus Indonesia</h2>
        <h3>Jangan Sampai terlewat informasi terbaru kampus favoritmu</h3>
        <button type="button" id="prev">
           <img src="{{ asset('kampusindonesia/assets/ikonprev.png')}}">
        </button>
        <button type="button" id="next"> 
          <img src="{{ asset('kampusindonesia/assets/ikonnext.png')}}">
        </button>

        <div id="CarouselArticleFirst">
            <div class="card" id="article-card-first">
                <h6 class="label-top">Terbaru</h6>
                <h6 class="label-center">Artikel</h6>
                <p class="title-article">10 PTN Paling Diminati di <br> SBMPTN 2020</p>
                <p class="date-article"></p>
            </div>
            <div class="card" id="article-card-two">
                <h6 class="label-top">Terbaru</h6>
                <h6 class="label-center">Artikel</h6>
                <p class="title-article">Penyebab Mahasiswa Stress <br>Kuliah Online</p>
                <p class="date-article"></p>
            </div>
            <div class="card" id="article-card-three">
                <h6 class="label-top">Terbaru</h6>
                <h6 class="label-center">Artikel</h6>
                <p class="title-article">Tips Agar Bisa Fokus Ke <br>Pendidikan</p>
                <p class="date-article"></p>
            </div>
        </div>

        <div id="CarouselArticleSecond">
            <div class="card" id="article-card-four">
                <h6 class="label-top">Terbaru</h6>
                <h6 class="label-center">Artikel</h6>
                <p class="title-article">Tips Agar Bisa Fokus Ke <br>Pendidikan</p>
                <p class="date-article"></p>
            </div>
            <div class="card" id="article-card-five">
                <h6 class="label-top">Terbaru</h6>
                <h6 class="label-center">Artikel</h6>
                <p class="title-article">Penyebab Mahasiswa Stress <br>Kuliah Online</p>
                <p class="date-article"></p>
            </div>
            <div class="card" id="article-card-six">
                <h6 class="label-top">Terbaru</h6>
                <h6 class="label-center">Artikel</h6>
                <p class="title-article">10 PTN Paling Diminati di <br> SBMPTN 2020</p>
                <p class="date-article"></p>
            </div>
        </div>
    </div>


    <div class="article-in-mobile">
        <h3>Artikel Terbaru Kampus Indonesia</h3>
        <div class="article-item" id="article-1">
            <h6 class="article-title">
                10 PTN Paling diminati SBMPTN
            </h6>
        </div>
        <div class="article-item" id="article-2">
            <h6 class="article-title">
                Hal yang Menyebabkan Mahasiswa Stress Kuliah Online
            </h6>
        </div>
        <div class="article-item" id="article-3">
            <h6 class="article-title">
                Tips dan Trick Agar Bisa Fokus Kuliah
            </h6>
        </div>
        <div class="article-item" id="article-4">
            <h6 class="article-title">
                PTN yang Membuka Jalur Mandiri
            </h6>
        </div>
    </div>
    <!--FAQ-->
    <div class="partnership">
        <h3>Pertanyaan yang sering diajukan</h3>
        <div class="accordition">
            <div class="accordition-item" id="question1">
                <a class="accordition-link" href="#question1">
                   Aplikasi Apakah Ini?
                   <i class="icon ion-md-add"></i>
                   <i class="icon ion-md-remove"></i>
                </a>
                <div class="answer">
                    <p>
                    Lorem ipsum dolar sit ament cosetetatur adipisicing
                    </p>
                </div>
            </div>

            <div class="accordition-item" id="question2">
                <a class="accordition-link" href="#question2">
                   Aplikasi Apakah Ini?
                   <i class="icon ion-md-add"></i>
                   <i class="icon ion-md-remove"></i>
                </a>
                <div class="answer">
                    <p>
                        Lorem ipsum dolar sit ament cosetetatur adipisicing
                    </p>
                </div>
            </div>

            <div class="accordition-item" id="question3">
                <a class="accordition-link" href="#question3">
                   Aplikasi Apakah Ini?
                   <i class="icon ion-md-add"></i>
                   <i class="icon ion-md-remove"></i>
                </a>
                <div class="answer">
                    <p>
                        Lorem ipsum dolar sit ament cosetetatur adipisicing
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
