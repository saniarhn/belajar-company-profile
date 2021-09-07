<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="ThemeStarz">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600">
c
    <link rel="stylesheet" href="{{asset('Frontend/font-awesome/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/css/owl.theme.default.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/css/style.css')}}">
    <link rel="icon" href="{{asset('Frontend/img/favicon-32x32.png')}}" type="image/x-icon">
	<title>WZ Organizer</title>

</head>
<body data-spy="scroll" data-target=".navbar" class="has-loading-screen">
    <div class="ts-page-wrapper" id="page-top">

        <!--*********************************************************************************************************-->
        <!--************ HERO ***************************************************************************************-->
        <!--*********************************************************************************************************-->
        <header id="ts-hero" class="ts-full-screen ts-separate-bg-element" data-mask-bottom-wn-color="#fff" data-bg-image-opacity=".8" data-bg-parallax="scroll" data-bg-parallax-speed="3">
            <!--NAVIGATION ******************************************************************************************-->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top ts-separate-bg-element" data-bg-color="rgb(224 182 182)">
            @foreach($data_navbar as $item)
                <div class="container">
                    <a class="navbar-brand" href="#page-top">
                        <img src="{{asset('Frontend/img/logo.png')}}" alt="" width="50px">
                        <img src="{{asset('Frontend/img/logo-z.png')}}" alt="" width="50px">
                    </a>
                    <!--end navbar-brand-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!--end navbar-toggler-->
                    
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    
                        <div class="navbar-nav ml-auto">
                            <a class="nav-item nav-link active ts-scroll" href="#page-top">{{$item->judul1}} <span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link ts-scroll" href="{{ url('/paket/view/') }}">{{$item->judul2}}</a>
                            <a class="nav-item nav-link ts-scroll" href="#promo">{{$item->judul3}}</a>
                            <a class="nav-item nav-link ts-scroll" href="#testimoni">{{$item->judul4}}</a>
                            <a class="nav-item nav-link ts-scroll" href="#team">{{$item->judul5}}</a>
                            <a class="nav-item nav-link ts-scroll" href="#contact">{{$item->judul6}}</a>
                            
                        </div>
                        <!--end navbar-nav-->
                    </div>
                    <!--end collapse-->
                </div>
                @endforeach
                <!--end container-->
            </nav>
            <!--end navbar-->

            <!--HERO CONTENT ****************************************************************************************-->

            @foreach($data_home as $item)
            <div class="container align-self-center align-items-center text-center">
                <h3 class="ts-opacity__50">{{$item->subjudul}}</h3>
                <h1 style="color:rgb(95 16 16)"> {{$item->judul}}</h1>
                
                <!--end row-->
            </div>
            <!--end container-->

            <div class="ts-background" data-bg-color="#737373" data-bg-parallax="scroll" data-bg-parallax-speed="3">
                <div class="ts-video-bg ts-opacity__50 ts-parallax-element">
                    <!-- <iframe width="560" height="315" src="{{$item->link}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                 <img src="{{ Storage::url($item->foto) }}" alt="" width="1350px" height="540px">
                </div>
                <!--end ts-video-->
            </div>
            @endforeach
            <!--end ts-background-->

        </header>
        <!--end #hero-->

        <!--*********************************************************************************************************-->
        <!--************ CONTENT ************************************************************************************-->
        <!--*********************************************************************************************************-->
        <main id="ts-content">

            <!--WHAT YOU'LL GET *************************************************************************************-->
            <section id="what-youll-get" class="ts-block text-center pt-4"  data-bg-image="{{asset('Frontend/img/tanpa.png')}}">
                <div class="container">
                    <div class="ts-title">
                        <h2>What You’ll Get</h2>
                    </div>
                    <!--end ts-title-->
                    <div class="row">
                    @foreach($data_kelebihan as $item)
                        <!--end col-xl-4-->
                       
                        <!--end col-xl-4-->
                        <div class="col-sm-6 offset-sm-4 col-md-4 offset-md-0 col-xl-4">
                            <figure data-animate="ts-fadeInUp" data-delay="0.2s">
                                <figure class="icon mb-5 p-2">
                                    <img src="{{ Storage::url($item->foto) }}" width="160px" height="190px" alt="">
                                    <div class="ts-svg" data-animate="ts-zoomInShort" data-bg-image="{{asset('Frontend/svg/organic-shape-03.svg')}}"></div>
                                </figure>
                                <h4>{{$item->kelebihan}}</h4>
                                <p>
                                {!!$item->deskripsi!!}
                                </p>
                            </figure>
                        </div>
                        <!--end col-xl-4-->
                        @endforeach
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--END HOW IT WORKS ************************************************************************************-->

            <!--PARTNERS ********************************************************************************************-->
            <!-- <section id="gallery" class="ts-block pb-3" data-bg-color="#f6f6f6" data-mask-top-nw-color="#fff"> -->
                <!--container-->
                <!-- <div class="container">

                <div class="owl-carousel" 
                data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30"
                data-owl-animate-in="" data-owl-animate-out="" 
                data-owl-item="2"> -->
                    <!--block of logos -->
                   
<!--                       
                        <div class="d-block d-md-flex justify-content-between align-items-center text-center ts-partners">
                        @foreach($data_gallery as $item)
                        <img src="{{ Storage::url($item->foto) }}" class="d-block w-150" alt="gambar" width="30px" height="30px">
                        @endforeach
                        </div> -->
                      
                    
                    
                
                    <!--end logos-->
                    <!-- </div>
                </div> -->
                <!--end container-->
            <!-- </section> -->
            <!--END PARTNERS ****************************************************************************************-->

            <!--NUMBERS *********************************************************************************************-->
            <section id="numbers" class="ts-block ts-background-is-dark ts-separate-bg-element" data-bg-image="{{asset('Frontend/img/face.png')}}" data-bg-image-opacity=".2" data-bg-color="#5f8d87" data-bg-parallax="block" data-bg-parallax-speed="3" data-mask-top-nw-color="#f6f6f6" data-mask-bottom-wn-color="#fff">
                <div class="container">
                    <div class="ts-promo-numbers">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="ts-promo-number text-center">
                                    <h2 data-animate="ts-zoomIn">{{$count_client}}</h2>
                                    <h3 class="mb-0 ts-opacity__50">Testimoni</h3>
                                    <span class="ts-promo-number-divider"></span>
                                </div>
                                <!--end ts-promo-number-->
                            </div>
                            <!--end col-sm-4-->
                            <div class="col-sm-4">
                                <div class="ts-promo-number text-center">
                                    <h2 data-animate="ts-zoomIn" data-delay="0.2s">{{$count_paket}}</h2>
                                    <h3 class="mb-0 ts-opacity__50">Paket</h3>
                                    <span class="ts-promo-number-divider"></span>
                                </div>
                                <!--end ts-promo-number-->
                            </div>
                            <!--end col-sm-4-->
                            <div class="col-sm-4">
                                <div class="ts-promo-number text-center">
                                    <h2 data-animate="ts-zoomIn" data-delay="0.2s">{{$count_team}}</h2>
                                    <h3 class="mb-0 ts-opacity__50">Team</h3>
                                </div>
                                <!--end ts-promo-number-->
                            </div>
                            <!--end col-sm-4-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end ts-promo-numbers-->
                </div>
                <!--end container-->
            </section>
            <!--END NUMBERS *****************************************************************************************-->

            <!--ADVANCED FEATURES ***********************************************************************************-->
            @foreach($data_paket as $item)
                @if($item->id %2 == 1)
                
                    <section id="paket" class="ts-block"    data-bg-image="{{asset('Frontend/img/baci.png')}}"   >
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5 col-xl-5" data-animate="ts-fadeInUp">
                                    <div class="ts-title">
                                        <h2>{{$item->nama_paket}}</h2>
                                    </div>
                                    <!--end ts-title-->
                                    <p>
                                    {!!$item->keterangan!!}
                                    </p>

                                    <ul class="ts-list-colored-bullets">
                                    @foreach($data_fitur as $item1)
                                        @if($item1->id_paket === $item->id)
                                            <li>{{ $item1->jenis_fitur }} </li>
                                        @endif
                                    @endforeach
                                    </ul>
                                </div>
                                <!--end col-xl-5-->
                                <div class="col-md-7 col-xl-7 text-center" data-animate="ts-fadeInUp" data-delay="0.1s">
                                    <div class="px-3">
                                        <img src="{{ Storage::url($item->foto) }}" class="mw-100" alt="">
                                    </div>
                                </div>
                                <!--end col-xl-7-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end container-->
                    </section>
                @else
                    <section id="paket" class="ts-block"  data-bg-image="{{asset('Frontend/img/opo.png')}}">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7 col-xl-7 text-center" data-animate="ts-fadeInUp" data-delay="0.1s">
                                    <div class="px-3 mb-4">
                                        <img src="{{ Storage::url($item->foto) }}" class="mw-100" alt="">
                                    </div>
                                </div>
                                <!--end col-xl-7-->
                                <div class="col-md-5 col-xl-5" data-animate="ts-fadeInUp">
                                    <div class="ts-title">
                                        <h2>{{$item->nama_paket}}</h2>
                                    </div>
                                    <!--end ts-title-->
                                    <p>
                                    {!!$item->keterangan!!}
                                    </p>
                                    <ul class="ts-list-colored-bullets">
                                        @foreach($data_fitur as $item1)
                                            @if($item1->id_paket === $item->id)
                                                <li>{{ $item1->jenis_fitur }} </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                                <!--end col-xl-5-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end container-->
                    </section>
                @endif
            @endforeach

            <section id="allpaket" class="ts-block ts-background-is-dark ts-separate-bg-element"   data-bg-color="#5f8d87" data-bg-parallax="scroll" data-bg-parallax-speed="3" data-mask-top-nw-color="#fff" data-mask-bottom-wn-color="#fff">

            <div class="text-center mt-4">
                       <h3>Temukan Paket Sesuai Kebutuhan Anda</h3>
            </div>
                <div class="text-center mt-4">
                <a href="{{ url('/paket/view/') }}" class="btn btn-primary">Lihat Semua Paket</a>
            </div>
                   
    
                <!--end container-->
            </section>
            <!--END SUBSCRIBE ***************************************************************************************-->
          
            <!--END ADVANCED FEATURES *******************************************************************************-->

            <!--RESPONSIVE ***********************************************************************************-->
            
            <!--END ADVANCED FEATURES *******************************************************************************-->

            <!--PRICING *********************************************************************************************-->
            <section id="promo" class="ts-block ts-separate-bg-element"  data-bg-image="{{asset('Frontend/img/stay.png')}}"  data-bg-parallax="scroll" data-bg-parallax-speed="3" data-mask-top-nw-color="#fff" data-mask-bottom-wn-color="#fff">
                <div class="container">
                    <div class="ts-title text-center text-white">
                        <h2>Promo</h2>
                    </div>
                    <!--end ts-title-->
                    
                    
                   
                   
                    <div class="card-group ts-cards-same-height">
                        <div id="owl-carousel2" class="owl-carousel owl-theme ">
                            @foreach($data_promo as $item)
                                    <!--Price Box-->

                                <div class="item">
                                @if($item->id %2 == 1)
                                    <div class="card text-center ts-price-box" data-animate="ts-fadeInUp">
                                        <div class="card-header p-0">
                                            <h5 class="mb-0 py-3 text-white" data-bg-color="#FA8072" >{{$item->nama_paket}}</h5>
                                            <div class="ts-title py-5 mb-0">
                                                <h3 class="mb-0 font-weight-normal">{{$item->harga_promo}}</h3>
                                                <small class="ts-opacity__50">Paket</small >
                                            </div>
                                        </div>
                                        <!--end card-header-->
                                        <div class="card-body p-0">
                                            <ul class="list-unstyled ts-list-divided">
                                            @foreach($data_fitur as $item1)
                                                @if($item1->id_paket === $item->idpaket)
                                                <li>{{$item1->jenis_fitur}}</li>
                                                @endif
                                            @endforeach
                                            </ul>
                                            <!--end list-->
                                        </div>
                                        <!--end card-body-->
                                        <div class="card-footer bg-transparent pt-0 ts-border-none">
                                            <a href="https://wa.me/6287840666560?text=Saya%20tertarik%20dengan%20paket%20yang%20anda%20tawarkan" class="btn btn-outline-dark ts-btn-border-muted">Pesan Sekarang</a>
                                        </div>
                                    </div>
                                @else
                                <div class="card text-center ts-price-box" data-animate="ts-fadeInUp">
                                        <div class="card-header p-0">
                                            <h5 class="mb-0 py-3 text-white" data-bg-color="#A0522D" >{{$item->nama_paket}}</h5>
                                            <div class="ts-title py-5 mb-0">
                                                <h3 class="mb-0 font-weight-normal">{{$item->harga_promo}}</h3>
                                                <small class="ts-opacity__50">Paket</small >
                                            </div>
                                        </div>
                                        <!--end card-header-->
                                        <div class="card-body p-0">
                                            <ul class="list-unstyled ts-list-divided">
                                            @foreach($data_fitur as $item1)
                                                @if($item1->id_paket === $item->idpaket)
                                                <li>{{$item1->jenis_fitur}}</li>
                                                @endif
                                            @endforeach
                                            </ul>
                                            <!--end list-->
                                        </div>
                                        <!--end card-body-->
                                        <div class="card-footer bg-transparent pt-0 ts-border-none">
                                            <a href="https://wa.me/6287840666560?text=Saya%20tertarik%20dengan%20paket%20yang%20anda%20tawarkan" class="btn btn-outline-dark ts-btn-border-muted">Pesan Sekarang</a>
                                        </div>
                                    </div>
                                @endif
                                    <!--end card-->
                                </div>
                            @endforeach   
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--END PRICING *****************************************************************************************-->
            
            <!--BUY NOW *********************************************************************************************-->
           
            <!--END BUY NOW *****************************************************************************************-->
            <section id="gallery" class="ts-block ts-background-is-dark ts-separate-bg-element" data-bg-color-opacity=".5"   data-bg-color="#77b8af" data-bg-parallax="scroll" data-bg-parallax-speed="3" data-mask-top-nw-color="#fff" data-mask-bottom-wn-color="#fff">
                <div class="ts-title text-center">
                        <h2>Galeri Hasil WZ</h2>
                </div>
                <div id="owl-carousel1" class="owl-carousel owl-theme">
                @foreach($data_gallery as $item)
                    <div class="item">
                    <img height= "150px" width="150px"src=" {{ Storage::url($item->foto) }}">
                    </div>
                @endforeach   
                </div>
            </section>
 
            <section id="testimoni" class="ts-block text-center py-4" data-bg-color="#81a68f"  data-bg-image="{{asset('Frontend/img/8.png')}}"  >
                <div class="container">
                    <div class="ts-title">
                        <h2>Testimoni</h2>
                    </div>
                    <!--end ts-title-->
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            
                            <div class="owl-carousel ts-carousel-blockquote" data-owl-dots="1" data-animate="ts-zoomInShort">
                            @foreach($data_client as $item)
                                <blockquote class="blockquote">
                                    <!--person image-->
                                    <div class="ts-circle__lg" > 
                                        <img src=" {{ Storage::url($item->foto) }}">
                                    </div>
                                    
                                    <!--end person image-->
                                    <!--cite-->
                                    
                                    <p >
                                        {!!$item->ulasan!!}
                                    </p>
                                    
                                    <!--end cite-->
                                    <!--person name-->
                                    <footer class="blockquote-footer">
                                        <h4>{{$item->nama}}</h4>
                                        <h6>{{$item->pekerjaan}}</h6>
                                    </footer>
                                    <!--end person name-->
                                </blockquote>
                                <!--end blockquote-->
                                @endforeach
                            </div>
                     
                            <!--end ts-carousel-blockquote-->
                        </div>
                        <!--end col-md-8-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--end #our-clients.ts-block-->

            <!--SUBSCRIBE *******************************************************************************************-->
            
            <!--END SUBSCRIBE ***************************************************************************************-->

            <!--FEATURES ********************************************************************************************-->
            
            <!--END FEATURES ****************************************************************************************-->

            

            <!--OUR TEAM ********************************************************************************************-->
            <section id="team" class="ts-block text-center"  data-bg-image="{{asset('Frontend/img/uda.png')}}" data-mask-top-nw-color="#fff">
                <div class="container">
                    <div class="ts-title">
                        <h2>Our Team</h2>
                    </div>
                    <!--end ts-title-->
                   
                    <div id="owl-carousel3" class="row owl-carousel">
                    @foreach($data_team as $item)
                        <div >
                            <div class="ts-element d-inline-block mb-4" data-animate="ts-fadeInLeft" >
                                <a href="{{ $item->link }}" class="ts-circle__md position-absolute ts-right__0 ts-top__0" data-bg-color="#ff6a6a">
                                    <div class="text-white ts-h2">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                </a>
                                <!--end small circle-->
                                <div class="ts-circle__xxl ts-shadow__md mb-4"> <img src="{{ Storage::url($item->foto) }}" class="mw-100" alt=""></div>
                                <!--end image circle-->
                                <h4 class="my-2">{{$item->nama_team}}</h4>
                                <h5 class="ts-opacity__50">{{$item->pekerjaan}}</h5>
                            </div>
                            <!--end ts-element-->
                        </div>
                        <!--end col-md-4-->
                        @endforeach
                        <!--end col-md-4-->
                       
                        <!--end col-md-4-->
                    </div>
                    <!--end row-->
                    
                </div>
                
                <!--end container-->
            </section>
            <!--END OUR TEAM ****************************************************************************************-->

        </main>
        <!--end #content-->

        <!--*********************************************************************************************************-->
        <!--************ FOOTER *************************************************************************************-->
        <!--*********************************************************************************************************-->
        <footer id="ts-footer">
                
            <!-- @foreach($data_maps as $item) -->
        <div class="map-container">
            <iframe  width="100%" height="450" frameborder="0" scrolling="no" marginheight="0"
          marginwidth="0" 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.842520390089!2d98.6718264140736!3d3.6234357973633413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031334d1ec4f549%3A0x564dcda3f314764!2sWAHANA%20CCTV!5e0!3m2!1sid!2sid!4v1616428251771!5m2!1sid!2sid" 
          width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <!--end map-->
         <!-- @endforeach -->

            <section id="contact" class="ts-block ts-background-is-dark ts-separate-bg-element" data-bg-image="assets/img/bg-desk.jpg" data-bg-image-opacity=".1" data-bg-color="#1f1f1f" data-mask-bottom-wn-color="#000">
                <div class="container">
                    <div class="row">
                    @foreach($data_contactus as $item)
                        <div class="col-md-4">
                            <h3>Hubungi Kami</h3>
                            <address>
                                <figure>
                                   {{$item->alamat}}
                                   
                                </figure>
                                <br>
                                <figure>
                                    <div class="font-weight-bold">Email:</div>
                                    <a href="#">{{$item->email}}</a>
                                </figure>
                                <figure>
                                    <div class="font-weight-bold">Nomor:</div>
                                    {{$item->nomor}}
                                </figure>
                                
                            </address>
                            <!--end address-->
                        </div>
                    @endforeach
                        <!--end col-md-4-->
                        <div class="col-md-8">
                            <h3>Contact Form</h3>
                            <form id="form-contact" method="post" action="{{url('/app/add_contactform')}}" >
                               @csrf
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="form-contact-name">Nama Anda *</label>
                                            <input type="text" class="form-control" id="form-contact-name" name="nama" placeholder="Nama Anda" required>
                                        </div>
                                        <!--end form-group -->
                                    </div>
                                    <!--end col-md-6 col-sm-6 -->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="form-contact-email">Email Anda *</label>
                                            <input type="email" class="form-control" id="form-contact-email" name="email" placeholder="Email Anda" required>
                                        </div>
                                        <!--end form-group -->
                                    </div>
                                    <!--end col-md-6 col-sm-6 -->
                                </div>
                                <!--end row -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form-contact-message">Pesan Anda *</label>
                                            <textarea class="form-control" id="form-contact-message" rows="5" name="pesan" placeholder="Pesan Anda" required></textarea>
                                        </div>
                                        <!--end form-group -->
                                    </div>
                                    <!--end col-md-12 -->
                                </div>
                                <!--end row -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary float-right" id="form-contact-submit">Kirimkan Pesan</button>
                                </div>
                                <!--end form-group -->
                                <div class="form-contact-status"></div>
                            </form>
                            <!--end form-contact -->
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>

            <div class="text-center text-white pb-5" data-bg-color="#000">
                <small>
                    © <script>document.write(new Date().getFullYear())</script> - <b>WZ Organizer</b>
                </small>
            </div>
        </footer>
        <!--end #footer-->
    </div>
    <!--end page-->

    <script>
        if( document.getElementsByClassName("ts-full-screen").length ) {
            document.getElementsByClassName("ts-full-screen")[0].style.height = window.innerHeight + "px";
        }
    </script>
	<script src="{{asset('Frontend/js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{asset('Frontend/js/popper.min.js')}}"></script>
	<script src="{{asset('Frontend/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('Frontend/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58"></script>
	<script src="{{asset('Frontend/js/isInViewport.jquery.js')}}"></script>
	<script src="{{asset('Frontend/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('Frontend/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('Frontend/js/scrolla.jquery.min.js')}}"></script>
	<script src="{{asset('Frontend/js/jquery.fitvids.js')}}"></script>
	<script src="{{asset('Frontend/js/jquery.validate.min.js')}}"></script>
	<script src="{{asset('Frontend/js/jquery-validate.bootstrap-tooltip.min.js')}}"></script>
    <script src="{{asset('Frontend/js/custom.js')}}"></script>

<script>
  $(document).ready(function() {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
      margin: 10,
      nav: true,
      loop: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 5
        }
      }
    })
  })
</script>

<script type="text/javascript">
		$('#owl-carousel1').owlCarousel({
		    loop:true,
		    margin:10,
		    nav:true,
		    autoplay:true,
		    autoplayTimeout:3000,
		    autoplayHoverPause:true,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:3
		        },
		        1000:{
		            items:5
		        }
		    }
		})

        $("#owl-carousel2").owlCarousel({
            loop:true,
		    margin:50,
            items: 3,
            dots: false,
		    autoplay:true,
		    autoplayTimeout:3000,
		    autoplayHoverPause:true,
        });

        $('#owl-carousel3').owlCarousel({
		    loop:true,
		    margin:10,
            items:3,
		    autoplay:true,
		    autoplayTimeout:3000,
		    autoplayHoverPause:true,
		    dots: true,
		})

 
	</script>




    <!--Google map-->


    <script>
        var latitude = 34.038405;
        var longitude = -117.946944;
        var markerImage = "{{asset('Frontend/img/map-marker.png')}}";
        var mapElement = "map";
        var mapStyle = [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#dbdbdb"},{"visibility":"on"}]}];
        google.maps.event.addDomListener(window, 'load', simpleMap(latitude, longitude, markerImage, mapStyle, mapElement));
    </script>
    
</body>
</html>
