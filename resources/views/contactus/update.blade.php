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
                    <li class="breadcrumb-item"><a href="{{ url('contactus')}}">Contact Us</a></li>
                    <li class="breadcrumb-item active">Update Contact Us</li>
                </ol>
            </div>
                <h5 class="page-title">Update Contact Us</h5>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Update Contact Us</h4>
                        @foreach($data_contactus as $item)
        <form method="post" action="{{url('/contactus/edit_contactus/'.$item->id)}}">
        @csrf
            <div class="form-group mb-4">
                <label for="judul">Alamat</label>
                <input type="text" name="alamat" class="form-control border-1" placeholder="alamat" value="{{ $item->alamat }}" id="title" required >
            </div>
            <div class="form-group mb-4">
                <label for="subjudul">Email</label>
                <input type="text" name="email" class="form-control border-1" placeholder="email" value="{{ $item->email }}" id="title" required >
            </div>
            <div class="form-group mb-4">
                <label for="subjudul">Nomor</label>
                <input type="text" name="nomor" class="form-control border-1" placeholder="nomor" value="{{ $item->nomor }}" id="title" required >
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