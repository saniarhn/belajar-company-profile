@extends('master')
@section('content')


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
                        <li class="breadcrumb-item"><a href="{{ url('profil')}}">Profil</a></li>
                        <li class="breadcrumb-item active">Update Profil</li>
                    </ol>
                </div>
                <h5 class="page-title">Update Profil</h5>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                    @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


                        <h4 class="mt-0 header-title">Update Profil</h4>
                        @foreach($users as $item)
                            <form method="post" enctype='multipart/form-data' action="{{url('/profil/update/'.$item->id)}}">
                            @csrf
                                <div class="form-group mb-4">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" class="form-control border-1" placeholder="Username" value="{{ $item->username }}" id="title" required >
                                </div>
                                <div class="form-group mb-4">
                                    <label for="judul">Password Baru</label>
                                    <input type="text" name="password" class="form-control border-1" placeholder="Password" id="title" required >
                                
                                </div>
                                <div class="form-group mb-4">
                                    <label for="Sampul">Profil</label>
                                    
                                    <br>
                                    <input type="file" name="profil"  value="{{$item->profil}}">
                                </div>

                                <div class="form-group">
                                    <input class="btn btn-danger" type="reset" >
                                    <button class="btn btn-primary" type="submit">Submit</button>   
                                </div>
                            </form>
                      
                        @endforeach
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container fluid -->

</div> <!-- Page content Wrapper -->


@endsection