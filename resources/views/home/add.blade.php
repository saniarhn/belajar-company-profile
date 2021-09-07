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
                                            <li class="breadcrumb-item"><a href="{{ url('home')}}">Home</a></li>
                                            <li class="breadcrumb-item active">Create Home</li>
                                        </ol>
                                    </div>
                                    <h5 class="page-title">Create Home</h5>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Create Home</h4>
                                          
                            <form method="post" enctype="multipart/form-data" action="{{url('/home/add_home')}} ">
                            @csrf
                                <div class="form-group mb-4">
                                    <label for="judul">Judul</label>
                                    <input type="text" name="judul" class="form-control border-1" placeholder="Judul" id="title" required >
                                </div>
                                <div class="form-group mb-4">
                                    <label for="subjudul">Sub Judul</label>
                                    <input type="text" name="subjudul" class="form-control border-1" placeholder="Sub Judul" id="title" required >
                                </div>
                                
                                <div class="form-group mb-4">
                                    <label for="Sampul">Foto</label>
                                    
                                    <br>
                                    <input type="file" name="foto" >
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