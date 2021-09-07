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
                                            <li class="breadcrumb-item"><a href="{{ url('paket')}}">Paket</a></li>
                                            <li class="breadcrumb-item active">Create Paket</li>
                                        </ol>
                                    </div>
                                    <h5 class="page-title">Create Paket</h5>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Create paket</h4>
                                            
                            <form method="post" enctype='multipart/form-data' action="{{url('/paket/add_paket')}} ">
                            @csrf
                                <div class="form-group mb-4">
                                    <label for="judul">Nama Paket</label>
                                    <input type="text" name="nama_paket" class="form-control border-1" placeholder="Nama" id="title" required >
                                </div>
                                <div class="form-group mb-4">
                                    <label for="Sampul">Foto</label>
                                    
                                    <br>
                                    <input type="file" name="foto" >
                                </div>

                                <div class="form-group mb-4">
                                    <label for="content">Keterangan</label>
                                    <textarea name="keterangan" id="elm1"></textarea>
                                </div>
                               
                                <div class="form-group mb-4">
                                    <label for="judul">Harga</label>
                                    <input type="text" name="harga_paket" class="form-control border-1" placeholder="Harga" id="title" required >
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