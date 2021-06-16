<!doctype html>
<html lang="en">
    
<!-- Mirrored from www.kampusindonesia.co.id/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Jun 2021 04:07:48 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="{{ asset('kampusindonesia/maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('kampusindonesia/css/style_landingPage.css') }}">
        <link rel="stylesheet" href="{{ asset('kampusindonesia/css/daftar-login-page.css') }}">

        <link rel="preconnect" href="https://fonts.gstatic.com/">

        <!--Font-->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&amp;display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com/">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&amp;display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com/">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&amp;family=Roboto&amp;display=swap" rel="stylesheet">
        <!--Ion Icon-->
        <link rel="stylesheet" href="{{ asset('kampusindonesia/unpkg.com/ionicons%404.5.10-0/dist/css/ionicons.min.css') }}">
        <title>Website Kampus Indonesia</title>
                    </head>
    <body> 
        <!--Navigasi-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('kampusindonesia/assets/logo.png') }}" width="161px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link menu" href="index.html">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle menu" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Fitur
              </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Cari Kampus/Prodi</a>
                            <a class="dropdown-item" href="#">Cari Event</a>
                            <a class="dropdown-item" href="#">Cari Beasiswa</a>
                            <a class="dropdown-item" href="#">Cari Magang</a>
                            <a class="dropdown-item" href="#">Cari Artikel</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu" href="kontak.html">Hubungi Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu" href="blog.html">Blog</a>
                    </li>
                </ul>
                <div id="button-container">
                @if (!\session('status'))
                    <button type="button" id="buttonMasuk" data-toggle="modal" data-target="#loginAcc">Masuk</button>
                    <button type="button" id="buttonDaftar" data-toggle="modal" data-target="#daftarAcc">Daftar</button>
                @endif
                @if(\session('status'))
                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                </form>
                @endif
                </div>
                <br>
                <br>
            </div>
        </div>
    </nav> 
            <div id="first_section">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-xs-12">
                    <div class="caption_panel">
                        <h1>Bingung Cari Informasi <br> Seputar Kuliah ?</h1>
                        <h2>Cari Disini Aja!</h2>
                        <p>Dapatkan informasi seputar dunia perkuliahan secara<br> terupdate dari kami melalui aplikasi kampus indonesia</p>
                    </div>
                </div>
                    <div class="image-panel">
                        <img id="gambar-container" src="{{ asset('kampusindonesia/assets/ilustrasi-container.png')}}" width="473px">
                    </div>
            </div>
            <img id="illustrasi1" src="{{ asset('kampusindonesia/assets/elipse1.png')}}" width="202px" height="32px">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div id="search-container">
                        <input type="search" id="search-box" placeholder="Informasi Seputar Perkuliahan / Cari Kampus">
                        <button type="button">
            <img src="{{ asset('kampusindonesia/assets/icon_search.png')}}">
          </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--Search Kampus-->
    <div id="container-info">
        <div class="container-info-item">
            <img src="{{ asset('kampusindonesia/assets/school%201.png')}}">
        </div>

        <div class="container-info-item">
            <h6>1045</h6>
            <p>Jumlah Kampus <br>yang Terdata Saat Ini</p>
        </div>

        <div class="container-info-item1">
            <img src="{{ asset('kampusindonesia/assets/school%202.png')}}" id="sekolah2">
        </div>

        <div class="container-info-item1">
            <h6>113</h6>
            <p>Jumlah Kampus yang <br>Sudah Terdaftar di Pintara</p>
        </div>
    </div>


    <!-- MODAL Login -->
    <div id="loginAcc" class="modal fade" data-backdrop="static" data-keyboard="false" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg" id="modal-login-box">

            <!-- MODAL LOGIN CONTENT -->
            <div class="modal-content">
                <div class="modal-body">
                    <div class="login-form-header">
                        <h3 class="modal-title"><strong>Selamat Datang Kembali !</strong> <button type="button" class="close" data-dismiss="modal">&times;</button></h3>
                        <p>Belum punya akun ? <a href="#"><strong>Klik disini untuk daftar</strong> </a></p>
                    </div>
                    <form class="socmed-login" action="#" method="">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <a href="{{ route('google') }}" class="btn socmed-btn google-btn" id="btn-google"><img src="{{ asset('kampusindonesia/assets/google-logo.png')}}" style="width:18px; height:18px;"> Masuk dengan Google</a>
                            </div>
                            <div class="col-md-6 .ml-auto">
                                <a href="#" class="btn socmed-btn facebook-btn" id="btn-facebook"><img src="{{ asset('kampusindonesia/assets/facebook_logos.png')}}" style="width:28.5px; height:28.5px;"> Masuk dengan Facebook</a>
                            </div>
                        </div>
                        <div class="separator">
                            <center><span class="separator-text">Atau</span></center>
                        </div>
                    </form>
                    <form method="POST" class="login-container" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row mr-1 ml-1">
                            <input type="email" required class="form-control active" name="email" id="input-email" placeholder="Alamat Email">
                        </div>
                        <div class="form-group row mr-1 ml-1">
                            <input type="password" required class="form-control active" name="password" id="input-password" placeholder="Password">
                            <div class="group">
                                <i id="show-password" class="fa fa-eye-slash"></i>
                            </div>
                        </div>
                        <div class="form-group form-check row mr-1 ml-1">
                            <input type="checkbox" class="form-check-input" id="loginCheckbox">
                            <label class="form-check-label col-sm-9" for="loginCheckbox" id="label-loginCheckbox"><strong> Biarkan saya tetap masuk</strong></label>
                            <a href="#" class="lupaPassword col-sm-3"><span><strong> Lupa Password ?</strong></span> </a>
                        </div>
                        <center> <input type="submit" class="btn btn-login btn-primary mt-3" id="btn-login" name="submit" value="MASUK"></center>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="js/show-login.js"></script> -->
    <!-- END MODAL LOGIN -->

    <!-- MODAL DAFTAR -->
    <div id="daftarAcc" class="modal fade" data-backdrop="static" data-keyboard="false" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg">

            <!-- MODAL DAFTAR CONTENT -->
            <div class="modal-content modal-content-daftar">
                <div class="modal-body">
                    <h3 class="modal-title"><strong>Daftar Sekarang</strong> <button type="button" class="close" data-dismiss="modal">&times;</button></h3>
                    <p class="text-lead">Sudah punya akun ? <a href="#"><strong>Klik disini untuk masuk</strong></a><br>
                        <strong>Daftar sekarang juga agar dapat informasi - informasi seputar kampus favorit anda. </strong></p>
                        <form class="form-daftar" method="POST" action="{{ route('register') }}">
                            @csrf
                        <!-- Input name User  -->
                        <div class="form-group row mr-1 ml-1">
                        <input type="text" class="form-control active" name="name" id="passwordUser" placeholder="Nama Lengkap">
                        <span id="blankMsg" style="color:red; font-size:13px; font-weight:bold;"></span>
                        </div>
                        <!-- Input Email User -->
                        <div class="form-group row mr-1 ml-1">
                            <input type="email" class="form-control active" name="email" id="emailUser" placeholder="Alamat Email">
                            <span id="blankMsg" style="color:red; font-size:13px; font-weight:bold;"></span>
                        </div>
                        <!-- Create a new password -->
                        <div class="form-group row mr-1 ml-1">
                            <input type="password" class="form-control active" name="password" id="pswd1" placeholder="Password">
                            <div class="group">
                                <i id="show-password-user" class="fa fa-eye-slash"></i>
                            </div>
                            <span id="message1" style="color:red; font-size:13px; font-weight:bold;"></span>
                        </div>
                        <!-- Confirm password -->
                        <!-- <div class="form-group row mr-1 ml-1">
                            <input type="password" class="form-control active" name="" id="pswd2" placeholder="Ketik Ulang Password">
                            <div class="group">
                                <i id="show-password-user-ulang" class="fa fa-eye-slash"></i>
                            </div>
                            <span id="message2" style="color:red; font-size:13px; font-weight:bold;"></span>
                        </div> -->
                        <!-- checkbox confirm -->
                        <div class="form-group form-check row mr-1 ml-1">
                            <input type="checkbox" class="form-check-input" id="agreeCheck" name="agree">
                            <label class="form-check-label" for="agree" id="label-daftarCheckbox"><strong>Dengan membuat akun, Anda telah menyetujui Syarat dan Ketentuan yang berlaku</strong> </label>
                            <div id="agree-chk" style="visibility:hidden; color:red; font-size:10px; font-weight:bold;">*harap tunjukkan bahwa Anda menyetujui Syarat dan Ketentuan yang berlaku</div>
                        </div>
                        <!-- Click to create account -->
                        <center> <input type="submit" class="btn btn-login btn-primary mt-4" id="btn-daftar" name="submit" value="BUAT AKUN"></center>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="js/show.js"></script> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <img id="illutrasi2" src="{{ asset('kampusindonesia/assets/elipse1.png')}}" width="178px" height="32px">
    <img id="illustrasi3" src="{{ asset('kampusindonesia/assets/Ellipse%2051.png')}}">

        <main class="py-4">
            @yield('content')
        </main>
        <footer>
        <div class="section">
            <h3>Kampus Indonesia</h3>
            <p>Kami merupakan perusahaan dibidang <br> informasi seputas dunia perkuliahan yang <br> memberikan informasi secara terupdate <br> dan dapat dipercaya sepenuhnya</p>
            <h4>PT Inspirasi Mandiri Nusantara</h4>
            <p>Kec Lowokwaru, Kota Malang, Jawa Timur
            </p>
            <h4>Telepon</h4>
            <p>021 3425 2885</p>
            <h4>Email</h4>
            <p>info@kampusindonesia.co.id</p>
        </div>
        <div class="section">
            <h4>Perusahaan</h4>
            <ul>
                <li>
                    <a href="#">Tentang Kami</a>
                </li>
                <li>
                    <a href="#">Hubungi kami</a>
                </li>
                <li>
                    <a href="#">Karir</a>
                </li>
                <li>
                    <a href="#">FeedBack</a>
                </li>
                <li>
                    <a href="#">Partner</a>
                </li>
            </ul>
        </div>
        <div class="section">
            <h4>Fitur</h4>
            <ul>
                <li>
                    <a href="#">Cari Kampus/Prodi</a>
                </li>
                <li>
                    <a href="#">Cari Seminar/Workshop</a>
                </li>
                <li>
                    <a href="#">Cari Beasiswa</a>
                </li>
                <li>
                    <a href="#">Cari Lomba</a>
                </li>
                <li>
                    <a href="#">Cari Lowongan</a>
                </li>
                <li>
                    <a href="#">UTBK</a>
                </li>
            </ul>
        </div>
        <div class="section">
            <h4>Lainnya</h4>
            <ul>
                <li>
                    <a href="#">Blog</a>
                </li>
                <li>
                    <a href="#">Bantuan</a>
                </li>
            </ul>
        </div>
    </footer>
<!-- Js -->
<script src="{{ asset('kampusindonesia/ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{ asset('kampusindonesia/cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js')}}"></script>
<!-- Latest compiled JavaScript -->
<script src="{{ asset('kampusindonesia/maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js')}}"></script>
<!-- Optional JavaScript -->
<script>
    function pagebeasiswa() {
        seminar.style.display = "none";
        beasiswa.style.display = "flex";
    }
    ButtonBeasiswa.addEventListener('click', function() {
        pagebeasiswa()
    });

    function pageseminar() {
        seminar.style.display = "flex";
        beasiswa.style.display = "none";
    }
    ButtonSeminar.addEventListener('click', function() {
        pageseminar()
    });




    function buttonprev() {
        CarouselArticleFirst.style.display = "flex";
        CarouselArticleSecond.style.display = "none";
    }
    prev.addEventListener('click', function() {
        buttonprev()
    });

    function buttonnext() {
        CarouselArticleFirst.style.display = "none";
        CarouselArticleSecond.style.display = "flex";
    }
    next.addEventListener('click', function() {
        buttonnext()
    });
</script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script>
    $('#show-password').click(function() {
        if ($(this).hasClass('fa-eye-slash')) {
            $('#input-password').attr('type', 'text');
            $(this).removeClass('fa-eye-slash');
            $(this).addClass('fa-eye');
        } else {
            $('#input-password').attr('type', 'password');
            $(this).removeClass('fa-eye');
            $(this).addClass('fa-eye-slash');
        }
    })

    $('#show-password-user').click(function() {
        if ($(this).hasClass('fa-eye-slash')) {
            $('#pswd1').attr('type', 'text');
            $(this).removeClass('fa-eye-slash');
            $(this).addClass('fa-eye');
        } else {
            $('#pswd1').attr('type', 'password');
            $(this).removeClass('fa-eye');
            $(this).addClass('fa-eye-slash');
        }
    })

    $('#show-password-user-ulang').click(function() {
        if ($(this).hasClass('fa-eye-slash')) {
            $('#pswd2').attr('type', 'text');
            $(this).removeClass('fa-eye-slash');
            $(this).addClass('fa-eye');
        } else {
            $('#pswd2').attr('type', 'password');
            $(this).removeClass('fa-eye');
            $(this).addClass('fa-eye-slash');
        }
    })
</script>            </body>

<!-- Mirrored from www.kampusindonesia.co.id/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Jun 2021 04:08:34 GMT -->
</html>
