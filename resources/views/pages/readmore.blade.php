<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="ThemeStarz">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600">
    <link rel="stylesheet" href="{{asset('Frontend/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/font-awesome/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/css/style.css')}}">
    <link rel="icon" href="{{asset('Frontend/img/favicon-32x32.png')}}" type="image/x-icon">
	<title>WZ Organizer</title>

</head>
<body data-spy="scroll" data-target=".navbar" class="has-loading-screen">
    <div class="ts-page-wrapper" id="page-top">

        <!--*********************************************************************************************************-->
        <!--************ HERO ***************************************************************************************-->
        <!--*********************************************************************************************************-->
        @foreach($data_home as $item)
        <header id="ts-hero" class="ts-full-screen jumbotron text-white " style="background-image: url('{{ Storage::url($item->foto) }}');  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;">
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
                                <a class="nav-item nav-link ts-scroll" href="{{ url('/')}}#paket">{{$item->judul2}}</a>
                                <a class="nav-item nav-link ts-scroll" href="{{ url('/')}}#promo">{{$item->judul3}}</a>
                                <a class="nav-item nav-link ts-scroll" href="{{ url('/')}}#testimoni">{{$item->judul4}}</a>
                                <a class="nav-item nav-link ts-scroll" href="{{ url('/')}}#team">{{$item->judul5}}</a>
                                <a class="nav-item nav-link ts-scroll" href="{{ url('/')}}#contact">{{$item->judul6}}</a>
                            </div>
                            <!--end navbar-nav-->
                        </div>
                        <!--end collapse-->
                    </div>
                    <!--end container-->
                @endforeach
            </nav>
            <!--end navbar-->

            <!--HERO CONTENT ****************************************************************************************-->
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
            
            <!--end ts-background-->

        </header>
        @endforeach


        <main id="ts-content">
    
        <section>
            <div class="container">
                <h2 class="text-center pt-4 pb-4">Paket</h2>
                <div class="row">
                    @foreach($data_paket as $item)
                        <div class="col-lg-4 mb-4">
                            <div class="card">
                                <img src="{{ Storage::url($item->foto) }}" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">{{$item->nama_paket}}</h5>
                                    <p class="card-text">{!!$item->keterangan!!}</p>
                                   <div class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#yourModal{{$item->id}}">Info Selengkapnya</div>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="yourModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <h4 class="modal-title" id="myModalLabel"></h4>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="ts-title">
                                <h2>{{$item->nama_paket}}</h2>
                            </div>
                                    <!--end ts-title-->
                            <img src="{{ Storage::url($item->foto) }}" class="mw-100" alt="">
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

                            <p>Harga : {{$item->harga_paket}}</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        <a href="https://wa.me/6287840666560?text=Saya%20tertarik%20dengan%20paket%20yang%20anda%20tawarkan" class="btn btn-outline-dark ts-btn-border-muted">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center">
                    {!! $data_paket->links() !!}
                </div>  
            </div>
            
        </section>

            <div style="height: 50px;"></div>
        </main>
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