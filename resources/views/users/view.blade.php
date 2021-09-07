@extends('master')
@section('content')



    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="float-right page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">Admin</a></li>
                            <li class="breadcrumb-item active">Profil</li>
                        </ol>
                    </div>
                    <h5 class="page-title">Profil</h5>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Profil</h4>
                            
                            <a href="{{url('/profil/editprofil')}}" class="btn btn-sm btn-danger mb-4">Edit</a>
                            
                            
                            <ul class="list-group list-group-flush">

                                <div class="row">
                                    <div class="col-6">
                                        <li class="list-group-item">Username</li>
                                        <li class="list-group-item">Profil Photo</li>
                                    </div>
                                
                                    <div class="col-6">
                                        <li class="list-group-item">{{ $account_data['username'] }}</li>
                                        <li class="list-group-item">
                                            <img src="{{ Storage::url($account_data['profil']) }}" alt="">
                                        </li>
                                    </div>
                                </div>
                            </ul>

                            

                            
                           
                                             

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

                

        </div><!-- container fluid -->

    </div> <!-- Page content Wrapper -->

    </div> <!-- content -->



@endsection