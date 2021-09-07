@extends('master')
@section('content')



                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="float-right page-breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#">Drixo</a></li>
                                            <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                            <li class="breadcrumb-item active">Datatable</li>
                                        </ol>
                                    </div>
                                    <h5 class="page-title">Datatable</h5>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Default Datatable</h4>
                                         
                                            <a href="{{url('/maps/add')}}" class="btn btn-sm btn-danger">tambah</a>
                                           
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Alamat</th>
                                                    
                                                    <th>Aksi</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                            @foreach($data_maps as $item)
                                                <tr>
                                                    <td>{{$item->id}}</td>
                                                    <td>{{$item->alamat}}</td>
                                                  
                                                   
                                                  <td>
                                                    <a href="{{url('/maps/edit/'.$item->id)}}" class="btn btn-sm btn-danger">Edit</a>
                                                    <a href="{{url('/maps/delete/'.$item->id)}}" class="btn btn-sm btn-danger">hapus</a>
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