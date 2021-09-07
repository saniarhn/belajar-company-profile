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
                        <li class="breadcrumb-item"><a href="{{ url('home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Update Home</li>
                    </ol>
                </div>
                <h5 class="page-title">Update Home</h5>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Update Home</h4>
                        @foreach($data_home as $item)
        <form method="post" enctype="multipart/form-data" action="{{url('/home/edit_home/'.$item->id)}}">
        @csrf
            <div class="form-group mb-4">
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control border-1" placeholder="Nama" value="{{ $item->judul }}" id="title" required >
            </div>
            <div class="form-group mb-4">
                <label for="subjudul">Sub Judul</label>
                <input type="text" name="subjudul" class="form-control border-1" placeholder="Nama" value="{{ $item->subjudul }}" id="title" required >
            </div>
            
            
            <div class="form-group mb-4">
                <label for="Sampul">Foto</label>
                
                <br>
                <input type="file" name="foto"  value="{{$item->foto}}">
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


@endforeach

@endsection