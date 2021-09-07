@extends('master')
@section('content')



                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="float-right page-breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">Admin</a></li>
                                            <li class="breadcrumb-item active">Home Table</li>
                                        </ol>
                                    </div>
                                    <h5 class="page-title">Home</h5>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Tabel Home</h4>
                                         
                                            <a href="{{url('/home/add')}}" class="btn btn-sm btn-danger mb-4">Tambah</a>
                                           
                                            <table id="example" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Judul</th>
                                                    <th>Sub Judul</th>
                                                    
                                                    <th>Foto</th>
                                                    <th>Aksi</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($data_home as $item)
                                                        <tr>
                                                            <td>{{$item->id}}</td>
                                                            <td>{{$item->judul}}</td>
                                                            <td>{{$item->subjudul}}</td>
                                                        
                                                            <td>
                                                                <img src=" {{ Storage::url($item->foto) }}" alt="" style="width:150px" class="img-thumbnail">
                                                            </td>
                                                        
                                                            <td>
                                                                <a href="{{url('/home/edit/'.$item->id)}}" class="btn btn-sm btn-danger">Edit</a>
                                                                <a href="{{url('/home/delete/'.$item->id)}}" class="btn btn-sm btn-danger">hapus</a>
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