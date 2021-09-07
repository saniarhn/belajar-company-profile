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
                                            <li class="breadcrumb-item"><a href="{{ url('fitur')}}">Fitur</a></li>
                                            <li class="breadcrumb-item active">Create Fitur</li>
                                        </ol>
                                    </div>
                                    <h5 class="page-title">Create Fitur</h5>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Create Fitur</h4>
                                            
                            <form method="post" enctype='multipart/form-data' action="{{url('/fitur/add_fitur')}} ">
                            @csrf
                                <div class="form-group mb-4">
                                    <label for="judul">Jenis Fitur</label>
                                    <input type="text" name="jenis_fitur" class="form-control border-1" placeholder="Jenis Fitur" id="title" required >
                                </div>
                            <div class="form-group mb-4">
                                <label for="Nama Paket">Nama Paket</label>
                                <select name="id_paket" id="" class="form-control">
                                    <option value="">Pilih Paket</option>

                                    @foreach($data_paket as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_paket }}</option>
                                    @endforeach
                                </select>  
                                
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