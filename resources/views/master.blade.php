<!DOCTYPE html>
<html lang="en">

@php 
    $account_data = Session::get(('account_data'));
@endphp

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Admin WZ Wedding Organizer</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{asset('Backend/images/favicon.ico')}}">
        <!-- DataTables -->
        <link href="{{asset('Backend/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('Backend/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{asset('Backend/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="{{asset('Backend/plugins/morris/morris.css')}}">

      
        <link href="{{asset('Backend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('Backend/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('Backend/css/style.css')}}" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="{{asset('Backend/plugins/toastr/toastr.min.css')}}">

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                    <i class="ion-close"></i>
                </button>

                <div class="left-side-logo d-block d-lg-none">
                    <div class="text-center">
                        
                        <a href="index.html" class="logo"><img src="{{asset('Backend/images/logo-dark.png')}}" height="20" alt="logo"></a>
                    </div>
                </div>

                <div class="sidebar-inner slimscrollleft">
                    
                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Main</li>

                            <li>
                                <a href="{{ url('dashboard')}}" class="waves-effect">
                                    <i class="dripicons-meter"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('navbar')}}" class="waves-effect">
                                    <i class="dripicons-browser"></i>
                                    <span> Navbar  </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{url('client')}}" class="waves-effect">
                                    <i class="fa fa-user-o"></i>
                                    <span> Testimoni  </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('paket')}}" class="waves-effect">
                                    <i class="dripicons-folder"></i>
                                    <span> Paket  </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{url('team')}}" class="waves-effect">
                                    <i class="fa fa-user-o"></i>
                                    <span> Team  </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{url('promo')}}" class="waves-effect">
                                    <i class="dripicons-folder"></i>
                                    <span> Promo  </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{url('kelebihan')}}" class="waves-effect">
                                    <i class="dripicons-list"></i>
                                    <span> Kelebihan </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{url('fitur')}}" class="waves-effect">
                                    <i class="dripicons-list"></i>
                                    <span> Fitur </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{url('home')}}" class="waves-effect">
                                    <i class="dripicons-home"></i>
                                    <span> Home </span>
                                </a>
                            </li>


                            <li>
                                <a href="{{url('gallery')}}" class="waves-effect">
                                    <i class="dripicons-meter"></i>
                                    <span> Gallery <span class="badge badge-success badge-pill float-right"></span></span>
                                </a>
                            </li> 
                           
                            <!-- <li>
                                <a href="{{url('maps')}}" class="waves-effect">
                                    <i class="dripicons-meter"></i>
                                    <span> Maps <span class="badge badge-success badge-pill float-right">2</span></span>
                                </a>
                            </li> -->
                            <li>
                                <a href="{{url('contactus')}}" class="waves-effect">
                                    <i class="dripicons-device-mobile"></i>
                                    <span> Contact Us</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('contactform')}}" class="waves-effect">
                                    <i class="fa fa-address-book-o"></i>
                                    <span> Contact Form </span>
                                </a>
                            </li>
                            <li class="menu-title">Extra</li>

                            <li>
                                <a href="{{url('user')}}" class="waves-effect">
                                    <i class="fa fa-address-book-o"></i>
                                    <span> Akun User </span>
                                </a>
                            </li>

                            

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <div class="topbar">

                        <div class="topbar-left	d-none d-lg-block">
                            <div class="text-center">
                                
                                <a href="index.html" class="logo"><img src="{{asset('Backend/images/logo.png')}}" height="20" alt="logo"></a>
                            </div>
                        </div>

                        <nav class="navbar-custom">

                            <ul class="list-inline float-right mb-0">
                                <li class="list-inline-item notification-list dropdown d-none d-sm-inline-block">
                                    <form role="search" class="app-search">
                                        <div class="form-group mb-0"> 
                                            <input type="text" class="form-control" placeholder="Search..">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form> 
                                </li>

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                        
                                        <img src="{{ Storage::url($account_data['profil']) }}" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                        <a class="dropdown-item" href="{{ url('/profil') }}"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                        <a class="dropdown-item" href="{{ url('/logout')}}"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                    </div>
                                </li>

                            </ul>

                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                            </ul>

                            <div class="clearfix"></div>

                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    @yield('content') <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © <script>document.write(new Date().getFullYear())</script> - <b>Wedding Admin</b>
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="{{asset('Backend/js/jquery.min.js')}}"></script>
        <script src="{{asset('Backend/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('Backend/js/modernizr.min.js')}}"></script>
        <script src="{{asset('Backend/js/detect.js')}}"></script>
        <script src="{{asset('Backend/js/fastclick.js')}}"></script>
        <script src="{{asset('Backend/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('Backend/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('Backend/js/waves.js')}}"></script>
        <script src="{{asset('Backend/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('Backend/js/jquery.scrollTo.min.js')}}"></script>

        <!-- skycons -->
        <script src="{{asset('Backend/plugins/skycons/skycons.min.js')}}"></script>

        <!-- skycons -->
        <script src="{{asset('Backend/plugins/peity/jquery.peity.min.js')}}"></script>

        <!--Morris Chart-->
        <script src="{{asset('Backend/plugins/morris/morris.min.js')}}"></script>
        <script src="{{asset('Backend/plugins/raphael/raphael-min.js')}}"></script>

        <!-- dashboard -->
        <script src="{{asset('Backend/pages/dashboard.js')}}"></script>

<!-- Tinymce js -->
<script src="{{ asset('Backend/plugins/tinymce/tinymce.min.js') }}"></script>

<script>
    $(document).ready(function () {
        if($("#elm1").length > 0){
            tinymce.init({
                selector: "textarea#elm1",
                theme: "modern",
                height:300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                style_formats: [
                    {title: 'Bold text', inline: 'b'},
                    {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                    {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                    {title: 'Example 1', inline: 'span', classes: 'example1'},
                    {title: 'Example 2', inline: 'span', classes: 'example2'},
                    {title: 'Table styles'},
                    {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                ]
            });
        }
    });
</script>

<!-- Required datatable js -->
<script src="{{ asset('Backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('Backend/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<!-- Buttons examples -->
<script src="{{ asset('Backend/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('Backend/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('Backend/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('Backend/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('Backend/plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('Backend/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('Backend/plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('Backend/plugins/datatables/buttons.colVis.min.js') }}"></script>
<!-- Responsive examples -->
<script src="{{ asset('Backend/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('Backend/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

<!-- Datatable init js -->
<script src="{{ asset('Backend/pages/datatables.init.js') }}"></script>



<script>
    $(document).ready(function() {
    $('#example').DataTable( {
        "lengthMenu": [[5, 7, 10, -1], [5, 7, 10, "All"]]
    } );
} );
</script>


<script src="{{asset('Backend/plugins/toastr/toastr.min.js')}}"></script>
    @if(Session::has('sukses'))
    <script>toastr.success("{{Session::get('sukses')}}")</script>
    @endif

    @if(Session::has('gagal'))
    <script>toastr.error("{{Session::get('gagal')}}")</script>
    @endif
 <!-- App js -->
 <script src="{{asset('Backend/js/app.js')}}"></script>

    </body>
</html>