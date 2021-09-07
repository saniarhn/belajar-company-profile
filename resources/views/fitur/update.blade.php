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
                        <li class="breadcrumb-item"><a href="{{ url('fitur')}}">Fitur</a></li>
                        <li class="breadcrumb-item active">Update Fitur</li>
                    </ol>
                </div>
                <h5 class="page-title">Update Fitur</h5>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Update Fitur</h4>
                        @foreach($data_fitur as $item)
        <form method="post" enctype='multipart/form-data' action="{{url('/fitur/edit_fitur/'.$item->id_fitur)}}">
        @csrf
            <div class="form-group mb-4">
                <label for="judul">Jenis Fitur</label>
                <input type="text" name="jenis_fitur" class="form-control border-1" placeholder="Nama" value="{{ $item->jenis_fitur }}" id="title" required >
            </div>
            <div class="form-group mb-4">
               <label for="Nama Paket">Nama Paket</label>
                <select name="id_paket" id="" class="form-control">
                    <option value="{{ $item->id_paket }}">=={{ $item->nama_paket }}==</option>
                    @foreach($data_paket as $item2)
                    <option value="{{ $item2->id }}">{{ $item2->nama_paket }}</option>
                    @endforeach
                </select>  
                
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


@endforeach

@endsection