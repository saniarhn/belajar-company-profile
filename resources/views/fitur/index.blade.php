@extends('master')
@section('content')



                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="float-right page-breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">Admin</a></li>
                                            <li class="breadcrumb-item active">Fitur Table</li>
                                        </ol>
                                    </div>
                                    <h5 class="page-title">Fitur</h5>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Tabel Fitur</h4>
                                         
                                            <a href="{{url('/fitur/add')}}" class="btn btn-sm btn-danger mb-4">Tambah</a>
                                           
                                            <table id="example" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Jenis Fitur</th>
                                                        <th>Nama Paket</th>
                                                        <th>Status</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($data_fitur as $item)
                                                        <tr>
                                                            <td>{{$item->id_fitur}}</td>
                                                            <td>{{$item->jenis_fitur}}</td>
                                                            <td>{{$item->nama_paket}}</td>
                                                            <td>{{$item->status}}</td>
                                                            <td>
                                                                <a href="{{url('/fitur/edit/'.$item->id_fitur)}}" class="btn btn-sm btn-danger">Edit</a>
                                                                <a href="{{url('/fitur/delete/'.$item->id_fitur)}}" class="btn btn-sm btn-danger">hapus</a>
                                                            </td>
                                                        </tr>
                                                    
                                                    @endforeach
                                                </tbody>
                                            </table>
                                             

                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
            
                          
            
                        </div><!-- container fluid -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

               

                @endsection