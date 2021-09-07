@extends('master')
@section('content')



    <!-- Start content -->
    <div class="content">

        <!-- Top Bar Start -->
        
        <!-- Top Bar End -->

        <div class="page-content-wrapper ">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="float-right page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">Admin</a></li>
                                <li class="breadcrumb-item"><a href="{{ url('navbar')}}">Navbar</a></li>
                                <li class="breadcrumb-item active">Create Navbar</li>
                            </ol>
                        </div>
                        
                        <h5 class="page-title">Create Navbar</h5>
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-30">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Create Navbar</h4>
                                
                                <form method="post" enctype="multipart/form-data" action="{{url('/navbar/add_navbar')}} ">
                                @csrf
                                    
                                    <div class="form-group mb-4">
                                        <label for="Sampul">Foto</label>
                                        
                                        <br>
                                        <input type="file" name="foto" >
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="judul1">Judul 1</label>
                                        <input type="text" name="judul1" class="form-control border-1" placeholder="Judul1" id="title" required >
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="judul1">Judul 2</label>
                                        <input type="text" name="judul2" class="form-control border-1" placeholder="Judul2" id="title" required >
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="judul1">Judul 3</label>
                                        <input type="text" name="judul3" class="form-control border-1" placeholder="Judul3" id="title" required >
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="judul1">Judul 4</label>
                                        <input type="text" name="judul4" class="form-control border-1" placeholder="Judul4" id="title" required >
                                    </div>
                                    
                                    <div class="form-group mb-4">
                                        <label for="judul1">Judul 5</label>
                                        <input type="text" name="judul5" class="form-control border-1" placeholder="Judul5" id="title" required >
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="judul1">Judul 6</label>
                                        <input type="text" name="judul6" class="form-control border-1" placeholder="Judul6" id="title" required >
                                    </div>


                                    <div class="form-group">
                                        <input class="btn btn-danger" type="reset" >
                                        <button class="btn btn-primary" type="submit">Submit</button>   
                                    </div>
                                </form>
                                
                                
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div><!-- container fluid -->

        </div> <!-- Page content Wrapper -->

            

@endsection