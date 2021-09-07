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
                        <li class="breadcrumb-item"><a href="{{ url('promo')}}">Promo</a></li>
                        <li class="breadcrumb-item active">Update Promo</li>
                    </ol>
                </div>
                <h5 class="page-title">Update Promo</h5>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Update Promo</h4>
                        @foreach($data_promo as $item)
        <form method="post" enctype='multipart/form-data' action="{{url('/promo/edit_promo/'.$item->id)}}">
        @csrf
            <!-- <div class="form-group mb-4">
                <label for="judul">Id paket</label>
                <input type="text" name="idpaket" class="form-control border-1" placeholder="Nama Paket" value="{{ $item->idpaket }}" id="title" required >
            </div> -->

            <div class="form-group mb-4">
               <label for="Nama Paket">Nama Paket</label>
                <select name="idpaket" id="" class="form-control">
                    <option value="{{ $item->idpaket }}">=={{ $item->nama_paket }}==</option>
                    @foreach($data_paket as $item2)
                    <option value="{{ $item2->id }}">{{ $item2->nama_paket }}</option>
                    @endforeach
                </select>  
                
            </div>
            <div class="form-group mb-4">
                <label for="content">harga promo</label>
                <input type="text" name="harga_promo" class="form-control border-1" placeholder="Harga Promo" id="title" value="{{ $item->harga_promo }}" required >
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