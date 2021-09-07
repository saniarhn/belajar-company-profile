@extends('master')
@section('content')



                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="float-right page-breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">Admin</a></li>
                                            <li class="breadcrumb-item active">Kelebihan Table</li>
                                        </ol>
                                    </div>
                                    <h5 class="page-title">Kelebihan</h5>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Tabel Kelebihan</h4>
                                         
                                            <a href="{{url('/kelebihan/add')}}" class="btn btn-sm btn-danger mb-4">Tambah</a>
                                           
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Kelebihan</th>
                                                    <th>Foto</th>
                                                    <th>Deskripsi</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                            @foreach($data_kelebihan as $item)
                                                <tr>
                                                    <td>{{$item->id}}</td>
                                                    <td>{{$item->kelebihan}}</td>
                                                    
                                                    <td><img src=" {{ Storage::url($item->foto) }}" alt="" style="width:150px"
                        class="img-thumbnail"></td>
                                                    <td>{!!$item->deskripsi!!}</td>
                                                    <td>{{$item->status}}</td>
                                                    <td> 
                                                    <a href="{{url('/kelebihan/edit/'.$item->id)}}" class="btn btn-sm btn-danger">Edit</a>
                                                    <a href="{{url('/kelebihan/delete/'.$item->id)}}" class="btn btn-sm btn-danger">hapus</a>
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