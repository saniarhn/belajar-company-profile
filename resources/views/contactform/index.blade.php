@extends('master')
@section('content')



                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="float-right page-breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">Admin</a></li>
                                            <li class="breadcrumb-item active">Contact Form Tables</li>
                                        </ol>
                                    </div>
                                    <h5 class="page-title">Contact Form</h5>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Tabel Contact Form </h4>
                                           
                                            <table id="example" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                    <th>Pesan</th>
                                                   
                                                </tr>
                                                </thead>
                                                <tbody>
                                            @foreach($data_contactform as $item)
                                                <tr>
                                                    <td>{{$item->id}}</td>
                                                    <td>{{$item->nama}}</td>
                                                    <td>{{$item->email}}</td>
                                                    <td>{{$item->pesan}}</td>
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