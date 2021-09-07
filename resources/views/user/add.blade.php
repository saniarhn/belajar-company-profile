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
                                            <li class="breadcrumb-item"><a href="{{ url('user')}}">User</a></li>
                                            <li class="breadcrumb-item active">Create User</li>
                                        </ol>
                                    </div>
                                    <h5 class="page-title">Create User</h5>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Create user</h4>
                                            
                            <form method="post" enctype='multipart/form-data' action="{{url('/user/add_user')}} ">
                            @csrf
                                <div class="form-group mb-4">
                                    <label for="judul">Username</label>
                                    <input type="text" name="username" class="form-control border-1" placeholder="Username" id="title" required >
                                </div>
                                <div class="form-group mb-4">
                                    <label for="judul">Password</label>
                                    <input type="password" name="password" class="form-control border-1" placeholder="Password" id="title" required >
                                  
                                </div>
                                <div class="form-group mb-4">
                                    <label for="Sampul">Foto</label>
                                    
                                    <br>
                                    <input type="file" name="profil" >
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