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
                                            <li class="breadcrumb-item"><a href="{{ url('promo')}}">Promo</a></li>
                                            <li class="breadcrumb-item active">Create Promo</li>
                                        </ol>
                                    </div>
                                    <h5 class="page-title">Create Promo</h5>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Create Promo</h4>
                                            
                            <form method="post" enctype='multipart/form-data' action="{{url('/promo/add_promo')}} ">
                            @csrf
                              
                                

                            <div class="form-group mb-4">
                            <label for="Nama Paket">Nama Paket</label>
                                <select name="idpaket" id="" class="form-control">
                                    <option value="">Pilih Paket</option>

                                    @foreach($data_paket as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_paket }}</option>
                                    @endforeach
                                </select>  
                                
                            </div>

                                <div class="form-group mb-4">
                                    <label for="content">harga promo</label>
                                    <input type="text" name="harga_promo" class="form-control border-1" placeholder="Harga Promo" id="title" required >
                                </div>
                               
                                <div class="form-group mb-4">
                                    <label for="status">Status</label>
                                    <select name="status" id="" class="form-control">
                                        <option value="">Pilih Status</option>
                                        <option value="aktif">Aktif</option>
                                        <option value="tidak aktif">Tidak Aktif</option>
                                    </select>
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