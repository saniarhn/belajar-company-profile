@extends('master')

@section('content')

<div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="float-right page-breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>
                                    <h5 class="page-title">Dashboard</h5>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <div class="card mini-stat m-b-30">
                                        <div class="p-3 bg-primary text-white">
                                            <div class="mini-stat-icon">
                                                <i class="fa fa-user-o float-right mb-0"></i>
                                            </div>
                                            <h6 class="text-uppercase mb-0">Testimoni</h6>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="border-bottom pb-4">
                                                <h1 class="card-text">
                                                    {{ $clients }}</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card mini-stat m-b-30">
                                        <div class="p-3 bg-primary text-white">
                                            <div class="mini-stat-icon">
                                                <i class="fa fa-user-o float-right mb-0"></i>
                                            </div>
                                            <h6 class="text-uppercase mb-0">Team</h6>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="border-bottom pb-4">
                                                <h1 class="card-text">
                                                    {{ $team }}</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card mini-stat m-b-30">
                                        <div class="p-3 bg-primary text-white">
                                            <div class="mini-stat-icon">
                                                <i class="dripicons-folder float-right mb-0"></i>
                                            </div>
                                            <h6 class="text-uppercase mb-0">Paket</h6>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="border-bottom pb-4">
                                                <h1 class="card-text">
                                                    {{ $paket }}</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card mini-stat m-b-30">
                                        <div class="p-3 bg-primary text-white">
                                            <div class="mini-stat-icon">
                                                <i class="dripicons-folder float-right mb-0"></i>
                                            </div>
                                            <h6 class="text-uppercase mb-0">Promo</h6>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="border-bottom pb-4">
                                                <h1 class="card-text">
                                                    {{ $promo }}</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
    
                        
                        </div><!-- container fluid -->

                    </div>
                    @endsection