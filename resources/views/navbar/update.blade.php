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
                        <li class="breadcrumb-item"><a href="{{ url('navbar')}}">Navbar</a></li>
                        <li class="breadcrumb-item active">Update Navbar</li>
                    </ol>
                </div>
                <h5 class="page-title">Update Navbar</h5>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Update Navbar</h4>
                        @foreach($data_navbar as $item)
        <form method="post" enctype="multipart/form-data" action="{{url('/navbar/edit_navbar/'.$item->id)}}">
        @csrf

             <div class="form-group mb-4">
                <label for="Sampul">Foto</label>
                
                <br>
                <input type="file" name="foto"  value="{{$item->foto}}">
            </div>
            <div class="form-group mb-4">
                <label for="judul">Judul 1</label>
                <input type="text" name="judul1" class="form-control border-1" placeholder="Judul 1" value="{{ $item->judul1 }}" id="title" required >
            </div>
            <div class="form-group mb-4">
                <label for="judul">Judul 2</label>
                <input type="text" name="judul2" class="form-control border-1" placeholder="Judul 2" value="{{ $item->judul2 }}" id="title" required >
            </div>
            <div class="form-group mb-4">
                <label for="judul">Judul 3</label>
                <input type="text" name="judul3" class="form-control border-1" placeholder="Judul 3" value="{{ $item->judul3 }}" id="title" required >
            </div>
            <div class="form-group mb-4">
                <label for="judul">Judul 4</label>
                <input type="text" name="judul4" class="form-control border-1" placeholder="Judul 4" value="{{ $item->judul4 }}" id="title" required >
            </div>
            <div class="form-group mb-4">
                <label for="judul">Judul 5</label>
                <input type="text" name="judul5" class="form-control border-1" placeholder="Judul 5" value="{{ $item->judul5 }}" id="title" required >
            </div>
            <div class="form-group mb-4">
                <label for="judul">Judul 6</label>
                <input type="text" name="judul6" class="form-control border-1" placeholder="Judul 6" value="{{ $item->judul6 }}" id="title" required >
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